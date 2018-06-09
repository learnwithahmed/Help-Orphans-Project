<?php

namespace App\Http\Controllers;

use App\Orphans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrphansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getOrphans = Orphans::where('auth_user', Auth::id())->get();

        return $getOrphans;
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
        //START Store Data in Database
        $addNewOrphan = new Orphans;

        $addNewOrphan->name                  = $request->name;
        $addNewOrphan->age                   = $request->age;
        $addNewOrphan->education_status      = $request->education_status;
        $addNewOrphan->education_level       = $request->education_level;
        $addNewOrphan->place_of_birth        = $request->place_of_birth;
        $addNewOrphan->living_place          = $request->living_place;
        $addNewOrphan->health_status         = $request->health_status;
        $addNewOrphan->financial_status      = $request->financial_status;
        $addNewOrphan->family_status         = $request->family_status;
        $addNewOrphan->family_count          = $request->family_count;
        $addNewOrphan->help_kind_needed      = $request->help_kind_needed;
        $addNewOrphan->help_priority_level   = $request->help_priority_level;
        $addNewOrphan->save();
        //END Store Data in Database

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getOrphanById = Orphans::where('auth_user', Auth::id())
            ->where('id', $id)
            ->first();

        return $getOrphanById;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($request)
    {
        //Fetching Orphan Information
        $editOrphanById = Orphans::where('auth_user', Auth::id())
            ->where('id', $request->id)
            ->first();

        $editOrphanById->name                  = $request->name;
        $editOrphanById->age                   = $request->age;
        $editOrphanById->education_status      = $request->education_status;
        $editOrphanById->education_level       = $request->education_level;
        $editOrphanById->place_of_birth        = $request->place_of_birth;
        $editOrphanById->living_place          = $request->living_place;
        $editOrphanById->health_status         = $request->health_status;
        $editOrphanById->financial_status      = $request->financial_status;
        $editOrphanById->family_status         = $request->family_status;
        $editOrphanById->family_count          = $request->family_count;
        $editOrphanById->help_kind_needed      = $request->help_kind_needed;
        $editOrphanById->help_priority_level   = $request->help_priority_level;
        $editOrphanById->save();

        return back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orphans::where('auth_user', Auth::id())
            ->where('id', $id)
            ->delete();

        return back();
    }
}
