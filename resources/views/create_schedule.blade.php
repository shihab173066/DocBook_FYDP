@extends('layout')
<form method="POST" action="add_schedule" >
	@csrf

	<table>
		<tr>
			<td>Email</td>
			<td>
				<select name="emails" id="emails">
				@foreach($data as $d)
				 <option value={{$d->email}}>{{$d->email}}</option>
				 @endforeach
				</select>


			</td>

		</tr>
		<tr>
			<td>Start Time</td>
			<td><input type="time" name="start_time" id="start_time"/></td>

		

	</tr>
	<tr>
		<td>End Time</td>
		<td><input type="time" name="end_time" id="end_time"/></td>

	</tr>

	<tr>
		<td><input type="submit" name="submit"/></td>
	</tr>

	</table>



</form>
