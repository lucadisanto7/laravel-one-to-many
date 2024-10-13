<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Frontend', 'Backend', 'Fullstack', 'Database', 'Design'];

        foreach($types as $type){
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->slug = Type::generateSlug($title);
            $new_type->save();
        }
    }
}
