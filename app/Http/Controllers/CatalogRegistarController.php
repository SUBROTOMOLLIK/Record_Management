<?php

namespace App\Http\Controllers;

use App\Models\CatalogRegistar;
use App\Models\OfficeName;
use App\Models\SarokNo;
use Illuminate\Http\Request;

class CatalogRegistarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = CatalogRegistar::orderBy('id','desc')->get();
        return view('admin.CatalogRegistar.index', compact('catalogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $bohi = SarokNo::all();
        // $Office = OfficeName::all();

        return view('admin.CatalogRegistar.create');
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
            //'si_no'=>'required|string|max:255',
            //'office_name'=>'required|string|max:255',
            //'bohi_name'=>'required|string|max:255',
            //'opening_date'=>'required|string|max:255',
            //'balam_no'=>'required|string|max:255',
            //'balam_year'=>'required|string|max:255',
           // 'deed_number_book'=>'required|string|max:255',
            //'close_date_book'=>'required|string|max:255',
            //'write_page_no'=>'required|string|max:255',
           // 'unwrite_page_no'=>'required|string|max:255',
            //'sending_date_thana'=>'required|string|max:255',
            //'reciving_date_thana'=>'required|string|max:255',
            //'kamra_no'=>'required|string|max:255',
            //'rack_no'=>'required|string|max:255',
            //'self_no'=>'required|string|max:255',
            //'comment'=>'required|string|max:255',
        ]);

        $catalog = new CatalogRegistar();
        $catalog->si_no = $request->si_no;
        $catalog->office_name = $request->office_name;
        $catalog->bohi_name = $request->bohi_name;
        $catalog->opening_date = $request->opening_date;
        $catalog->balam_no = $request->balam_no;
        $catalog->balam_year = $request->balam_year;
        $catalog->deed_number_book = $request->deed_number_book;
        $catalog->close_date_book = $request->close_date_book;
        $catalog->write_page_no = $request->write_page_no;
        $catalog->unwrite_page_no = $request->unwrite_page_no;
        $catalog->sending_date_thana = $request->sending_date_thana;
        $catalog->reciving_date_thana = $request->reciving_date_thana;
        $catalog->kamra_no = $request->kamra_no;
        $catalog->rack_no = $request->rack_no;
        $catalog->self_no = $request->self_no;
        $catalog->comment = $request->comment;
        $catalog->save();

        return back()->with('success', 'New Catalog Registar Add Successfull');


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
        $catalog = CatalogRegistar::find($id);
        return view('admin.CatalogRegistar.edit', compact('catalog'));
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
        //$request->validate([
            //'si_no'=>'required|string|max:255',
            //'office_name'=>'required|string|max:255',
            //'bohi_name'=>'required|string|max:255',
            //'opening_date'=>'required|string|max:255',
            //'balam_no'=>'required|string|max:255',
            //'balam_year'=>'string|max:255',
            //'deed_number_book'=>'required|string|max:255',
            //'close_date_book'=>'string|max:255',
            //'write_page_no'=>'required|string|max:255',
            //'unwrite_page_no'=>'required|string|max:255',
            //'sending_date_thana'=>'string|max:255',
            //'reciving_date_thana'=>'string|max:255',
            //'kamra_no'=>'required|string|max:255',
            //'rack_no'=>'required|string|max:255',
            //'self_no'=>'required|string|max:255',
            //'comment'=>'string|max:255',
        //]);

        $catalog = CatalogRegistar::find($id);
        $catalog->si_no = $request->si_no;
        $catalog->office_name = $request->office_name;
        $catalog->bohi_name = $request->bohi_name;
        $catalog->opening_date = $request->opening_date;
        $catalog->balam_no = $request->balam_no;
        $catalog->balam_year = $request->balam_year;
        $catalog->deed_number_book = $request->deed_number_book;
        $catalog->close_date_book = $request->close_date_book;
        $catalog->write_page_no = $request->write_page_no;
        $catalog->unwrite_page_no = $request->unwrite_page_no;
        $catalog->sending_date_thana = $request->sending_date_thana;
        $catalog->reciving_date_thana = $request->reciving_date_thana;
        $catalog->kamra_no = $request->kamra_no;
        $catalog->rack_no = $request->rack_no;
        $catalog->self_no = $request->self_no;
        $catalog->comment = $request->comment;
        $catalog->save();

        return back()->with('success', 'Catalog Registar Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalog = \App\Models\CatalogRegistar::find($id);
        $catalog->delete();

        return back();
    }
}
