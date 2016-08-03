<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
	public function index()
	{
	    $moltin = new \Moltin\SDK\SDK(new \Moltin\SDK\Storage\Session(), new \Moltin\SDK\Request\CURL(), [
	        'url'      => ( isset($this->config['moltin_api_url']) ? $this->config['moltin_api_url'] : null ),
	        'auth_url' => ( isset($this->config['moltin_api_auth_url']) ? $this->config['moltin_api_auth_url'] : null ),
	        'version'  => ( isset($this->config['moltin_api_version']) ? $this->config['moltin_api_version'] : null )
	    ]);
	    
	    $result = \Moltin::Authenticate('ClientCredentials', [
	        'client_id'     => '9Mq4GbxhZ47BzzMgs0aquVRUEjvWUcwLRDXDBR32HO',
	        'client_secret' => 'BPAP84U9ZMViuD0ng6qH8o0kyuJ4Z94WyTu9SNHSw1'
	    ]);
	    
	    return view('welcome', array('result' => $result));

	}
}
