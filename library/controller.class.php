<?php
 class Controller
 {
	//Fields
	protected $_model;
	protected $_controller;
	protected $_action;
	
	//Constructor wordt aangeroepen omdat de UsersController class er geen heeft.
	public function __construct($model, $controller, $action)
	{
		$this->_model = new $model();  //Er wordt een instantie gemaakt van de User class $this->_model = new User();
		$this->_controller = $controller; //$this->_controller = users
		$this->_action = $action;
	}
 }


?>