<?php

namespace App\Http\Controllers;

use App\Models\SearchRelation;
use Illuminate\Http\Request;

class SearchRelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search_rels = SearchRelation::all();
        return view('admin.SearchRelation.index', compact('search_rels'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.SearchRelation.create');
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
            'SearchRelation' => 'required|string|max:255'
        ]);

        $search_rel = new SearchRelation();
        $search_rel->SearchRelation = $request->SearchRelation;
        $search_rel->save();

        return back()->with('success','Search Deed Relation Add Successful');
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
        $seach_rel= SearchRelation::find($id);
        return view('admin.SearchRelation.edit', compact('seach_rel'));
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
            'SearchRelation' => 'required|string|max:255'
        ]);

        $search_rel = SearchRelation::find($id);
        $search_rel->SearchRelation = $request->SearchRelation;
        $search_rel->status = $request->status;
        $search_rel->save();

        return back()->with('success','Search Deed Relation Update Successful');
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
