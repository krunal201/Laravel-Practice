<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password</title>
</head>
<body>
    <form action="{{ route('reset') }}" method="post">
        @csrf
        @method('PUT')
        <input type="email" name="email" id=""><br>
        <input type="password" name="password" id=""><br>
        <button>Submit</button>
    </form>
</body>
</html>
<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>
