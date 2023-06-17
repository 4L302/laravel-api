<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = config('technologies');
        foreach($technologies as $tech){
            $newTech = new Technology();
            $newTech->name = $tech;
            $newTech->save();
        }
    }
}
