<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.pages.carrer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'phone'=>'required',
            'image'=>'required',
        ]);


        Carrier::create([
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email') ?? '',
            'message'=>$request->input('message') ?? '',
            'image'=>uploadImage($request),
        ]);

        toast('Cv Droped Successfully......... :)','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrier $carrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrier $carrier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrier $carrier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrier $carrier)
    {
        //
    }
}
