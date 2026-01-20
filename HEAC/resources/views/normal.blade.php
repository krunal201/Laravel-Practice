<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{ route("reg") }}" method="post">
        @csrf
        <input type="text" name="name" id=""><br>
        <input type="email" name="email" id=""><br>
        <input type="password" name="password" id=""><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
