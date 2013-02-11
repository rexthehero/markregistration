<?php
 class UsersController extends Controller
 {
	public function adduser()
	{
		$headertekst = "Het is een beetje koud buiten!";
		$this->set('headertekst', $headertekst );
		$all_users = $this->_model->select_all();
		$this->set('all_users', $all_users);
	}
 }
?>