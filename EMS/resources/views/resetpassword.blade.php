<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Reset password</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Password Reset</h3>

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('reset') }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    required >
                               
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                                <!-- @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror -->
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <form action="" method="post">
        @csrf
        <input type="email" name="email" id=""><br>
        <input type="password" name="password" id=""><br>
        <button>Submit</button>
    </form> -->
</body>

</html>
<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>