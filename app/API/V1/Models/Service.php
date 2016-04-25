<?php namespace App\API\V1\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model {

	use SoftDeletes;

	protected $table = 'service';

	protected $fillable = [
		"service_name", 
		"id_service_owner", 
		"description", 
		"service_picture", 
		"price", 
		"site_link", 
		"id_service_category", 
		"id_service_status"
	];

	protected $dates = ['created_at','updated_at'];

	public $timestamps = true;
    
    public $incrementing = true;

	public static $rules = [
		// Validation rules
	];

	// Relationships

}
