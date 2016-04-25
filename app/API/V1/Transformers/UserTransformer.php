<?php

namespace App\API\V1\Transformers;

use League\Fractal\TransformerAbstract;
use App\API\V1\Models\User;

class UserTransformer extends TransformerAbstract
{ 
	public function transform(User $user)
    {
        return [
        	'id' => $user->id,
        	'first_name' => $user->first_name,
        	'last_name' => $user->last_name,
        	'email' => $user->email,
        	'phone' => $user->phone,
        	'sex' => $user->sex,
        	'id_profile_picture' => $user->id_profile_picture,
        	'birth_date' => $user->birth_date,
        	'status' => $user->status,
        	'rank' => $user->rank,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at

        ];

    }
}