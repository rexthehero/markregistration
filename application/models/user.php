<?php
 class User extends Model
 { 
	public function select_all()
	{  
		return $this->query("select * from users");	
	}
 }
?>