<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //saastech
        Company::create([
            "name" => "saastech",
            "slug" => "saastech",
        ]);
        //maki
        Company::create([
            "name" => "maki",
            "slug" => "maki",
        ]);
        //vickymarket
        Company::create([
            "name" => "vickymarket",
            "slug" => "vickymarket",
        ]);
        //jrd
        Company::create([
            "name" => "jrd",
            "slug" => "jrd",
        ]);
    }
}
