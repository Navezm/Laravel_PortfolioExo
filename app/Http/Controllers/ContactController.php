<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Info;
use App\Models\Loading;
use App\Models\Nav;
use App\Models\NavLink;
use Illuminate\Http\Request;

class ContactController extends Controller
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

    public function update(Request $request)
    {
        $updateEntry = Info::first();
        $updateEntry->title = $request->title;
        $updateEntry->address1 = $request->address1;
        $updateEntry->address2 = $request->address2;
        $updateEntry->address3 = $request->address3;
        $updateEntry->address4 = $request->address4;
        $updateEntry->save();
        return redirect()->back();
    }
}
