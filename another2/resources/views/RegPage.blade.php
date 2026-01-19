<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="{{ route("log") }}" method="POST">
       @csrf 
       <input type="text" name="name" id=""><br>
       <input type="email" name="email" id=""><br>
       <input type="password" name="password" id=""><br>
       <button>Register</button>
    </form>
</body>
</html>
