<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $hotItems = Menu::where('type', 'hot')
            ->orderBy('id', 'desc')
            ->take(2)
            ->get();
        $coldItems = Menu::where('type', 'cold')
            ->orderBy('id', 'desc')
            ->take(2)
            ->get();

        $adminCount = User::where('role', 'admin')->count();
        $userCount = User::where('role', 'user')->count();
        $categories = Category::all();
        return view('Pages.Home.index', compact('hotItems', 'coldItems', 'adminCount', 'userCount', 'categories'));
    }
}
