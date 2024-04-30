<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Currency;
use Illuminate\Support\Facades\Gate;

class RateController extends Controller
{
    
    public function showForm()
    {
        $currencies = Currency::all();
        if(Gate::allows('createCurrency',new User)){
          return view('currency_rates', compact('currencies'));
        }else{
            return response("You don't have that level of authority");
        }
    }

    public function saveRates(Request $request)
    {
        $rate = new Rate;
        $rate->currency_id = $request->input('currency');
        $rate->date = $request->input('date');
        $rate->usd_rate = $request->input('usd_rate');
        $rate->eur_rate = $request->input('eur_rate');
        $rate->sy_rate = $request->input('sy_rate');
        $rate->tr_rate = $request->input('tr_rate');
        $rate->save();

        return response( 'TM Of Saved Data');
    }
    public function viewRates()
    {
        $rates = Rate::all();
        return view('view_rates', compact('rates'));
    }
}
