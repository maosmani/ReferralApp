<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referral;
use Barryvdh\DomPDF\Facade\Pdf;

class ReferralsShowController extends Controller
{
    
    public function create() {

        return view('referralshow.create');
    }
    

    public function store() { 

 
            request()->validate([
                'first_name'=> ['required'],
                'last_name'=> ['required'],
                'email'=> ['required'],
                'coupon'=> ['required'],
                
                
            ]);

            $email = request('email');

            Referral::create([
                'first_name'=> request('first_name'),
                'last_name'=> request('last_name'),
                'email'=> request('email'),
                'coupon'=> request('coupon'),
            ]);
           /* $data = [
                'first_name'=> request('first_name'),
                'last_name'=> request('last_name'),
                'email'=> request('email'),
                'coupon'=> request('coupon'),
            ];*/

            return redirect('/links/referrals/download/' . $email);
           
            //return redirect('/links/referrals/thankyou'.);
            
            
    }

    public function thankyou() {
        return view('referralshow.thankyou');
    }

    public function download($email) {

    $referral = Referral::where('email',$email)->get();
    //dd($referral);
    
    $pdf = Pdf::loadView('referralshow.invoice', ['referral'=> $referral]);
    
    //return $pdf->download('invoice'. '.pdf') ;
    return $pdf->stream(); 
     
    
}

}
