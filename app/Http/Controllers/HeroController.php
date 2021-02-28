<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use App\Models\HeroLink;
use App\Models\Nav;
use App\Models\NavLink;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function bo()
    {
        $about = About::all();
        $navLink = NavLink::all();
        $logo = Nav::all();
        $hero = Hero::first();
        $heroLink = HeroLink::all();
        return view('pages.bo.home', compact('about', 'navLink', 'logo', 'hero', 'heroLink'));
    }

    public function store(Request $request)
    {
        $newEntry = new HeroLink;
        $newEntry->link = $request->link;
        $newEntry->save();
        return redirect()->back();
    }

    public function editLink($id)
    {
        $navLink = NavLink::all();
        $logo = Nav::all();
        $show = HeroLink::find($id);
        return view('pages.bo.editLink', compact('show', 'logo', 'navLink'));
    }

    public function updateHero(Request $request)
    {
        $DBhero = Hero::first();
        $DBhero->title = $request->title;
        $DBhero->job = $request->job;
        $DBhero->dataType = $request->dataType;
        $DBhero->save();
        return redirect()->back();
    }

    public function updateLink($id, Request $request)
    {
        $updateEntry = HeroLink::find($id);
        $updateEntry->link = $request->link;
        $updateEntry->save();
        return redirect('/bo/home');
    }

    public function destroyLink($id)
    {
        $destroy = HeroLink::find($id);
        $destroy->delete();
        return redirect('/bo/home');
    }
}
