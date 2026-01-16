<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div>
        <form action="{{ route("register") }}" method="POST">
            @csrf
             <label for="">Name</label>
            <input type="text" name="name" id="">
            @error("name")
            {{ $message }}
            @enderror
            <br>

            <label for="">Email</label>
            <input type="email" name="email" id="">
            @error("email")
            {{ $message }}
            @enderror
            <br>

            <label for="">Password</label>
            <input type="password" name="password" id="">
            @error("password")
            {{ $message }}
            @enderror
            <br>
            <button>Register</button>
        </form>
    </div>
</body>
</html>