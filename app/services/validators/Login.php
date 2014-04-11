<?php namespace Services\Validators;

/**
* Login class extends the validator. 
* Meaning when the login class is called, 
* the validator __construct class will be executed and store all the form inputs in the input property
*/
class Login extends Validator
{
	
	//define the rules for our input fields
	public static $rules = array(
		'username'=>'required',
		'password'=>'required'
		);
}