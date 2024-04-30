<?php

namespace App\Http\Controllers;
use App\Models\Transfer;
use App\Models\Office;
use App\Models\User;
use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $offices = Office::all();
        if (Gate::allows('create', new User())) {
            return view('input_transfer', compact('offices'));
        } else {
            return response("You don't have that level of authority");
        }
    }
        

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {          

        $senderOffice = Office::find($request->input('send'));
        if (!$senderOffice) {
            return response('Error: No sending office found');
        }

        $receiverOffice = Office::find($request->input('recipient'));
        if (!$receiverOffice) {
            return response('Error: No recipient office found');
        }
        $amount = $request->input('value');
    
        if ($senderOffice->RemainingBalance < $amount) {
            return response('Error: Insufficient balance');
        } 
        else 
        {
            DB::beginTransaction();
            try 
            {
                $transfer = Transfer::create([
                    'Number' => $request->input('number'),
                    'Sender'=> $request->input('Sender'),
                    'Receiver'=> $request->input('Receiver'),
                    'RecipientOffice' => $receiverOffice->Nameoffice,
                    'SendOffice' => $senderOffice->Nameoffice,
                    'Value' => $amount,
                    'Date' => $request->input('date'),
                ]);
               // $transfer->offices()->associate([$receiverOffice->id, $senderOffice->id]);

                $senderOffice->RemainingBalance -= $amount;
                $senderOffice->save();
                $receiverOffice->RemainingBalance += $amount;
                $receiverOffice->save();

                $transfer->user_id = auth()->user()->id;
                $transfer->save();

                $transfer->office_id = $senderOffice->id;
                $transfer->save();
                
                DB::commit();
                return response('Success: Transfer created successfully');
            } 
            catch (\Exception $e)
            {
               DB::rollBack();
              //  return response('Error: Failed to create transfer');
              return $e->getMessage();
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Request $request)
    {
        $transfer_num = $request->input('transfer_num');
        // return $b1;   
        $transfer = Transfer::all();
        $allowed_transfers = [];
        foreach ($transfer as $transfers) 
        {
            if (Gate::allows('view', $transfers)) 
            {
                array_push($allowed_transfers, $transfers);
            }
        }
        if($transfer_num)
        {
            $transfers = Transfer::where('Number', $transfer_num)->get();
            return view('view-transfers', ['transfers' => $transfers]);
        }
        else
        { 
            if (count($allowed_transfers) > 0) 
            {
                return view('view-transfers',[
                    'transfers' => $allowed_transfers
                ]);
            }
            else 
            {
                return response("You don't have that level of authority");
            }
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $offices=Office::all();
        $transfer= Transfer::find($id);
        if (Gate::allows('update', $transfer))
        { 
            return view('edit',[
                'transfer'=>$transfer,
                'offices'=>$offices
            ]);
        }else{ 
         response("You don't have that level of authority"); 
         }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transfer=Transfer::find($id);
        if (Gate::allows('update', $transfer))
        {          
            $transfer->Number = $request->number;
            $transfer->RecipientOffice = $request->recipient;
            $transfer->SendOffice = $request->send;
            $transfer->Value = $request->value;
            $transfer->Date = $request->date;
            $transfer->save();
            return response('TM');
        }else{
            response("You don't have that level of authority");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { 
 
        $transfer = Transfer::find($id);

        if (Gate::allows('delete', $transfer)) {
            $transfer->delete();
            return response( 'تم الحذف بنجاح');
        } else {
            return response("You don't have that level of authority");
        }

    }

    public function search(Request $request)
    {
        $transfer_num = $request->input('transfer_num');
        $transfers = Transfer::where('Number', $transfer_num)->get();

        return view('view-transfers', [
            'transfers' => $transfers
        ]);
    }

    // app/Http/Controllers/TransferController.php

    public function verify(Request $request)
    {
        $request->validate([
            'Verify' => 'required|digits_between:1,1000',
        ]);

        $transfer_n = $request->input('Verify');
        $transfers = Transfer::where('Number', $transfer_n)->get();

        if ($transfers->isNotEmpty()) {
            return response('تم إرسال حوالتك عزيزي');
        } else {
            return response('لم يتم إرسال حوالتك عزيزي، راجع المكتب المرسل');
        }
    }
}
