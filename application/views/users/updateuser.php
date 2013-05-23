<h3><?php echo $header; ?></h3>
<table>
	<form action='<?php echo $id; ?>' method='post'>
		<tr>
			<td>voornaam</td>
			<td><input type='text' name='firstname' value='<?php echo $firstname; ?>' /></td>
		</tr>
		<tr>
			<td>tussenvoegsel</td>
			<td><input type='text' name='infix' value='<?php echo $infix; ?>'/></td>
		</tr>
		<tr>
			<td>achternaam</td>
			<td><input type='text' name='surname' value='<?php echo $surname; ?>'/></td>
		</tr>
		<tr>
			<td>emailaddress</td>
			<td><input type='text' name='emailaddress' value='<?php echo $emailaddress; ?>'/></td>
		</tr>
		<tr>
			<td>gebruikersrol</td>
			<td><input type='text' name='userrole' value='<?php echo $userrole; ?>'/></td>
		</tr>
		<tr>
			<td>wachtwoord</td>
			<td><input type='text' name='password' value='<?php echo $password; ?>'/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='submit' /></td>
		</tr>
	</form>
</table>