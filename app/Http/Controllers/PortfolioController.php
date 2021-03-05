<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Nav;
use App\Models\NavLink;
use App\Models\Portfolio;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $logo = Nav::all();
        $navLink = NavLink::all();
        $portfolio = Portfolio::all();
        $genre = Genre::all();
        $project = Project::all();
        return view('pages.bo.portfolio.portfolio', compact('logo', 'navLink', 'portfolio', 'genre', 'project'));
    }

    public function storeFilter(Request $request)
    {
        $validated = $request->validateWithBag('storeFilter', [
            'title' => 'required',
            'filter' => 'required'
        ]);

        $newEntry = new Genre;
        $newEntry->title = $request->title;
        $newEntry->filter = $request->filter;
        $newEntry->save();
        return redirect()->back();
    }

    public function storeProject(Request $request)
    {
        $validated = $request->validateWithBag('storeProject', [
            'title' => 'required',
            'src' => 'required',
            'p' => 'required'
        ]);

        $newEntry = new Project;
        Storage::put('public/img/', $request->file('src'));
        $newEntry->title = $request->title;
        $newEntry->src = $request->file('src')->hashName();
        $newEntry->p = $request->p;
        $newEntry->save();
        return redirect()->back();
    }

    public function editGenre($id)
    {
        $logo = Nav::all();
        $navLink = NavLink::all();
        $show = Genre::find($id);
        return view('pages.bo.portfolio.editGenre', compact('show', 'logo', 'navLink'));
    }

    public function editProject($id)
    {
        $logo = Nav::all();
        $navLink = NavLink::all();
        $show = Project::find($id);
        return view('pages.bo.portfolio.editProject', compact('show', 'logo', 'navLink'));
    }

    public function updateTitle(Request $request)
    {
        $validated = $request->validateWithBag('updateTitle', [
            'title' => 'required'
        ]);

        $updateEntry = Portfolio::first();
        $updateEntry->title = $request->title;
        $updateEntry->save();
        return redirect()->back();
    }

    public function updateGenre($id, Request $request)
    {
        $validated = $request->validateWithBag('updateGenre', [
            'title' => 'required',
            'filter' => 'required'
        ]);

        $updateEntry = Genre::find($id);
        $updateEntry->title = $request->title;
        $updateEntry->filter = $request->filter;
        $updateEntry->save();
        return redirect('/bo/portfolio');
    }

    public function updateProject($id, Request $request)
    {
        $validated = $request->validateWithBag('updateProject', [
            'title' => 'required',
            'src' => 'required',
            'p' => 'required'
        ]);

        $updateEntry = Project::find($id);
        Storage::delete('public/img/'.$updateEntry->src);
        Storage::put('public/img/', $request->file('src'));
        $updateEntry->title = $request->title;
        $updateEntry->src = $request->file('src')->hashName();
        $updateEntry->p = $request->p;
        $updateEntry->save();
        return redirect('/bo/portfolio');
    }

    public function destroyFilter($id)
    {
        $destroy = Genre::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function destroyProject($id)
    {
        $destroy = Project::find($id);
        Storage::delete('public/img/'.$destroy->src);
        $destroy->delete();
        return redirect()->back();
    }

    public function download($id)
    {
        $img = Project::find($id);
        return Storage::download('public/img/'.$img->src);
    }
}
