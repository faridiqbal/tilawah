<?php

namespace App\Http\Controllers;

use App\Member;
use App\Group;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::orderBy('nama','ASC')->get();
        // $posts = Post::where('user_id', auth()->id())->get();
        return view('member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::orderBy('nama')->get();
        return view('member.create', compact('groups'));
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
            'kumpulan'  => 'required',
            'juz'       => 'required|min:1',
        ]);

        $member = new Member;
        $member->nama = $request->nama;
        $member->group_id = $request->kumpulan;
        $member->juz = $request->juz;
        $member->save();

        session()->flash('success', 'Ahli baru ' . $request->nama . ' telah didaftarkan');

        $groups = Group::orderBy('nama')->get();
        return redirect()->route('member.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $groups = Group::orderBy('nama')->get();
        return view('member.edit', compact('member','groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'nama'      => 'required|min:5',
            'kumpulan'  => 'required',
            'juz'       => 'required|min:1',
        ]);

        $member->nama = $request->nama;
        $member->group_id = $request->kumpulan;
        $member->juz = $request->juz;
        $member->update();

        session()->flash('success', 'Maklumat ahli telah dikemaskini');

        // $members = Member::orderBy('nama','ASC')->get();
        // return view('member.index', compact('members'));
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $namaAhli = $member->nama;
        $member->delete();

        session()->flash('success', 'Ahli ' . $namaAhli . ' telah dihapuskan');

        $members = Member::orderBy('nama','ASC')->get();
        return redirect()->route('member.index');
    }
}
