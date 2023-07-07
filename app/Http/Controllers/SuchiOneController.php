<?php

namespace App\Http\Controllers;

use App\Models\SDocument;
use App\Models\SuchiOne;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuchiOneController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $suchiones = SuchiOne::all();
        $year = Year::all();
        return view('admin.AllSuchi.SuchiOne.index', compact('suchiones', 'year'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $years= Year::orderBy('id', 'desc')->get();
        return view('admin.AllSuchi.SuchiOne.create', compact('years'));
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
            'BenPerson'=>'required|string|max:255',
            'WRegisterd'=>'required|string|max:255',
            'si_no'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
            'year'=>'required',

        ]);

        $Sone = new SuchiOne();
        $Sone->PName = $request->PName;
        $Sone->FName = $request->FName;
        $Sone->FAddress = $request->FAddress;
        $Sone->BenPerson = $request->BenPerson;
        $Sone->WRegisterd = $request->WRegisterd;
        $Sone->si_no = $request->si_no;
        $Sone->balam_no = $request->balam_no;
        $Sone->page_no = $request->page_no;
        $Sone->year = $request->year;
        $Sone->save();

        return back()->with('success', 'Schedule No One Add Successfull');
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
        $years = Year::orderBy('id', 'desc')->get();
        $suchione = SuchiOne::find($id);
        return view('admin.AllSuchi.SuchiOne.edit', compact('years','suchione'));
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
            'BenPerson'=>'required|string|max:255',
            'WRegisterd'=>'required|string|max:255',
            'si_no'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
            'year'=>'required',
        ]);

        $Sone = SuchiOne::find($id);
        $Sone->PName = $request->PName;
        $Sone->FName = $request->FName;
        $Sone->FAddress = $request->FAddress;
        $Sone->BenPerson = $request->BenPerson;
        $Sone->WRegisterd = $request->WRegisterd;
        $Sone->si_no = $request->si_no;
        $Sone->balam_no = $request->balam_no;
        $Sone->page_no = $request->page_no;
        $Sone->year = $request->year;

        $Sone->save();

        return back()->with('success', 'Schedule No One Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Sone = SuchiOne::find($id);
        $Sone->delete();
        return back();

    }
}
