<div id='link'>
	<ul>
		<?php if (isset($_SESSION['userrole']))
		{
			echo "<li><a href='../users/logout'>logout</a></li>";
			switch ($_SESSION['userrole'])
			{
				case 'student':
					
				break;
				case 'teacher':
					echo "<li><a href='".BASE_URL."teachers/view_marks'>view marks</a></li>";
				break;
				case 'root':
				break;
				case 'administrator':
					echo "<li><a href='".BASE_URL."users/adduser'>add user</a></li>";
					echo "<li><a href='".BASE_URL."users/viewall'>all users</a></li>";
					echo "<li><a href='".BASE_URL."administrators/view_students'>students</a></li>";
				break;
				case 'studycoordinator':
					echo "<li><a href='".BASE_URL."studycoordinators/add_class'>add class</a></li>";
					echo "<li><a href='".BASE_URL."studycoordinators/add_courses'>add course</a></li>";
					echo "<li><a href='".BASE_URL."studycoordinators/add_report'>add report</a></li>";
					echo "<li><a href='".BASE_URL."studycoordinators/report_overview'>report overview</a></li>";
				break;	
			}		
		}
		else
		{
			echo "<li><a href=''>TODO1</a></li>";
			echo "<li><a href=''>TODO2</a></li>";
			echo "<li><a href=''>TODO3</a></li>";
			echo "<li><a href=''>TODO4</a></li>";
			echo "<li><a href=''>TODO5</a></li>";
		}
		?>		
	</ul>
</div>
