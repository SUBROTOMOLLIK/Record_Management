<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\CopyDeed;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CopyDeedController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        return view('admin.SubAdmin.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DeedCopyTypes = CopyDeed::where('CreatorID', auth()->user()->id)->get();
        return view('admin.SubAdmin.DeedCopy.index', compact('DeedCopyTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.SubAdmin.DeedCopy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $CopyType = new CopyDeed();
        $CopyType->DeedCopy = $request->DeedCopy;
        $CopyType->Date = $request->Date;
        $CopyType->Deed_No = $request->Deed_No;
        $CopyType->Year = $request->Year;
        $CopyType->CreatorID = auth()->user()->id;
        $CopyType->save();

        return back()->with('success', 'কপি করা হয়েছে!');

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
        $CopyType = CopyDeed::find($id);
        return view('admin.SubAdmin.DeedCopy.edit', compact('CopyType'));
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
        $CopyType = CopyDeed::find($id);
        $CopyType->DeedCopy = $request->DeedCopy;
        $CopyType->Date = $request->Date;
        $CopyType->Deed_No = $request->Deed_No;
        $CopyType->Year = $request->Year;
        $CopyType->CreatorID = $request->CreatorID;
        $CopyType->save();

        return back()->with('success', 'কপি আপডেট করা হয়েছে! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DeedCopyType = CopyDeed::find($id);
        $DeedCopyType->delete();

        return back();
    }






}
