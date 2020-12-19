<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="/emp">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit product</legend>
			<table border="1">
				<tr>
					<td>name</td>
					<td><input type="text" name="name" value="{{$name}}"></td>
				</tr>
                <tr>
					<td>quantity</td>
					<td><input type="text" name="quantity" value="{{$quantity}}"></td>
				</tr>
				<tr>
					<td>price</td>
					<td><input type="password" name="price" value="{{$price}}"></td>
				</tr>
				
				
				
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>