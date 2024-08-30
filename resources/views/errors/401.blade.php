<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access - 401</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 6rem;
            margin: 0;
            color: #dc3545;
        }

        h2 {
            font-size: 2rem;
            margin: 1rem 0;
        }

        p {
            font-size: 1rem;
            margin: 1rem 0;
            color: #666;
        }

        a {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>401</h1>
        <h2>Maaf, Anda Tidak Dapat Mengakses Halaman Ini</h2>
        <p>Anda tidak memiliki izin untuk melihat halaman ini. Silakan Hubungi pihak Admin Jika Anda ngin Mengakses Halaman Ini.</p>
        <a href="{{ '/awal' }}">Kembali ke Beranda</a>
    </div>
</body>

</html>
