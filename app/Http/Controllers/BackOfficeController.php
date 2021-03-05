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
use App\Models\Nav;
use App\Models\NavLink;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        $navLink = NavLink::all();
        $logo = Nav::all();
        return view('pages.backOffice', compact('navLink', 'logo'));
    }
}
