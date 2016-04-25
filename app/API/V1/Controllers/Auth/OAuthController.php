<?php

namespace App\API\V1\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Request;
use Exception;
use LucaDegasperi\OAuth2Server\Authorizer;
use Illuminate\Http\Response;

class OAuthController extends Controller {

    protected $authorizer;

    public function __construct(Authorizer $authorizer){
        $this->authorizer = $authorizer;
    }

    public function accessToken(){

        return $this->authorizer->issueAccessToken();
        // try{
            // return $this->authorizer->issueAccessToken();
        // } catch (Exception $e) {
            // abort(403, 'Ga bisa yaaah');
            // return $this->response->errorUnauthorized('Unauthorized');
            // return respond(Response::HTTP_NOT_FOUND);
        // }
    }

    public function test(){
        return 'test';
    }
}