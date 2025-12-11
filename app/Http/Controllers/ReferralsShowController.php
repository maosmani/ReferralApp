<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referral;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;

class ReferralsShowController extends Controller
{
    public function create()
    {
        return view("referralshow.create");
    }

    public function store()
    {
        // coupon Should be auto generated....

        request()->validate([
            "first_name" => ["required"],
            "last_name" => ["required"],
            "email" => ["required"],
            //'coupon'=> ['required'],
        ]);

        $email = request("email");
        $code = Str::upper(Str::random(10)); // Generate Coupon for this User

        Referral::create([
            "first_name" => request("first_name"),
            "last_name" => request("last_name"),
            "email" => request("email"),
            //'coupon'=> request('coupon'),
            "coupon" => $code,
        ]);
        /* $data = [
                'first_name'=> request('first_name'),
                'last_name'=> request('last_name'),
                'email'=> request('email'),
                'coupon'=> request('coupon'),
            ];*/

        return redirect("/links/referrals/download/" . $email);

        //return redirect('/links/referrals/thankyou'.);
    }

    public function thankyou()
    {
        return view("referralshow.thankyou");
    }

    public function download($email)
    {
        //$referral = Referral::where('email', $email)->latest()->first();

        //dd($referral);

        $referral = Referral::where("email", $email)->get();
        //$random = Str::random(6);
        //$code = Str::upper(Str::random(10)); // Generates a random string of 10 characters
        //dd($code);

        //dd($referral);

        $pdf = Pdf::loadView("referralshow.invoice", ["referral" => $referral]);

        //return $pdf->download('invoice'. '.pdf') ;
        return $pdf->stream();
    }
}
