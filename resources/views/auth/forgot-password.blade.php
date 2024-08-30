<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lupa Kata Sandi - TernakPro</title>
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
            max-width: 400px;
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
        .container .form-group .forgot-password {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .container .form-group .forgot-password a {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }
        .container .form-group .forgot-password a:hover {
            text-decoration: underline;
        }
        .container .form-group .login-button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container .form-group .login-button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mb-4 text-center text-gray-600">
            {{ __('Lupa kata sandi Anda? Tidak masalah. Beritahu kami alamat email Anda dan kami akan mengirimkan tautan reset kata sandi melalui email yang memungkinkan Anda untuk memilih kata sandi baru.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="error mt-2" />
            </div>

            <div class="form-group text-center mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Kirim Tautan.') }}
                </button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
