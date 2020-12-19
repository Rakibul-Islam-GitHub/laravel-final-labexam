<!DOCTYPE html>
<html>
<head>
	<title>Add employee</title>
</head>
<body>
	<a href="/emp">Back</a> |
	<a href="/logout">logout</a>
	<br>
	
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Add product</legend>
			<table>
				<tr>
					<td>pRODUCT NAME</td>
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>quantuty</td>
					<td><input type="password" name="quantity" value="{{old('quantuty')}}"></td>
				</tr>
				<tr>
					<td>price</td>
					<td><input type="text" name="price" value="{{old('price')}}"></td>
				</tr>
               
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>