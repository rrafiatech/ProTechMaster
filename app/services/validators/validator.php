<?php namespace Services\Validators;

//creating an abstract base class that will only allow access through extending it
abstract class Validator
{
	protected $input; //inputs we are sending to be validated
	protected $errors;//stores any errors returned by our \validator

	public function __construct($input = NULL)
	{
		//$input to all the inputs by default so we don't have to pass input::all everytime from the controller unless we need to override it
		$this->input = $input ?: \Input::all();
	}

	public function passes()
	{
		//passing the inputs to the laravel validator
		//the static rules will be passed from the login class in the services\validators folder
		$validation = \Validator::make($this->input, static::$rules);

		if($validation->passes())
		{
			return true;
		}

		//store all the error messages in the errors property
		$this->errors = $validation->messages();

		return false;
	}

	public function getErrors()
	{
		//return the error messages
		return $this->errors;
	}

}