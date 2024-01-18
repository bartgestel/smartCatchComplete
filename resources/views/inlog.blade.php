<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Catch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for Smart Catch">
    <meta name="author" content="Safa Hassan">
    <link rel="stylesheet" href="{{URL::asset('css/style_inlog.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style_dashboard.css')}}">
</head>
<body>
    @include('partials.header')
    <div class="container">
        <div class="logo">
            <img id="login-logo" src="{{URL::asset('img/SmartCatch.png')}}" alt="Smart Catch">
        </div>

        <div class="form-container">
            <form action="/login" method="post">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                @csrf
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" id="Username" name="Username" placeholder="Your username" required>
                </div>

                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" id="Password" name="Password" placeholder="Password" required>
                </div>

                <div id="button-container">
                    <button class="button button1" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
