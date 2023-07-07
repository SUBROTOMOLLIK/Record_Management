<?php

namespace App\Http\Controllers;

use App\Models\SuchiFour;
use Illuminate\Http\Request;

class SuchiFourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suchifours= SuchiFour::all();
        return view('admin.AllSuchi.SuchiFour.index', compact('suchifours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AllSuchi.SuchiFour.create');
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
            'PerInterest'=>'required|string|max:255',
            'si_no'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
        ]);

        $Sfour = new SuchiFour();
        $Sfour->PName = $request->PName;
        $Sfour->FName = $request->FName;
        $Sfour->FAddress = $request->FAddress;
        $Sfour->PerInterest = $request->PerInterest;
        $Sfour->si_no = $request->si_no;
        $Sfour->balam_no = $request->balam_no;
        $Sfour->page_no = $request->page_no;
        $Sfour->save();

        return back()->with('success', 'Schedule No Four Add Successfull');
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
        $suchifour = SuchiFour::find($id);
        return view('admin.AllSuchi.SuchiFour.edit', compact('suchifour'));
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
            'PerInterest'=>'required|string|max:255',
            'si_no'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
        ]);

        $Sfour = SuchiFour::find($id);
        $Sfour->PName = $request->PName;
        $Sfour->FName = $request->FName;
        $Sfour->FAddress = $request->FAddress;
        $Sfour->PerInterest = $request->PerInterest;
        $Sfour->si_no = $request->si_no;
        $Sfour->balam_no = $request->balam_no;
        $Sfour->page_no = $request->page_no;
        $Sfour->save();

        return back()->with('success', 'Schedule No Four Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Sfour = SuchiFour::find($id);
        $Sfour->delete();

        return back();
    }
}
