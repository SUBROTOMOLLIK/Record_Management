<?php

namespace App\Http\Controllers;

use App\Models\SarokNo;
use Illuminate\Http\Request;

class SarokNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarok = SarokNo::all();
        return view('admin.SarokNumer.index', compact('sarok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.SarokNumer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $sarok = new SarokNo();
        $sarok->sarok_no = $request->name;
        $sarok->save();

        return back()->with('success','Bohi No Add Successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sarok = SarokNo::find($id);
       return view('admin.SarokNumer.edit', compact('sarok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $sarok = SarokNo::find($id);
        $sarok->sarok_no = $request->name;
        $sarok->save();

        return back()->with('success','Bohi No Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sarok = SarokNo::find($id);
        $sarok->delete();

        return back()->with('success','Bohi No Delete Successful');
    }
}
