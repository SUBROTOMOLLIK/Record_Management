<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DuplicateDeed;
use App\Models\OfficeName;
use App\Models\SarokNo;
use App\Models\User;
use App\Notifications\UserFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class DDocumentController extends Controller
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
        $bohis = SarokNo::all();
        $ddeeds = DuplicateDeed::orderBy('id','desc')->get();
        return view('admin.Application.DDocument.index',compact('ddeeds','users','deeds','bohis'));
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
            'register_rel'=>'required|string|max:255',
            'register_date'=>'required|string|max:255',
            'aplication_number'=>'required|string|max:255',
            'aplication_date'=>'required|string|max:255',
            'type_of_deed'=>'required|string|max:255',
            'deed_date'=>'required|string|max:255',
            'deed_number'=>'required|string|max:255',
            'deed_year'=>'required|string|max:255',
            'bohi_no'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'bank_name'=>'required|string|max:255',
            'bank_fees_date'=>'required|string|max:255',
            'pay_order'=>'required|string|max:255',
            'date'=>'required|string|max:255',
        ]);

        $duplicate_deed = new DuplicateDeed();
        $duplicate_deed->bn_name = $request->bn_name;
        $duplicate_deed->name = $request->name;
        $duplicate_deed->applicator_id = Auth::user()->id;
        $duplicate_deed->register_rel = $request->register_rel;
        $duplicate_deed->register_date = $request->register_date;
        $duplicate_deed->aplication_number = $request->aplication_number;
        $duplicate_deed->aplication_date = $request->aplication_date;
        $duplicate_deed->type_of_deed = $request->type_of_deed;
        $duplicate_deed->deed_date = $request->deed_date;
        $duplicate_deed->deed_number = $request->deed_number;
        $duplicate_deed->deed_year = $request->deed_year;
        $duplicate_deed->bohi_no = $request->bohi_no;
        $duplicate_deed->balam_no = $request->balam_no;
        $duplicate_deed->bank_name = $request->bank_name;
        $duplicate_deed->bank_fees_date = $request->bank_fees_date;
        $duplicate_deed->pay_order = $request->pay_order;
        $duplicate_deed->date = $request->date;
        $duplicate_deed->save();

        return back()->with('success', 'আপনার আবেদনটি সফল হয়েছে ৤ ৩ কর্মদিবসের মধ্যে দলিলের নকল সংগহ করুন');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ddeed = DuplicateDeed::find($id);
        $OfficeName = OfficeName::all();
        $docs = Document::all();
        $bohis = SarokNo::all();
        return view('admin.Application.DDocument.view', compact('ddeed','OfficeName','docs','bohis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ddeed = DuplicateDeed::find($id);
        $docs = Document::all();
        $bohis = SarokNo::all();
        return view('admin.Application.DDocument.edit', compact('ddeed','docs','bohis'));
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
            'register_rel'=>'required|string|max:255',
            'register_date'=>'required|string|max:255',
            'aplication_number'=>'required|string|max:255',
            'aplication_date'=>'required|string|max:255',
            'type_of_deed'=>'required|string|max:255',
            'deed_date'=>'required|string|max:255',
            'deed_number'=>'required|string|max:255',
            'deed_year'=>'required|string|max:255',
            'bohi_no'=>'required|string|max:255',
            'balam_no'=>'required|string|max:255',
            'bank_name'=>'required|string|max:255',
            'bank_fees_date'=>'required|string|max:255',
            'pay_order'=>'required|string|max:255',
            'date'=>'required|string|max:255',
        ]);

        $duplicate_deed = DuplicateDeed::find($id);
        $duplicate_deed->bn_name = $request->bn_name;
        $duplicate_deed->name = $request->name;
        $duplicate_deed->applicator_id = $request->applicator_id;
        $duplicate_deed->register_rel = $request->register_rel;
        $duplicate_deed->register_date = $request->register_date;
        $duplicate_deed->aplication_number = $request->aplication_number;
        $duplicate_deed->aplication_date = $request->aplication_date;
        $duplicate_deed->type_of_deed = $request->type_of_deed;
        $duplicate_deed->deed_date = $request->deed_date;
        $duplicate_deed->deed_number = $request->deed_number;
        $duplicate_deed->deed_year = $request->deed_year;
        $duplicate_deed->bohi_no = $request->bohi_no;
        $duplicate_deed->balam_no = $request->balam_no;
        $duplicate_deed->date = $request->date;
        $duplicate_deed->bank_name = $request->bank_name;
        $duplicate_deed->bank_fees_date = $request->bank_fees_date;
        $duplicate_deed->pay_order = $request->pay_order;
        $duplicate_deed->status = $request->status;
        $duplicate_deed->save();

        $user = User::where('id', $duplicate_deed->applicator_id)->get();
        Notification::send($user, new UserFormNotification($duplicate_deed->bn_name));

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
