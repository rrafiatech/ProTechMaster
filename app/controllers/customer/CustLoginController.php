<?php
/**
* 			
*/
class CustLoginController extends BaseController
{
	
	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function login()
	{
		$validation = new Services\Validators\Login();

		if($validation->passes())
		{
			//Authentication
			return true;
		}

		return Redirect::back()
			->withErrors($validation->geterrors())
			->withInput(Input::except('password'));
	}
}