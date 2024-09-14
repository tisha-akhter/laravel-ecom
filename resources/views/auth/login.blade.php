<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap');

        * {
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        html,
        body {
            margin: 0;
            height: 100%;
            width: 100%;
        }

        .full-screen-container {
            background-image: url('https://img.freepik.com/free-photo/beautiful-woman-vintage-image_144627-24213.jpg?t=st=1726116801~exp=1726120401~hmac=0f4b351d19fb7a230ad36995727ec354ab8a252dbb25b10fdb18f90fd43f513b&w=740');
            height: 100vh;
            width: 100vw;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background-color: hsla(252, 100%, 3%, 0.6);
            padding: 50px 30px;
            min-width: 400px;
            width: 50%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .login-title {
            color: #fff;
            text-align: center;
            margin: 0;
            margin-bottom: 40px;
            font-size: 2.5em;
            font-weight: normal;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .input-group label {
            color: #fff;
            font-weight: lighter;
            font-size: 1.5em;
            margin-bottom: 7px;
        }

        .input-group input {
            font-size: 1.5em;
            padding: 0.1em 0.25em;
            background-color: hsla(201, 100%, 91%, 0.3);
            border: 1px solid hsl(201, 100%, 6%);
            outline: none;
            border-radius: 5px;
            color: #fff;
            font-weight: lighter;
        }

        .input-group input:focus {
            border: 1px solid hsl(201, 100%, 50%);
        }

        .login-button {
            padding: 10px 30px;
            width: 100%;
            border-radius: 5px;
            background: hsla(300, 98%, 25%, 0.1);
            border: 1px solid hsl(314, 100%, 11%);
            outline: none;
            font-size: 1.5em;
            color: #fff;
            font-weight: lighter;
            margin-top: 20px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: hsla(241, 97%, 12%, 0.3);
        }

        .login-button:focus {
            background-color: hsla(246, 100%, 11%, 0.5);
        }

        .form-check {
            display: flex;
            align-items: center;
            justify-content: space-around;
            color: #0e001f;
        }

        .form-check a {
            color: #b03ffc;
            text-decoration: none;
        }

        .form-check a:hover {
            text-decoration: underline;
        }

        .right-container__bottom-text {
            text-align: center;
            color: #0e001f;
            margin-top: 20px;
        }

        .right-container__bottom-text a {
            color: #b03ffc;
            text-decoration: none;
            font-weight: bold;
        }

        .right-container__bottom-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="full-screen-container">
        <div class="login-container">
            <form class="login" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" class="@error('email') is-invalid @enderror" id="email" name="email"
                        required />
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" class="@error('password') is-invalid @enderror" id="password"
                        name="password" required />
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="login-button">Log in</button>
            </form>
            <div class="form-check">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
                <a href="forget.html">Forget Password</a>
            </div>
        </div>
    </div>
</body>

</html>
