<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::get();

        return view('group.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('group.create');
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
            'nama'      => 'required|min:5',
            'minggu'       => 'required|min:1',
        ]);

        $group = new Group;
        $group->nama = $request->nama;
        $group->description = $request->description;
        $group->minggu = $request->minggu;
        $group->save();

        session()->flash('success', 'Kumpulan baru ' . $request->nama . ' telah diwujudkan');

        return redirect()->route('group.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        // $theGroup = Group::find($group);

        // return view('group', compact('theGroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        return view('group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $request->validate([
            'nama'      => 'required|min:5',
            'minggu'       => 'required|min:1',
        ]);

        $group->nama = $request->nama;
        $group->description = $request->description;
        $group->minggu = $request->minggu;
        $group->update();

        session()->flash('success', 'Maklumat kumpulan ' . $request->nama . ' telah dikemaskini');

        $groups = Group::orderBy('nama')->get();
        return redirect()->route('group.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $namaKumpulan = $group->nama;
        $group->delete();
        session()->flash('success', 'Kumpulan ' . $namaKumpulan . ' telah dihapuskan');

        $groups = Group::orderBy('nama')->get();
        return redirect()->route('group.index');
    }
}
