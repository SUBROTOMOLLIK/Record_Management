<?php

namespace App\Http\Controllers;

use App\Models\SuchiTwo;
use Illuminate\Http\Request;

class SuchiTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suchitwos = SuchiTwo::all();
        return view('admin.AllSuchi.SuchiTwo.index', compact('suchitwos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AllSuchi.SuchiTwo.create');
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
            'LProperty'=>'required|string|max:255',
            'AProperty'=>'required|string|max:255',
            'CityThana'=>'required|string|max:255',
            'District'=>'required|string|max:255',
            'type_of_deed'=>'required|string|max:255',
            'amount_of_money'=>'required|string|max:255',
            'WRegisterd'=>'required|string|max:255',
            'jailNo'=>'required|string|max:255',
            'si_no'=>'required|string|max:255',
            'year'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
        ]);

        $Stwo = new SuchiTwo();
        $Stwo->LProperty = $request->LProperty;
        $Stwo->AProperty = $request->AProperty;
        $Stwo->CityThana = $request->CityThana;
        $Stwo->District = $request->District;
        $Stwo->type_of_deed = $request->type_of_deed;
        $Stwo->amount_of_money = $request->amount_of_money;
        $Stwo->WRegisterd = $request->WRegisterd;
        $Stwo->jailNo = $request->jailNo;
        $Stwo->si_no = $request->si_no;
        $Stwo->year = $request->year;
        $Stwo->balam_no = $request->balam_no;
        $Stwo->page_no = $request->page_no;
        $Stwo->save();

        return back()->with('success', 'Schedule No Two Add Successfull');
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
        $suchitwo= SuchiTwo::find($id);
        return view('admin.AllSuchi.SuchiTwo.edit', compact('suchitwo'));
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
            'LProperty'=>'required|string|max:255',
            'AProperty'=>'required|string|max:255',
            'CityThana'=>'required|string|max:255',
            'District'=>'required|string|max:255',
            'type_of_deed'=>'required|string|max:255',
            'amount_of_money'=>'required|string|max:255',
            'WRegisterd'=>'required|string|max:255',
            'jailNo'=>'required',
            'si_no'=>'required|string|max:255',
            'year'=>'required',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
        ]);

        $Stwo = SuchiTwo::find($id);
        $Stwo->LProperty = $request->LProperty;
        $Stwo->AProperty = $request->AProperty;
        $Stwo->CityThana = $request->CityThana;
        $Stwo->District = $request->District;
        $Stwo->type_of_deed = $request->type_of_deed;
        $Stwo->amount_of_money = $request->amount_of_money;
        $Stwo->WRegisterd = $request->WRegisterd;
        $Stwo->jailNo = $request->jailNo;
        $Stwo->si_no = $request->si_no;
        $Stwo->year = $request->year;
        $Stwo->balam_no = $request->balam_no;
        $Stwo->page_no = $request->page_no;
        $Stwo->save();

        return back()->with('success', 'Schedule No Two Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Stwo = SuchiTwo::find($id);
        $Stwo->delete();

        return back();
    }
}
