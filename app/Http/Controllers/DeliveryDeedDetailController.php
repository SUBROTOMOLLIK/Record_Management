<?php

namespace App\Http\Controllers;

use App\Models\DeliveryDeedDetail;
use Illuminate\Http\Request;

class DeliveryDeedDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Dedeeds = DeliveryDeedDetail::all();
        return view('admin.DeliveryDeedDetails.index', compact('Dedeeds'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.DeliveryDeedDetails.create');
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
            'Year'=>'required|string|max:255',
            'Deed_No'=>'required|string|max:255',
        ]);

        $ddeed_details = new DeliveryDeedDetail();
        $ddeed_details->Year = $request->Year;
        $ddeed_details->Deed_No = $request->Deed_No;
        $ddeed_details->save();

        return back()->with('success', 'Delivery-Deed-Details Add Successfull');
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $DeDeed= DeliveryDeedDetail::find($id);
      return view('admin.DeliveryDeedDetails.edit', compact('DeDeed'));
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
            'Year'=>'required|string|max:255',
            'Deed_No'=>'required|string|max:255',
        ]);

        $ddeed_details = DeliveryDeedDetail::find($id);
        $ddeed_details->Year = $request->Year;
        $ddeed_details->Deed_No = $request->Deed_No;
        $ddeed_details->save();

        return back()->with('success', 'Delivery Deed-Details Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ddeed_details = DeliveryDeedDetail::find($id);
        $ddeed_details->delete();

        return back()->with('success', 'Delivery Deed-Details Delete Successfull');
    }
}
