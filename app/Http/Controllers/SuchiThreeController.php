<?php

namespace App\Http\Controllers;

use App\Models\SuchiThree;
use Illuminate\Http\Request;

class SuchiThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suchithrees= SuchiThree::all();
        return view('admin.AllSuchi.SuchiThree.index', compact('suchithrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AllSuchi.SuchiThree.create');
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
            'PName'=>'required|string|max:255',
            'FName'=>'required|string|max:255',
            'FAddress'=>'required|string|max:255',
            'WillInterest'=>'required|string|max:255',
            'WRegisterd'=>'required|string|max:255',
            'si_no'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
        ]);

        $Three = new SuchiThree();
        $Three->PName = $request->PName;
        $Three->FName = $request->FName;
        $Three->FAddress = $request->FAddress;
        $Three->WillInterest = $request->WillInterest;
        $Three->WRegisterd = $request->WRegisterd;
        $Three->si_no = $request->si_no;
        $Three->balam_no = $request->balam_no;
        $Three->page_no = $request->page_no;
        $Three->save();

        return back()->with('success', 'Schedule No three Add Successfull');
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
        $suchithree = SuchiThree::find($id);
        return view('admin.AllSuchi.SuchiThree.edit', compact('suchithree'));
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
            'PName'=>'required|string|max:255',
            'FName'=>'required|string|max:255',
            'FAddress'=>'required|string|max:255',
            'WillInterest'=>'required|string|max:255',
            'WRegisterd'=>'required|string|max:255',
            'si_no'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
        ]);

        $Three = SuchiThree::find($id);
        $Three->PName = $request->PName;
        $Three->FName = $request->FName;
        $Three->FAddress = $request->FAddress;
        $Three->WillInterest = $request->WillInterest;
        $Three->WRegisterd = $request->WRegisterd;
        $Three->si_no = $request->si_no;
        $Three->balam_no = $request->balam_no;
        $Three->page_no = $request->page_no;
        $Three->save();

        return back()->with('success', 'Schedule No three Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Three = SuchiThree::find($id);
        $Three->delete();

        return back();
    }
}
