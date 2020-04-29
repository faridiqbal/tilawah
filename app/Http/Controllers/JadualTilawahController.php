<?php

namespace App\Http\Controllers;

use App\Group;
use App\Member;
use Illuminate\Http\Request;
use Carbon\Carbon;

class JadualTilawahController extends Controller
{
    public function index()
    {
    	$groups = Group::get();
    	return view('jadual.index', compact('groups'));
    }
    public function show(int $groupId)
    {
        // dd($group);
        $group = Group::find($groupId);
        $members = Member::where('group_id',$groupId)->orderBy('juz')->get();
        $deko = $group->decoration;
        $dekoFirst = mb_substr($deko,0,1);
        $dekoLast = mb_substr($deko,mb_strlen($deko)-1,1);

        $tarikhMula = Carbon::create($group->tarikhmula)->addWeeks($group->minggu-1)->locale('ms_MS');
        $tarikhAkhir = Carbon::create($group->tarikhmula)->addWeeks($group->minggu)->addDays(-1)->locale('ms_MS');

        $tarikhMingguMula = $tarikhMula->isoFormat('dddd') . ' ' . $tarikhMula->isoFormat('D/M');
        $tarikhMingguAkhir = $tarikhAkhir->isoFormat('dddd') . ' ' . $tarikhAkhir->isoFormat('D/M');
        error_log('Len: ' . mb_strlen(trim($deko)));
        return view('jadual.members', compact('group','members','dekoFirst','dekoLast','tarikhMingguMula', 'tarikhMingguAkhir'));
    }

    public function tambahJuzu(int $groupId)
    {
        $group = Group::find($groupId);
        $members = Member::where('group_id',$groupId)->orderBy('nama')->get();

        //update juzu
        foreach ($group->members as $member)
        {
            
            $juzuSekarang = $member->juz;
            $juzuBaru = $juzuSekarang + 1;
            if ($juzuBaru > 30) $juzuBaru = 1;

            $member->juz = $juzuBaru;
            $member->update();
        }

        //update minggu
        $group->minggu = (($group->minggu) + 1);
        $group->update();

        session()->flash('success', "Bacaan juzu' ahli telah ditambah.");
        return redirect()->route('jadual.show', $groupId);
    }

    public function tolakJuzu(int $groupId)
    {
        $group = Group::find($groupId);
        $members = Member::where('group_id',$groupId)->orderBy('nama')->get();

        //update juzu
        foreach ($group->members as $member)
        {
            $juzuSekarang = $member->juz;
            $juzuBaru = $juzuSekarang - 1;
            if ($juzuBaru < 1) $juzuBaru = 30;
            $member->juz = $juzuBaru;
            $member->update();
        }

        //update minggu
        $group->minggu = (($group->minggu) - 1);
        $group->update();

        session()->flash('success', "Bacaan juzu' ahli telah dikurangkan.");
        return redirect()->route('jadual.show', $groupId);
    }

    public function resetJuzu(int $groupId)
    {
        $group = Group::find($groupId);
        $members = Member::where('group_id',$groupId)->orderBy('nama')->get();

        //update juzu
        $juzuBaru = 0;
        foreach ($members as $member)
        {
            $juzuBaru++;
            if ($juzuBaru > 30) $juzuBaru = 1;
            $member->juz = $juzuBaru;
            $member->update();
        }

        //update minggu
        $group->minggu = 1;
        $group->update();

        session()->flash('success', 'Jadual tilawah telah direset mengikut susunan nama');
        return redirect()->route('jadual.show', $groupId);
    }
}
