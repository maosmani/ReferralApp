<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;


class LinksShowController extends Controller
{
   /*
     public function show(Link $link) {

        return view('linkshow.show', ['link'=> $link]);
    }
    */

    public function show($slug)
    {
        // Find the link by slug or throw a 404 if not found
        $link = Link::where('slug', $slug)->firstOrFail();

        return view('linkshow.show', compact('link'));
    }
}
