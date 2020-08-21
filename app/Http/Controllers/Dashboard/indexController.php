<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //return user to dashboard if login
    public function index(){
        return view('dashboard.index');
    }
}
