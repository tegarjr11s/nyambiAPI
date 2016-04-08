<?php

namespace App\API\V1\Controllers;

use App\User;
use App\API\V1\Controllers;

class UsersController extends BaseController 
{
	public function show()
	{
		//$Users = User::all();
		//Return response()->json($Users);
		return 'test';
	}
}