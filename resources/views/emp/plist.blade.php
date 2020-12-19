<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/emp">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>quantity</td>
			<td>price</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($students); $i++)

			<tr>
				<td>{{$students[$i]['id']}}</td>
				<td>{{$students[$i]['name']}}</td>
				<td>{{$students[$i]['quantity']}}</td>
				<td>{{$students[$i]['price']}}</td>
				<td>
					
                <a href="/emp/edit/{{$students[$i]['id']}}">Edit </a> 
					<a href="/emp/delete/{{$students[$i]['id']}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>