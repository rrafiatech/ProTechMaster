<?php 

class LoginController extends BaseController {

	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
	}
	public function doLogin()
	{
		//instantiating the login class under the validators services. Input::all() is passed by default  to the class.
		//to override the input::all() simply pass new inputs to the login class. new Services\Validators\Login(new inputs .....)
		$validation = new Services\Validators\Login;

		if ($validation->passes()) {
			//Authentication
			return Redirect::to('admin/dashboard');
		}

		return Redirect::back()
				->withErrors($validation->geterrors()) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form 
	}

}