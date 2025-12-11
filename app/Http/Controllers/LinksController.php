<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinksController extends Controller
{
    public function index()
    {
        $links = Link::latest()->paginate(5);
        $baseUrl = url("/");

        return view("links.index", ["links" => $links, "baseUrl" => $baseUrl]);
    }

    public function create()
    {
        return view("links.create");
    }

    public function show(Link $link)
    {
        $baseUrl = url("/");
        return view("links.show", ["link" => $link, "baseUrl" => $baseUrl]);
    }

    public function store()
    {
        request()->validate([
            "title" => ["required"],
            "message" => ["required"],
            "slug" => ["required"],
        ]);

        //$baseUrl = url('/');
        //$fullUrl = $baseUrl . '/links/' . request('slug');

        Link::create([
            "title" => request("title"),
            "message" => request("message"),
            "slug" => request("slug"),
        ]);

        return redirect("/dashboard/links");
    }

    public function edit(Link $link)
    {
        return view("links.edit", ["link" => $link]);
    }

    public function update(Link $link)
    {
        request()->validate([
            "title" => ["required"],
            "message" => ["required"],
            //'slug'=> ['required'],
        ]);
        $link->update([
            "title" => request("title"),
            "message" => request("message"),
            "slug" => request("slug"),
        ]);

        return redirect("/dashboard/links");
    }

    public function delete(Link $link)
    {
        return view("links.delete", ["link" => $link]);
    }

    public function destroy(Link $link)
    {
        $link->delete();

        return redirect("/dashboard/links");
    }
}
