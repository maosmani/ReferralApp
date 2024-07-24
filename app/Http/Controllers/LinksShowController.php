<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;


class LinksShowController extends Controller
{
     public function show(Link $link) {

        return view('linkshow.show', ['link'=> $link]);
    }
}
