<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Testj extends REST_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function jwd_get()
	{
		$this->response(array('xx' => 116.397428 ,'yy' => 39.90923), 200);
	}
}
