<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfficeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\RateController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;


//Webe Site Transfer
Route::get('/', function ()
 {
    if (Auth::check()) {
        return view('auth.login');
    }
    else{
        return view('auth.register');
    }

})->name('Home');


//Sign Up
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [AuthController::class,'register'])->name('registerUser');
//Sign In
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [AuthController::class,'login'])->name('loginUser');
//logout
Route::post('/logout',function () {
        Auth::logout();
        return view('auth.login');
})->name('logout');



//Transfers
Route::resource('/transfers',TransferController::class);

Route::get('/transfers/search', [TransferController::class, 'search'])
->name('transfers.search');

Route::post('/transfers/verify', [TransferController::class, 'verify'])
->name('transfers.Verify');

Route::get('/verify', function(){
    return view('Sure');
});




//Office
Route::resource('/offices',OfficeController::class);
Route::get('/addoffice',function () {
    return view('addOffice');
})->name('addOffice');


//Currency
Route::get('/currency-rates', [RateController::class, 'showForm']);
Route::post('/currency-rates', [RateController::class, 'saveRates'])->name('save_rates');


//Rate
Route::get('/viewRates', [RateController::class, 'viewRates'])->name('view_rates');

//language
Route::get('/language/{locale}', function(string $locale) {
    // if(!in_array($locale,['ar','en','tr']))
    // {
    //     abort(400);
    // }
    // App::setLocale($locale);
    // return [
    //     __('mylan.h1'),__('mylan.h2'),
    // ] ;
    if(in_array($locale,['sp','en','tr'])) {
        session()->put('locale',$locale);
    }
    return redirect()->back();
})->name('language');
