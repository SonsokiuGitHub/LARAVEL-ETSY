<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\models\SearchSuggestions;
class SearchSuggestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SearchSuggestions::insert([
            'data_trending' => Str::random(10),
        ]);
    }
}
