<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Auth;
use Str;
use DB;
use App\Models\book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for ($i=0; $i < 1000; $i++) {

        DB::table('books')->insert([
                'name' => $faker->title,
                'author' => $faker->text,
                'published_date' => $faker->date,
                'category' => $faker->text,
                'shelf' => $faker->text,
                'code' => Str::random(7),
                'pdf' => 'edit'.'.'.'pdf',
                'createdby' => Auth::user()->name,
            ]);       
       }

    }
}
