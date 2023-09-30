<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $Items = Menu::inRandomOrder()->take(4)->get();
        return view('Pages.Home.index', compact('Items'));
    }
}
