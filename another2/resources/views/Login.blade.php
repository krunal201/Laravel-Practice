<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div>
        <form action="{{ route("check") }}" method="post">
            @csrf
            <label for="">Email</label>
            <input type="text" name="email" id="">
            @error("email")
            {{ $message }}
            @enderror
            <br>

            <label for="">Password</label>
            <input type="text" name="password" id="">
            @error("password")
            {{ $message }}
            @enderror
            <br>
            <button>Login</button>
        </form>
    </div>
</body>
</html>