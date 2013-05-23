<style>
	select
	{
		min-width:205px;
		margin:0.5em;
	}
	input
	{
		min-width:200px;
		margin:0.5em;
	}
</style>

<p><h4><?php echo $headertekst; ?></h4></p>
<form action='../users/add' method='post' >
	<table>	
		<tr>
			<td>voornaam:</td>
			<td><input type='text' name='firstname' placeholder='voornaam'/></td>
		<tr>
		<tr>
			<td>tussenvoegsel:</td>
			<td><input type='text' name='infix' placeholder='tussenvoegsel'/></td>
		</tr>
		<tr>
			<td>achternaam:</td>
			<td><input type='text' name='surname' placeholder='achternaam'/></td>
		</tr>
		<tr>
			<td>emailadres:</td>
			<td><input type='text' name='emailaddress' placeholder='emailadres' /></td>
		</tr>
		<tr>
			<td>gebruikersrol:</td>
			<td>
				<select name='userrole'>
					<?php echo $userroles; ?>				
				</select>			
			</td>
		</tr>
		<tr>
			<td>wachtwoord:</td>
			<td><input type='text' name='password' placeholder='wachtwoord'/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type='submit' name='submit' value='verstuur'/></td>
		</tr>
	</table>
</form>