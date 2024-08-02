<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class productController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('dashboard.masterUser.index', ['users' => $users]);
    }
}
