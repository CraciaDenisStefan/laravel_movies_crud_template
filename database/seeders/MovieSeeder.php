<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = config('movies');
        foreach ($movies as $item) {
            $movie = new Movie();
            $movie->name = $item['name'];
            $movie->img = $item['img'];
            $movie->genre = $item['genre'];
            $movie->vote = $item['vote'];
            $movie->original_language = $item['original_language'];
            $movie->length = $item['length'];

            $movie->save();
        }
    }
}
