<?php

class RegisterController extends Controller{

	protected $userObject;

	public function index(){

		$userObject = new Users();
		$this->set('task','add');
	}

	public function add(){

		$this->userObject = new Users();
		$password = $_POST['password'];
		$passhash = password_hash($password,PASSWORD_DEFAULT);
		$data = array('first_name'=>$_POST['first_name'],
		'last_name'=>$_POST['last_name'],
		'email'=>$_POST['email'],
		'password'=>$passhash);
		$this->userObject->addUser($data);
		$this->set('message', 'Thanks for registering!');
	}
}

?>
