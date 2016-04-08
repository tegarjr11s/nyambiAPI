<?php

use Lukasoppermann\Httpstatus\Httpstatuscodes;

class TestCase extends Laravel\Lumen\Testing\TestCase implements Httpstatuscodes
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */

    protected $client;

    /*public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }*/

    public function setUp()
    {
    	parent::setUp();

    	$this->client = new GuzzleHttp\client([
    		'base_uri' => 'http://api.nyambi.dev',
    		'exceptions' => false,
    	]);

    }
}
