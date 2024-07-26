<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;


class LinksController extends Controller
{
    public function index() {

        $links = Link::latest()->paginate(5);

        return view('links.index', ['links'=> $links]);
    }


     public function create() {

        return view('links.create');
    }

    public function show(Link $link) {

        return view('links.show', ['link'=> $link]);
    }

    public function store() { 

 
            request()->validate([
                'title'=> ['required'],
                'message'=> ['required'],
                //'slug'=> ['required'],
               
                
                
            ]);
       
            Link::create([
                'title'=> request('title'),
                'message'=> request('message'),
                //'slug'=> request('slug'),
               
            ]);
     

        return redirect('/dashboard/links');
    }

      public function edit(Link $link)
    {
        return view('links.edit', ['link' => $link]);
    }

      public function update(Link $link)
    {
           
            request()->validate([
                'title'=> ['required'],
                'message'=> ['required'],
                //'slug'=> ['required'],
               
                
            ]);
            $link->update(
                [
                    'title'=> request('title'),
                    'message'=> request('message'),
                    //'slug'=> request('slug'),
                ]
            );

        return redirect('/dashboard/links');
    }


    public function delete(Link $link) {

       

        return view("links.delete",['link'=> $link]);
    }

    public function destroy(Link $link) {
        $link->delete();

        return redirect('/dashboard/links');
    }
}
