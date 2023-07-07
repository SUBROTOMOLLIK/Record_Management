<?php

namespace App\Http\Controllers;

use App\Models\CopyDeed;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDeedCopyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $DeedCopyes = CopyDeed::all();
        $users = User::where('status', '1')->get();
        return view('admin.DeedCopyType.index', compact('DeedCopyes','users'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        dd($request->all());
        return view('admin.DeedCopyType.adminedit');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCopy($id)
    {

    }
}
