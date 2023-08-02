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
        foreach ($movies as $movie) {
            $movie = new Movie();
            $movie->name = $movie['name'];
            $movie->img = $movie['img'];
            $movie->genre = $movie['genre'];
            $movie->vote = $movie['vote'];
            $movie->original_language = $movie['original_language'];
            $movie->length = $movie['length'];

            $movie->save();
        }
    }
}
