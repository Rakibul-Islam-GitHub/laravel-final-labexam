<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/admin">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Username</td>
			<td>Name</td>
			<td>Contact</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($students); $i++)

			<tr>
				<td>{{$students[$i]['id']}}</td>
				<td>{{$students[$i]['username']}}</td>
				<td>{{$students[$i]['name']}}</td>
				<td>{{$students[$i]['contact']}}</td>
				<td>
					
                <a href="/edit/{{$students[$i]['id']}}">Edit </a> 
					<a href="/delete/{{$students[$i]['id']}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>