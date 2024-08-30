<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi - TernakPro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/landing/img/carousel-2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            border-radius: 8px;
            padding: 20px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            color: #333;
        }
        .container .form-group label {
            font-weight: bold;
            font-size: 16px;
            color: #333;
        }
        .container .form-group input {
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 10px;
            width: 100%;
        }
        .container .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }
        .container .form-group .error {
            color: red;
            font-size: 12px;
        }
        .container .btn-register {
            float: right;
        }
        .container .link {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .container .link a {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }
        .container .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrasi</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="error mt-2" />
            </div>

            <!-- Email Address -->
            <div class="form-group mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="error mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group mt-4">
                <x-input-label for="password" :value="__('Kata Sandi')" />
                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="error mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group mt-4">
                <x-input-label for="password_confirmation" :value="__('Ulangi Kata Sandi')" />
                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="error mt-2" />
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary btn-register">
                    {{ __('Daftar') }}
                </button>
            </div>

            <div class="link">
                <a href="{{ '/awal' }}">
                    {{ __('Sudah Punya Akun ?') }}
                </a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
