<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Route::post('oauth/access_token', function() {
    // return Response::json(Authorizer::issueAccessToken());
// });

$app->post('oauth/access_token', function() {
	return response()->json(Authorizer::issueAccessToken());
	// return Response::json(Authorizer::issueAccessToken());
});

$app->get('/', function () use ($app) {
    return $app->version();
});

$api = app('Dingo\Api\Routing\Router');

$api->group([
	'version' => 'v1',
	'namespace' => 'App\API\V1\Controllers',
],
function($api)
{

	// Authorization Route
	$api->post('user/access_token', 'Auth\OAuthController@accessToken');

	// GET
    $api->get('user', 'UserController@all');

});


