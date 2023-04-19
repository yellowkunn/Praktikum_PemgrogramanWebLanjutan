<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];
        $faker = Factory::create();

        for($i = 0; $i<20; $i++) {
            $posts[] = [
            'nama' => $faker->name,

            'dibuat' => $faker->dateTimeThisDecade($max = 'now', $timezone = null),

            'asalKota'=> $faker->city,

            'agama'=> $faker->randomElement($array = array ('Islam', 'Kristen', 'Budha', 'katolik', 'Hindu', 'Konghucu')),

            'filmKesukaanMarvel'=> $faker->randomElement

            ($array = array ('Avengers: Endgame 2019',
            'Black Panther 2018',
            'Captain America: The Winter Soldier 2014',
            'Iron Man 2008',
            'The Avengers 2012',
            'Spider-Man: Into the Spider-Verse 2018',
            'Thor: Ragnarok 2017',
            'Guardians of the Galaxy 2014',
            'X-Men: Days of Future Past 2014',
            'Deadpool 2016',
            'Captain America: Civil War 2016',
            'Logan 2017',
            'Doctor Strange 2016',
            'The Dark Knight 2008',
            'Avengers: Infinity War 2018',
            'Spider-Man: No Way Home 2021',
            'Thor: The Dark World 2013',
            'Ant-Man 2015',
            'Captain Marvel 2019',
            'Guardians of the Galaxy Vol. 2 2017')),

            'status'=>$faker->randomElement($array = array ('Belum Kawin', 'Kawin', 'Cerai')),
            'pekerjaan'=>$faker->jobTitle,
            'warnaKesukaan'=>$faker->colorName,
            'kondisiJiwaRaga'=>$faker->emoji
            ];
        }
        DB::table('posts')->insert($posts);
    }
}
