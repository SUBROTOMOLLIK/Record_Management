<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Document;
use App\Models\OfficeName;
use App\Models\SarokNo;
use App\Models\SearchDeed;
use App\Models\SearchRelation;
use App\Models\Thana;
use App\Models\Union;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\UserFormNotification;
use Illuminate\Support\Facades\Notification;

class QPDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $deeds = Document::all();
        $search_rels = SearchRelation::all();
        $officeName = OfficeName::all();
        $division = Division::all();
        $district = District::all();
        $thana= Thana::all();
        $union= Union::all();
        $qpdeeds = SearchDeed::orderBy('id','desc')->get();
        return view('admin.Application.QPDocument.index', compact('users','deeds','search_rels','officeName','division','district','thana','union','qpdeeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'bn_name'=>'required|string|max:255',
            'name'=>'required|string|max:255',
            'division'=>'required|string|max:255',
            'district'=>'required|string|max:255',
            'thana'=>'required|string',
            'union'=>'required|string|max:255',
            'nid_name'=>'required|string|max:255',
            'search_year'=>'required|string|max:255',
            'type_of_deed'=>'required|string|max:255',
            'serach_inspaction'=>'required|string|max:255',
            'bohi_no'=>'required|string|max:255',
            'office_name'=>'required|string|max:255',
            'aplication_deed'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
            'register_office'=>'required|string|max:255',
            'date'=>'required|string|max:255',
            'bank_name'=>'required|string|max:255',
            'bank_fees_date'=>'required|string|max:255',
            'pay_order'=>'required|string|max:255',
        ]);

        $search_deed = new SearchDeed();
        $search_deed->applicator_id = Auth::user()->id;
        $search_deed->bn_name = $request->bn_name;
        $search_deed->name = $request->name;
        $search_deed->division = $request->division;
        $search_deed->district = $request->district;
        $search_deed->thana = $request->thana;
        $search_deed->union = $request->union;
        $search_deed->nid_name = $request->nid_name;
        $search_deed->search_year = $request->search_year;
        $search_deed->type_of_deed = $request->type_of_deed;
        $search_deed->serach_inspaction = $request->serach_inspaction;
        $search_deed->bohi_no = $request->bohi_no;
        $search_deed->office_name = $request->office_name;
        $search_deed->aplication_deed = $request->aplication_deed;
        $search_deed->balam_no = $request->balam_no;
        $search_deed->page_no = $request->page_no;
        $search_deed->register_office = $request->register_office;
        $search_deed->date = $request->date;
        $search_deed->bank_name = $request->bank_name;
        $search_deed->bank_fees_date = $request->bank_fees_date;
        $search_deed->pay_order = $request->pay_order;
        $search_deed->save();

        return back()->with('success', 'Application Submit Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $qpdeed = SearchDeed::find($id);
        $OfficeName = OfficeName::all();
        $docs = Document::all();
        $bohis = SarokNo::all();
        $divs = Division::all();
        $dists = District::all();
        $thans= Thana::all();
        $unions = Union::all();
        return view('admin.Application.QPDocument.view', compact('qpdeed','OfficeName','docs','bohis','divs','dists','thans','unions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qpdeed = SearchDeed::find($id);
        $OfficeName = OfficeName::all();
        $docs = Document::all();
        $bohis = SarokNo::all();
        $divs = Division::all();
        $dists = District::all();
        $thans= Thana::all();
        $unions = Union::all();
        return view('admin.Application.QPDocument.edit', compact('qpdeed','OfficeName','docs','bohis','divs','dists','thans','unions'));
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
            'bn_name'=>'required|string|max:255',
            'name'=>'required|string|max:255',
            'division'=>'required|string|max:255',
            'district'=>'required|string|max:255',
            'thana'=>'required|string',
            'union'=>'required|string|max:255',
            'nid_name'=>'required|string|max:255',
            'search_year'=>'required|string|max:255',
            'type_of_deed'=>'required|string|max:255',
            'serach_inspaction'=>'required|string|max:255',
            'bohi_no'=>'required|string|max:255',
            'office_name'=>'required|string|max:255',
            'aplication_deed'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'page_no'=>'required|string|max:255',
            'register_office'=>'required|string|max:255',
            'date'=>'required|string|max:255',
            'bank_name'=>'required|string|max:255',
            'bank_fees_date'=>'required|string|max:255',
            'pay_order'=>'required|string|max:255',
        ]);

        $search_deed = SearchDeed::find($id);
        $search_deed->applicator_id = $request->applicator_id;
        $search_deed->bn_name = $request->bn_name;
        $search_deed->name = $request->name;
        $search_deed->division = $request->division;
        $search_deed->district = $request->district;
        $search_deed->thana = $request->thana;
        $search_deed->union = $request->union;
        $search_deed->nid_name = $request->nid_name;
        $search_deed->search_year = $request->search_year;
        $search_deed->type_of_deed = $request->type_of_deed;
        $search_deed->serach_inspaction = $request->serach_inspaction;
        $search_deed->bohi_no = $request->bohi_no;
        $search_deed->office_name = $request->office_name;
        $search_deed->aplication_deed = $request->aplication_deed;
        $search_deed->balam_no = $request->balam_no;
        $search_deed->page_no = $request->page_no;
        $search_deed->register_office = $request->register_office;
        $search_deed->date = $request->date;
        $search_deed->bank_name = $request->bank_name;
        $search_deed->bank_fees_date = $request->bank_fees_date;
        $search_deed->pay_order = $request->pay_order;
        $search_deed->status = $request->status;
        $search_deed->save();

        $user = User::first();
        Notification::send($user, new UserFormNotification($search_deed->bn_name));

        return back()->with('success', 'Application Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     //
    }
}
