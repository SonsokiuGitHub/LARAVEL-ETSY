<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SearchSuggestions;

class HomeController extends Controller
{
    public function index(){

        return view('pages.home');
    }

}
