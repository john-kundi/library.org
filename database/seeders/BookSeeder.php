<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Auth;
use Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) { 
           
        DB::table('books')->insert([
                'name' => Str::random(10),
                'author' => Str::random(7),
                'published_date' => '2022-10-12',
                'category' => 'Play',
                'shelf' => 'Middle',
                'code' => Str::random(7),
                'pdf' => 'Horriblebook'.'.'.'pdf',
                'createdby' => 'John'
            ]);
        }

    }
}
