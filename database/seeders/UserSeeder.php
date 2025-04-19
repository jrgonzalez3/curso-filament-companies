<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //saastech
        $saastech = User::factory()->create([
            "name" => "saastech",
            "email" => "usersaastech@saastech.cloud",
        ]);
        $saastech->companies()->attach(Company::where("slug", "saastech")->first());

        //maki
        $maki = User::factory()->create([
            "name" => "maki",
            "email" => "usermaki@maki.cloud",
        ]);
        $maki->companies()->attach(Company::where("slug", "maki")->first());


        //multi
        $multiCompany = User::factory()->create([
            "name" => "superadmin",
            "email" => "jrgonzalez3@gmail.com",
        ]);
        $multiCompany->companies()->attach(Company::where("slug", "saastech")->first());
        $multiCompany->companies()->attach(Company::where("slug", "maki")->first());
        $multiCompany->companies()->attach(Company::where("slug", "vickymarket")->first());
        $multiCompany->companies()->attach(Company::where("slug", "jrd")->first());


    }
}
