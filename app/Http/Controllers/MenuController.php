<?php

namespace App\Http\Controllers;
use App\DataTables\MenuDataTable;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(MenuDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.menu.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Menu $menu)
    {
        //
    }


    public function edit(Menu $menu)
    {
        //
    }


    public function update(Request $request, Menu $menu)
    {
        //
    }


    public function destroy(Menu $menu)
    {
        //
    }
}
