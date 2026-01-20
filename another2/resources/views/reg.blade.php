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
            <br>
             <label for="">Name</label>
            <input type="text" name="name" id="">
            @error("name")
            {{ $message }}
            @enderror
            <br>

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
            <button>Register</button>

            <p>Already have an account? </p><a href="{{ route('check') }}">Login</a>
        </form>
    </div>
    <!-- <script>
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    </script> -->
</body>
</html>