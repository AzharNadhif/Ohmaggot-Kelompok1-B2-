<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin OhMaggot!</title>

    <link rel="Website Icon" href="{{asset('images/icon/logomaggot.png')}}" type="png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/loginadmin.css')}}">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <div class="header">
        <img src="{{asset('images/icon/logomaggot.png')}}" alt="">
        <p>WELCOME!</p>
        <p>Please Log In Here</p>
    </div>   

    {{-- {{$data}} --}}
    {{-- {{ auth()->user() }} --}}

    <!-- Form -->
    <div class="container d-flex justify-content-center">
        <div class="card col-md-7 mt-3 p-3 border-4">
            <div class="card-body">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control border-warning" id="email" name="email" placeholder="Email" required>
                        @error('email')
                        <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control border-warning" id="password" name="password" placeholder="Password" required>
                        @error('password')
                        <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center ">
                        <button type="submit" name="submit" class="btn btn-warning text-white">Log In</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                    </div>
                </form>
            </div>   
        </div>
    </div>
</body>
</html>