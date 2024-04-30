<?php

namespace App\Http\Controllers;
use App\Models\Office;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $office=Office::all();
        return view('view-office',compact('office'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //var_dump($request) ;
        Office::create([
            'Nameoffice'=>$request->input('Nameoffice') ,
            'RemainingBalance'=>$request->input('RemainingBalance') ,
            'Title'=>$request->input('Title')
        ]);
        return "success";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
