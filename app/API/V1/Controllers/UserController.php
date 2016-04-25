<?php

namespace App\API\V1\Controllers;

use App\API\V1\Models\User;
use App\API\V1\Controllers;
use App\API\V1\Transformers\UserTransformer;

class UserController extends ApiController 
{
	public function all(){
		
		$meta = [
			'api_version' => $_ENV['API_VERSION']
		];

		$user = User::paginate(10);
		$start = microtime(true);
		
		return $this->response->paginator($user, new UserTransformer, ['key' => 'user'])->setMeta($meta);
	}
}