<?php

namespace App\Http\Controllers;

use App\Models\DeedDetail;
use Illuminate\Http\Request;

class DeedDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deeds = DeedDetail::all();
        return view('admin.DeedDetails.index', compact('deeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.DeedDetails.create');
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
            'Year'=>'string|max:255',
            'Sereal_No'=>'required|string|max:255',
            'Deed_No'=>'required|string|max:255',
            'Type_of_Deed'=>'required|string|max:255',
            'Amount'=>'required|string|max:255',
            'Donar'=>'required|string|max:255',
            'Reciever'=>'required|string|max:255',
        ]);

        $deed_details = new DeedDetail();
        $deed_details->Year = $request->Year;
        $deed_details->Sereal_No = $request->Sereal_No;
        $deed_details->Deed_No = $request->Deed_No;
        $deed_details->Type_of_Deed = $request->Type_of_Deed;
        $deed_details->Amount = $request->Amount;
        $deed_details->Donar = $request->Donar;
        $deed_details->Reciever = $request->Reciever;
        $deed_details->save();

        return back()->with('success', 'Deed-Details Add Successfull');
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
      $DDeed= DeedDetail::find($id);
      return view('admin.DeedDetails.edit', compact('DDeed'));
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
            'Year'=>'string|max:255',
            'Sereal_No'=>'required|string|max:255',
            'Deed_No'=>'required|string|max:255',
            'Type_of_Deed'=>'required|string|max:255',
            'Amount'=>'required|string|max:255',
            'Donar'=>'required|string|max:255',
            'Reciever'=>'required|string|max:255',
        ]);

        $deed_details = DeedDetail::find($id);
        $deed_details->Year = $request->Year;
        $deed_details->Sereal_No = $request->Sereal_No;
        $deed_details->Deed_No = $request->Deed_No;
        $deed_details->Type_of_Deed = $request->Type_of_Deed;
        $deed_details->Amount = $request->Amount;
        $deed_details->Donar = $request->Donar;
        $deed_details->Reciever = $request->Reciever;
        $deed_details->save();

        return back()->with('success', 'Deed-Details Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deed_details = DeedDetail::find($id);
        $deed_details->delete();

        return back()->with('success', 'Deed-Details Delete Successfull');
    }
}
