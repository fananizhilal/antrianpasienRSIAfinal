<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class AntrianController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('antrian.antrian');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function show(Antrian $antrian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function edit(Antrian $antrian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antrian $antrian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antrian $antrian)
    {
        //
    }
}