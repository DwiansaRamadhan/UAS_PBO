<?php

namespace App\Http\Controllers;

use App\Models\ControlStatment;
use Illuminate\Http\Request;

class ControlStatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = ControlStatment::get();
        return response()->json($test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        create(Request $request);
        $waktu = Carbon::now()->toDateTimeString();
        $this->validate($request, ['untuk_if', 'untuk_for']);
        $request['created_at'] = $waktu;
        $request['update_at'] = $waktu;
        $data = DB::connection('mysql')
                ->table('control_statments')
                ->insert($request->all());
        return response()->json('berhasil');                    
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
     * @param  \App\Models\ControlStatment  $controlStatment
     * @return \Illuminate\Http\Response
     */
    public function show(ControlStatment $controlStatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlStatment  $controlStatment
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlStatment $controlStatment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ControlStatment  $controlStatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControlStatment $controlStatment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlStatment  $controlStatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlStatment $controlStatment)
    {
        //
    }
}
