<?php

namespace App\Http\Controllers;

use App\Models\StoreDetail;
use Illuminate\Http\Request;

class StoreDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = StoreDetail::all();
        return view('admin.StoreDetails.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.StoreDetails.create');
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
            'Rack_No'=>'required|string|max:255',
            'Year'=>'required|string|max:255',
            'Balam_No'=>'required|string|max:255',
            'Deed_No'=>'required|string|max:255',
            'Page_No'=>'required|string|max:255',
        ]);

        $store_details = new StoreDetail();
        $store_details->Rack_No = $request->Rack_No;
        $store_details->Year = $request->Year;
        $store_details->Balam_No = $request->Balam_No;
        $store_details->Deed_No = $request->Deed_No;
        $store_details->Page_No = $request->Page_No;

        $store_details->save();

        return back()->with('success', 'Store-Details Add Successfull');
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
        $DStore = StoreDetail::find($id);
        return view('admin.StoreDetails.edit', compact('DStore'));
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
            'Rack_No'=>'required|string|max:255',
            'Year'=>'required|string|max:255',
            'Balam_No'=>'required|string|max:255',
            'Deed_No'=>'required|string|max:255',
            'Page_No'=>'required|string|max:255',
        ]);

        $store_details = StoreDetail::find($id);
        $store_details->Rack_No = $request->Rack_No;
        $store_details->Year = $request->Year;
        $store_details->Balam_No = $request->Balam_No;
        $store_details->Deed_No = $request->Deed_No;
        $store_details->Page_No = $request->Page_No;

        $store_details->save();

        return back()->with('success', 'Store-Details Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store_details = StoreDetail::find($id);
        $store_details->delete();

        return back()->with('success', 'Store-Details Delete Successfull');
    }
}
