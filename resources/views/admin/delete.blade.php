<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete emp</title>
</head>
<body>
    <form  method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <h1>want to delete this?</h1>

    <input type="submit" value="delete">
    
    
    </form>
</body>
</html>