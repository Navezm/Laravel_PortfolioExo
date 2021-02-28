<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Info;
use App\Models\Loading;
use App\Models\Nav;
use App\Models\NavLink;
use Illuminate\Http\Request;

class Contact extends Controller
{

    public function index()
    {
        $logo = Nav::all();
        $navLink = NavLink::all();
        $info = Info::all();
        $form = Form::all();
        $loading = Loading::all();
        return view('pages.bo.contact.contact', compact('logo', 'navLink', 'info', 'form', 'loading'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
