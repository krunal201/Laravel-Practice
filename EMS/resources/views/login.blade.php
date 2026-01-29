<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="email" name="email" id=""><br>
        <input type="password" name="password" id=""><br>
        <a href="{{ route('reset') }}">Reset password</a><br>
        <button>Submit</button>
    </form>
</body>
</html>