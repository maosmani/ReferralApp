<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ReferralsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('referrals')->insert([
            'first_name' => Str::random(100),
            'last_name' => Str::random(100),
            'email' => Str::random(100).'@example.com',
            'coupon' => Str::random(100),
            
        ]);
    }
}
