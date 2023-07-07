<?php

namespace App\Http\Controllers;

use App\Models\OfficeName;
use Illuminate\Http\Request;

class OfficeNameController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $OfficeNames = OfficeName::all();
        return view('admin.OfficeName.index', compact('OfficeNames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.OfficeName.create');
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

        $document = new OfficeName();
        $document->OfficeName = $request->name;
        $document->save();

        return back()->with('success','Office Name Add Successful');
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
        $OfficeName = OfficeName::find($id);
        return view('admin.OfficeName.edit', compact('OfficeName'));
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

        $document = OfficeName::find($id);
        $document->OfficeName = $request->name;
        $document->save();

        return back()->with('success','Office Name Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = OfficeName::find($id);
        $document->delete();

        return back()->with('success','Office Name Delete Successful');
    }
}
