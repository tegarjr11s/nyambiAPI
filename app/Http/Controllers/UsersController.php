<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller 
{
	public function show()
	{
		$Users = User::all();
		return response()->json($Users);
	}
}