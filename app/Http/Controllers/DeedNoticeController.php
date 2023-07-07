<?php

namespace App\Http\Controllers;

use App\Models\DeedNotice;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

class DeedNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deedNotice = DeedNotice::all();
        return view('admin.DeedNotice.index', compact('deedNotice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.DeedNotice.create');
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
            'name' => 'string|required|max:255',

        ]);

        $deedNotice = new DeedNotice();
        $deedNotice->DeedNotice = $request->name;
        $deedNotice->status = $request->status;
        $deedNotice->save();

        return back()->with('success', 'Deed Noice Add Successfuly');
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
        $deedNotice = DeedNotice::find($id);
        return view('admin.DeedNotice.edit', compact('deedNotice'));
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
            'name' => 'string|required|max:255',
        ]);

        $deedNoticeUp = DeedNotice::find($id);
        $deedNoticeUp->DeedNotice = $request->name;
        $deedNoticeUp->status = $request->status;
        $deedNoticeUp->save();

        return back()->with('success', 'Deed Noice Update Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deedNoticeUp = DeedNotice::find($id);
        $deedNoticeUp->delete();

        return back();
    }
}
