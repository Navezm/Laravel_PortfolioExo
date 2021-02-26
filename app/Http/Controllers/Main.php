<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Footer;
use App\Models\FooterLink;
use App\Models\Form;
use App\Models\Genre;
use App\Models\Hero;
use App\Models\HeroLink;
use App\Models\Info;
use App\Models\Loading;
use App\Models\NavLink;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use App\Models\Nav;
use Illuminate\Http\Request;

class Main extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        $footer = Footer::all();
        $paragraph1 = explode('/', $footer[0]->p2);
        $footerLink = FooterLink::all();
        $form = Form::all();
        $genre = Genre::all();
        $hero = Hero::all();
        $heroLink = HeroLink::all();
        $info = Info::all();
        $loading = Loading::all();
        $navLink = NavLink::all();
        $portfolio = Portfolio::all();
        $project = Project::all();
        $skill = Skill::all();
        $user = User::all();
        $logo = Nav::all();
        return view('welcome', compact('about', 'footer', 'footerLink', 'form', 'genre', 'hero', 'heroLink', 'info', 'loading', 'navLink', 'portfolio', 'project', 'skill', 'user', 'paragraph1', 'logo'));
    }
}
