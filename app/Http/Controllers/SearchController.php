<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referral;

class SearchController extends Controller
{
      public function index() {

               

        return view('search.index');
    }

    public function search() {

        $seach_term = request('search_term');
        $referrals = Referral::latest()->where('last_name', 'like', '%'.$seach_term.'%')->paginate(5);

       // dd($referrals);

        return view('search.results', ['referrals'=> $referrals]);

    }
}


