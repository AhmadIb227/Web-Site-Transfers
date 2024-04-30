<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransferResource;
use App\Models\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return new TransferCollection(Transfer::all())
        // return  TransferResource::collection(Transfer::all());
        return 'ok';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return response('Success: Transfer created successfully');
        // $transfer=new Transfer;
        // $transfer->Number = $request->Number;
        // $transfer->RecipientOffice = $request->RecipientOffice;
        // $transfer->SendOffice = $request->SendOffice;
        // $transfer->Value = $request->Value;
        // $transfer->Date = $request->Date;
        // $transfer->save();
        $transfer = Transfer::create([
            'Number' => $request->Number,
            'Sender'=> $request->Sender,
            'RecipientOffice' => $request->RecipientOffice,
            'SendOffice' => $request->SendOffice,
            'Receiver'=> $request->Receiver,
            'Value' => $request->Value,
            'Date' => $request->Date,
        ]);
        $transfer->save();
        return response()->json($transfer);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    { 
        $transfer=Transfer::all();
        return response()->json($transfer);
     // return new TransferResource($transfer);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $transfer=Transfer::find($id);  
         //dd($transfer);
        $transfer->update($request->only([
            'Value','Number','RecipientOffice','SendOffice','Date'
        ]));    
         return response('TM Of Update');
            // $transfer->Number = $request->number;
           // $transfer->RecipientOffice = $request->recipient;
            // $transfer->SendOffice = $request->send;
            // $transfer->Value = $request->value;
            // $transfer->Date = $request->date;
            // $transfer->save();
           
        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         Transfer::find($id)->delete();
         return response('TM Of Delete');
        //return response()->json(null,204);
        
    }
}
