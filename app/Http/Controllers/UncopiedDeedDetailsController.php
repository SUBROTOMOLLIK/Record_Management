<?php

namespace App\Http\Controllers;

use App\Models\UncopiedDeedDetail;
use Illuminate\Http\Request;

class UncopiedDeedDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UDeed_details = UncopiedDeedDetail::all();
        return view('admin.UncopiedDeedDetails.index', compact('UDeed_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.UncopiedDeedDetails.create');
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

        $udeed_details = new UncopiedDeedDetail();
        $udeed_details->Year = $request->Year;
        $udeed_details->Sereal_No = $request->Sereal_No;
        $udeed_details->Deed_No = $request->Deed_No;
        $udeed_details->Type_of_Deed = $request->Type_of_Deed;
        $udeed_details->Amount = $request->Amount;
        $udeed_details->Donar = $request->Donar;
        $udeed_details->Reciever = $request->Reciever;
        $udeed_details->save();

        return back()->with('success', 'Uncopied-Deed-Details Add Successfull');
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
        $UDeed_detail = UncopiedDeedDetail::find($id);
        return view('admin.UncopiedDeedDetails.edit', compact('UDeed_detail'));
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

        $udeed_details = UncopiedDeedDetail::find($id);
        $udeed_details->Year = $request->Year;
        $udeed_details->Sereal_No = $request->Sereal_No;
        $udeed_details->Deed_No = $request->Deed_No;
        $udeed_details->Type_of_Deed = $request->Type_of_Deed;
        $udeed_details->Amount = $request->Amount;
        $udeed_details->Donar = $request->Donar;
        $udeed_details->Reciever = $request->Reciever;
        $udeed_details->save();

        return back()->with('success', 'Uncopied-Deed-Details Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $udeed_details = UncopiedDeedDetail::find($id);
        $udeed_details->delete();

        return back()->with('success', 'Uncopied-Deed-Details Delete Successfull');
    }
}
