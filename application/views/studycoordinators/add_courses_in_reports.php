<style>
	select
	{
		min-width:165px;
		padding:0.2em;
		font-size:1em;
	}
	td
	{
		padding:0.5em;
	}
	input
	{
		padding:0.2em;
		font-size:1em;
		min-width:158px;
	}
</style>
<h3><?php echo $header; ?></h3>
<table>
<form action='../add_courses_in_reports/<?php echo $report_id; ?>' method='post'>	
	<tr>
		<td>
			Kies een vak:
		</td>
		<td>
			<select name='course'>
				<?php echo $courses; ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			Kies een docent:
		</td>
		<td>
			<select name='teacher'>
				<?php echo $teachers; ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type='submit' name='submit' /> 
		</td>
	<tr>
	<input type='hidden' name='report_id' value='<?php echo $report_id; ?>' />
</form>
</table>