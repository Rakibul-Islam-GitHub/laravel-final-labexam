<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<form action="" method="post">
  <!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
  <br>
  <br>
  <div class="container">
    <label for="username"><b>Username</b>
    <input type="text" placeholder="Enter Username" name="username" >
    </label>
    <label for="password"><b>Password</b>
    <input type="password" placeholder="Enter Password" name="password" >

    </label>

    <button type="submit">Login</button>
   
  </div>

  
</form>

        <h3 style="color: red">
			{{session('msg')}}
		</h3>

        @foreach($errors->all() as $err)
		{{$err}} <br>
	    @endforeach

</body>
</html>