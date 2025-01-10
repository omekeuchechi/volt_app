<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $users = User::where('capture',0)->get();

        return view('admin.index',
        ['users' => $users]
        );
    }
}
