<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::factory()->count(50)->create();
        // ->each(function ($company){
        //     \App\Models\Company::factory()->rand(1,4)->create();
        // }); 
    
  

    }
}
