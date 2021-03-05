<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Nav;
use App\Models\NavLink;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $navLink = NavLink::all();
        $skill = Skill::all();
        $logo = Nav::all();
        return view('pages.bo.about.about', compact('about', 'navLink', 'skill', 'logo'));
    }

    public function create(Request $request)
    {
        $validated = $request->validateWithBag('createSkill', [
            'span' => 'required',
            'para' => 'required',
            'icon' => 'required'
        ]);

        $newEntry = new Skill;
        $newEntry->span = $request->span;
        $newEntry->para = $request->para;
        $newEntry->icon = $request->icon;
        $newEntry->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $logo = Nav::all();
        $navLink = NavLink::all();
        $show = Skill::find($id);
        return view('pages.bo.about.editSkill', compact('show', 'logo', 'navLink'));
    }

    public function updateSkill($id, Request $request)
    {
        $validated = $request->validateWithBag('updateSkill', [
            'span' => 'required',
            'para' => 'required',
            'icon' => 'required'
        ]);

        $updateEntry = Skill::find($id);
        $updateEntry->icon = $request->icon;
        $updateEntry->para = $request->para;
        $updateEntry->span = $request->span;
        $updateEntry->save();
        return redirect('/bo/about');
    }

    public function updateAbout(Request $request)
    {
        $validated = $request->validateWithBag('updateAbout', [
            'p1' => 'required',
            'p2' => 'required'
        ]);

        $updateEntry = About::first();
        Storage::delete('public/img/'.$updateEntry->src);
        Storage::put('public/img/', $request->file('src'));
        $updateEntry->src = $request->file('src')->hashName();
        $updateEntry->p1 = $request->p1;
        $updateEntry->p2 = $request->p2;
        $updateEntry->save();
        return redirect()->back();
    }

    public function download()
    {
        $img = About::first();
        return Storage::download('public/img/'.$img->src);
    }

    public function destroy($id)
    {
        $destroy = Skill::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
