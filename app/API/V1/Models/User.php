<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
    	'id',
    	'name',
    	'email',
    	'phone',
    	'sex',
    	'id_profile_picture',
    	'birth_date',
    	'status',
    	'rank'
    ];

    protected $dates = ['birth_date','created_at','updated_at'];

    protected $hidden = ['password'];
    
    public $timestamps = true;
    
    public $incrementing = false;
}