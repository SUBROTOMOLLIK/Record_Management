<?php

namespace App\Http\Controllers;

use App\Models\DonarDetail;
use Illuminate\Http\Request;

class DonarDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donars = DonarDetail::all();
        return view('admin.DonarDetails.index', compact('donars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.DonarDetails.create');
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
            'Name'=>'required|string|max:255',
            'FatherName'=>'required|string|max:255',
            'Address'=>'required|string|max:255',
            'Date_of_Birth'=>'required|date',
            'JL_No'=>'required|string|max:255',
            'KhatianNo'=>'required|string|max:255',
            'DagNo'=>'required|string|max:255',
            'No_of_Deed'=>'required|string|max:255',
            'Type_of_Deed'=>'required|string|max:255',
            'Year'=>'required|string|max:255',
        ]);

        $donar_details = new DonarDetail();
        $donar_details->Name = $request->Name;
        $donar_details->FatherName = $request->FatherName;
        $donar_details->Address = $request->Address;
        $donar_details->Date_of_Birth = $request->Date_of_Birth;
        $donar_details->JL_No = $request->JL_No;
        $donar_details->KhatianNo = $request->KhatianNo;
        $donar_details->DagNo = $request->DagNo;
        $donar_details->No_of_Deed = $request->No_of_Deed;
        $donar_details->Type_of_Deed = $request->Type_of_Deed;
        $donar_details->Year = $request->Year;
        $donar_details->save();

        return back()->with('success', 'Donar-Details Add Successfull');
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
        $donar = DonarDetail::find($id);
        return view('admin.DonarDetails.edit', compact('donar'));
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
            'Name'=>'required|string|max:255',
            'FatherName'=>'required|string|max:255',
            'Address'=>'required|string|max:255',
            'Date_of_Birth'=>'required|date',
            'JL_No'=>'required|string|max:255',
            'KhatianNo'=>'required|string|max:255',
            'DagNo'=>'required|string|max:255',
            'No_of_Deed'=>'required|string|max:255',
            'Type_of_Deed'=>'required|string|max:255',
            'Year'=>'required|string|max:255',
        ]);

        $donar_details = DonarDetail::find($id);
        $donar_details->Name = $request->Name;
        $donar_details->FatherName = $request->FatherName;
        $donar_details->Address = $request->Address;
        $donar_details->Date_of_Birth = $request->Date_of_Birth;
        $donar_details->JL_No = $request->JL_No;
        $donar_details->KhatianNo = $request->KhatianNo;
        $donar_details->DagNo = $request->DagNo;
        $donar_details->No_of_Deed = $request->No_of_Deed;
        $donar_details->Type_of_Deed = $request->Type_of_Deed;
        $donar_details->Year = $request->Year;
        $donar_details->save();

        return back()->with('success', 'Donar-Details Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donar_details = DonarDetail::find($id);
        $donar_details->delete();

        return back()->with('success', 'Donar-Details Delete Successfull');
    }
}
