<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{ route("log") }}" method="POST">
       @csrf 
       <input type="email" name="email" id=""><br>
       <input type="password" name="password" id=""><br>
       <button>Login</button>
    </form>
</body>
</html>