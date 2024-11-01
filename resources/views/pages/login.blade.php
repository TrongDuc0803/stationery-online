
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <section class=login-page>
        <div class="login-form-box">
            <div class="login-title">Log In</div>
            <div class="login-form">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="@error('email') has-error @enderror" placeholder="Enter your email">
                        @error('email')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="@error('password') has-error @enderror" placeholder="Enter your password">
                        @error('password')
                            <span class="field-error">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                   <a href="{{route('register')}}">Register Now</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>