<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referral;

class ReferralsController extends Controller
{


    //referrals
    public function index() {

        $referrals = Referral::latest()->paginate(5);
               

        return view('referrals.index', ['referrals'=> $referrals]);
    }

    public function show(Referral $referral) {

        return view('referrals.show', ['referral'=> $referral]);
    }

    

    public function create() {

        return view('referrals.create');
    }
    

    public function store() { 

 
            request()->validate([
                'first_name'=> ['required'],
                'last_name'=> ['required'],
                'email'=> ['required'],
                'coupon'=> ['required'],
                
                
            ]);
       
            Referral::create([
                'first_name'=> request('first_name'),
                'last_name'=> request('last_name'),
                'email'=> request('email'),
                'coupon'=> request('coupon'),
            ]);
     

        return redirect('/dashboard/');
    }


}
