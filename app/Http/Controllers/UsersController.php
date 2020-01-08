<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;

class UsersController extends Controller
{
    public function index()
    {

    $table = Users::all();
    
    return view('adm/users', ['users' => $table]);

    }
}
