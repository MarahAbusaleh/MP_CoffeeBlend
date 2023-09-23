<?php

namespace App\Http\Controllers;
use App\DataTables\UserDataTable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.user.index');
    }
}
