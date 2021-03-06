<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\FooterLink;
use App\Models\Nav;
use App\Models\NavLink;
use Illuminate\Http\Request;

class NavFooter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::all();
        $footerLink = FooterLink::all();
        $navLink = NavLink::all();
        $logo = Nav::all();
        $paragraph1 = explode('/', $footer[0]->p2);
        return view('pages.bo.navFooter.navFooter', compact('footer', 'footerLink', 'navLink', 'logo', 'paragraph1'));
    }

    public function store(Request $request)
    {
        $validation = $request->validateWithBag('createFooterLink', [
            'icon' => 'required'
        ]);

        $newEntry = new FooterLink;
        $newEntry->icon = $request->icon;
        $newEntry->save();
        return redirect()->back();
    }

    public function storeNav(Request $request)
    {
        $validation = $request->validateWithBag('createNav', [
            'link' => 'required'
        ]);

        $newEntry = new NavLink;
        $newEntry->link = $request->link;
        $newEntry->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $show = FooterLink::find($id);
        $navLink = NavLink::all();
        $logo = Nav::all();
        return view('pages.bo.navFooter.edit', compact('show', 'navLink', 'logo'));
    }

    public function updateLogo(Request $request)
    {
        $validation = $request->validateWithBag('updateLogo', [
            'logo' => 'required'
        ]);

        $updateEntry = Nav::first();
        $updateEntry->logo = $request->logo;
        $updateEntry->save();
        return redirect()->back();
    }

    public function updateFooterLink($id, Request $request)
    {
        $validation = $request->validateWithBag('updateFooterLink', [
            'icon' => 'required'
        ]);

        $updateEntry = FooterLink::find($id);
        $updateEntry->icon = $request->icon;
        $updateEntry->save();
        return redirect('/bo/navfooter');
    }

    public function updateFooter(Request $request)
    {
        $validation = $request->validateWithBag('updateFooter', [
            'p1' => 'required',
            'p2' => 'required',
            'link' => 'required'
        ]);

        $updateEntry = Footer::first();
        $updateEntry->p1 = $request->p1;
        $updateEntry->p2 = $request->p2;
        $updateEntry->link = $request->link;
        $updateEntry->save();
        return redirect()->back();
    }

    public function editNav($id)
    {
        $show = NavLink::find($id);
        $navLink = NavLink::all();
        $logo = Nav::all();
        return view('pages.bo.navFooter.editNav', compact('show', 'logo', 'navLink'));
    }

    public function updateNav($id, Request $request)
    {
        $validation = $request->validateWithBag('updateNav', [
            'link' => 'required'
        ]);

        $updateEntry = NavLink::find($id);
        $updateEntry->link = $request->link;
        $updateEntry->save();
        return redirect('/bo/navfooter');
    }

    public function destroy($id)
    {
        $destroy = FooterLink::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function destroyNav($id)
    {
        $destroy = NavLink::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
