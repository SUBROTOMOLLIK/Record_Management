<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Document;
use App\Models\OfficeName;
use App\Models\SDocument;
use App\Models\SearchRelation;
use App\Models\Thana;
use App\Models\Union;
use App\Models\User;
use App\Models\Year;
use App\Notifications\UserFormNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class SDocumentController extends Controller
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
        $app_searchs = SDocument::orderBy('id','desc')->get();
        $yearList = Year::all();
        return view('admin.Application.SDocument.index', compact('users','deeds','search_rels','officeName','division','district','thana','union','app_searchs','yearList'));
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
            'jailNo'=>'required|string|max:255',
            'type_of_deed'=>'required|string|max:255',
            'serach_inspaction'=>'required|string|max:255',
            'search_deed_rel'=>'required|string|max:255',
            'office_name'=>'required|string|max:255',
            'register_office'=>'required|string|max:255',
            'date'=>'required|string|max:255',
            'bank_name'=>'required|string|max:255',
            'bank_fees_date'=>'required|string|max:255',
            'pay_order'=>'required|string|max:255',
        ]);

        $search_app = new SDocument();
        $search_app->applicator_id = Auth::user()->id;
        $search_app->bn_name = $request->bn_name;
        $search_app->name = $request->name;
        $search_app->division = $request->division;
        $search_app->district = $request->district;
        $search_app->thana = $request->thana;
        $search_app->union = $request->union;
        $search_app->nid_name = $request->nid_name;
        $search_app->jailNo = $request->jailNo;
        $search_app->search_year = json_encode($request->search_year);
        $search_app->type_of_deed = $request->type_of_deed;
        $search_app->serach_inspaction = $request->serach_inspaction;
        $search_app->search_deed_rel = $request->search_deed_rel;
        $search_app->office_name = $request->office_name;
        $search_app->register_office = $request->register_office;
        $search_app->date = $request->date;
        $search_app->bank_name = $request->bank_name;
        $search_app->bank_fees_date = $request->bank_fees_date;
        $search_app->pay_order = $request->pay_order;
        $search_app->save();

        return back()->with('success', 'Search Application Submited Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sdeed = SDocument::find($id);
        $OfficeName = OfficeName::all();
        $docs = Document::all();
        $divs = Division::all();
        $dists = District::all();
        $thans= Thana::all();
        $unions = Union::all();
        $search_rels = SearchRelation::where('status', '1')->get();
        return view('admin.Application.SDocument.view', compact('sdeed','OfficeName','docs','divs','dists','thans','unions','search_rels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $app_search = SDocument::find($id);
        $search_rels = SearchRelation::where('status', '1')->get();
        $OfficeName = OfficeName::all();
        $docs = Document::all();
        $divs = Division::all();
        $dists = District::all();
        $thans= Thana::all();
        $unions = Union::all();
        $yearList = Year::all();
        return view('admin.Application.SDocument.edit', compact('app_search','search_rels','OfficeName','docs','divs','dists','thans','unions','yearList'));
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
            'jailNo'=>'required',
            'search_year'=>'required',
            'type_of_deed'=>'required|string|max:255',
            'serach_inspaction'=>'required|string|max:255',
            'search_deed_rel'=>'required|string|max:255',
            'office_name'=>'required|string|max:255',
            'register_office'=>'required|string|max:255',
            'date'=>'required|string|max:255',
            'bank_name'=>'required|string|max:255',
            'bank_fees_date'=>'required|string|max:255',
            'pay_order'=>'required|string|max:255',
        ]);

        $search_app = SDocument::find($id);
        $search_app->applicator_id = $request->applicator_id;
        $search_app->bn_name = $request->bn_name;
        $search_app->name = $request->name;
        $search_app->division = $request->division;
        $search_app->district = $request->district;
        $search_app->thana = $request->thana;
        $search_app->union = $request->union;
        $search_app->nid_name = $request->nid_name;
        $search_app->jailNo = $request->jailNo;
        $search_app->search_year = json_encode($request->search_year);
        $search_app->type_of_deed = $request->type_of_deed;
        $search_app->serach_inspaction = $request->serach_inspaction;
        $search_app->search_deed_rel = $request->search_deed_rel;
        $search_app->office_name = $request->office_name;
        $search_app->register_office = $request->register_office;
        $search_app->date = $request->date;
        $search_app->bank_name = $request->bank_name;
        $search_app->bank_fees_date = $request->bank_fees_date;
        $search_app->pay_order = $request->pay_order;
        $search_app->status = $request->status;

        $user = User::where('id', $search_app->applicator_id)->first();
        $user->notify(new UserFormNotification($user));


        $search_app->save();





        return back()->with('success', 'Search Application Update Successfull');
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
