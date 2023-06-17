<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use function PHPSTORM_META\type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = config('types');
        foreach($types as $type){
        $newtype2 = new Type();
        $newtype2->name = $type;
        $newtype2->slug = Str::slug($type, '-');
        $newtype2->save();
        }
        
    }
}
