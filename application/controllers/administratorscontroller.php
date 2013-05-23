<?php
 class AdministratorsController extends Controller
 {
	public function homepage()
	{
		$this->set('header', 'Dit is de administrators homepage');
	}
	
	public function view_students()
	{
		$select_students = $this->_model->select_all_students();
		//var_dump($select_students);
		$select_class = $this->_model->select_all_classes();
		var_dump($select_class);
		$students = "";
		foreach ($select_students as $value)
		{
			$students .= "<tr>
							<td>".$value['User']['user_id']."</td>
							<td>".$value['User']['firstname']."</td>
							<td>".$value['User']['infix']."</td>
							<td>".$value['User']['surname']."</td>
							<td>
								<select name=''>
								<option>-kies een klas-</option>";
									foreach ($select_class as $class)
									{
										$students .= "<option value>".$class['Cla']['class']."</option>";
									}
							$students .= "</select>
							</td>
						  </tr>
						 ";
		}
		$this->set('header', 'Plaats de onderstaande studenten in een klas');
		$this->set('students', $students);
	}
 }
?>