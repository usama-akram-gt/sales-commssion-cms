<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ManagerController extends Controller
{
    public function index(Request $request)
	{
		return view('manager.index');
	}
}
