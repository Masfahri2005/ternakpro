<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pemantauan Hewan TernakPro</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .table th {
            background-color: #f4f4f4;
            color: #333;
        }
        .table td {
            color: #666;
        }
        .summary {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 2px solid #ddd;
        }
        .summary h4 {
            color: #333;
        }
        .summary ul {
            list-style: disc;
            padding-left: 20px;
        }
        .summary li {
            margin-bottom: 8px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pemantauan Hewan TernakPro</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>Nama Pemilik</th>
                    <td>{{ $data_hewan->nama_pemilik }}</td>
                </tr>
                <tr>
                    <th>Telepon Pemilik</th>
                    <td>{{ $data_hewan->tlp_pemilik }}</td>
                </tr>
                <tr>
                    <th>Email Pemilik</th>
                    <td>{{ $data_hewan->email_pemilik }}</td>
                </tr>
                <tr>
                    <th>Jenis Hewan</th>
                    <td>{{ $data_hewan->jenis_hewan }}</td>
                </tr>
                <tr>
                    <th>Tanggal Masuk Kandang</th>
                    <td>{{ $data_hewan->tanggal_masuk }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pemantauan</th>
                    <td>{{ $data_hewan->tanggal_pemantauan }}</td>
                </tr>
                <tr>
                    <th>Berat Badan (kg)</th>
                    <td>{{ $data_hewan->berat_badan }}</td>
                </tr>
                <tr>
                    <th>Suhu Tubuh (°C)</th>
                    <td>{{ $data_hewan->suhu_tubuh }}</td>
                </tr>
                <tr>
                    <th>Kondisi Kesehatan</th>
                    <td>{{ $data_hewan->kondisi_kesehatan }}</td>
                </tr>
                <tr>
                    <th>Perubahan Fisik</th>
                    <td>{{ $data_hewan->perubahan_fisik }}</td>
                </tr>
                <tr>
                    <th>Jenis Pakan</th>
                    <td>{{ $data_hewan->jenis_pakan }}</td>
                </tr>
                <tr>
                    <th>Jumlah Pakan (kg)</th>
                    <td>{{ $data_hewan->jumlah_pakan }}</td>
                </tr>
                <tr>
                    <th>Frekuensi Pakan (Kali per Hari)</th>
                    <td>{{ $data_hewan->frekuensi_pakan }}</td>
                </tr>
                <tr>
                    <th>Kondisi Kandang</th>
                    <td>{{ $data_hewan->kondisi_kandang }}</td>
                </tr>
                <tr>
                    <th>Suhu Lingkungan (°C)</th>
                    <td>{{ $data_hewan->suhu_lingkungan }}</td>
                </tr>
                <tr>
                    <th>Kelembapan Lingkungan (%)</th>
                    <td>{{ $data_hewan->kelembapan_lingkungan }}</td>
                </tr>
                <tr>
                    <th>Pemberian Obat</th>
                    <td>{{ $data_hewan->pemberian_obat }}</td>
                </tr>
                <tr>
                    <th>Tindakan Perawatan</th>
                    <td>{{ $data_hewan->tindakan_perawatan }}</td>
                </tr>
                <tr>
                    <th>Catatan</th>
                    <td>{{ $data_hewan->catatan }}</td>
                </tr>
                <tr>
                    <th>Status Kesehatan</th>
                    <td>{{ $data_hewan->status_kesehatan }}</td>
                </tr>
                <tr>
                    <th>Rekomendasi Tindakan</th>
                    <td>{{ $data_hewan->rekomendasi_tindakan }}</td>
                </tr>
                <tr>
                    <th>Tanggal Keluar</th>
                    <td>{{ $data_hewan->tanggal_keluar }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Kesimpulan -->
        <div class="summary">
            <h4>Kesimpulan yang bisa di dapat :</h4>
            <ul>
                <li>Hewan Ini Mulai Masuk kandang pada tanggal {{ $data_hewan->tanggal_masuk }} dan mulai kami pantau pada tanggal {{ $data_hewan->tanggal_pemantauan }}.</li>
                <li>Jenis hewan yang dipantau adalah {{ $data_hewan->jenis_hewan }} dengan jenis kelamin {{ $data_hewan->jenis_kelamin }}.</li>
                <li>Berat badan hewan adalah {{ $data_hewan->berat_badan }} kg dan suhunya {{ $data_hewan->suhu_tubuh }}°C.</li>
                <li>Kondisi kesehatan hewan saat ini adalah {{ $data_hewan->kondisi_kesehatan }} dengan beberapa perubahan fisik yang terdeteksi: {{ $data_hewan->perubahan_fisik }}.</li>
                <li>Hewan diberikan pakan jenis {{ $data_hewan->jenis_pakan }} sebanyak {{ $data_hewan->jumlah_pakan }} kg dengan frekuensi {{ $data_hewan->frekuensi_pakan }} kali per hari.</li>
                <li>Kondisi kandang saat ini {{ $data_hewan->kondisi_kandang }} dengan suhu lingkungan {{ $data_hewan->suhu_lingkungan }}°C dan kelembapan lingkungan {{ $data_hewan->kelembapan_lingkungan }}%.</li>
                <li>Obat yang diberikan: {{ $data_hewan->pemberian_obat }} dan tindakan perawatan yang dilakukan adalah {{ $data_hewan->tindakan_perawatan }}.</li>
                <li>Status kesehatan selami kami pelihara kurang lebih 1 bulan adalah {{ $data_hewan->status_kesehatan }} dan rekomendasi tindakan yang disarankan adalah {{ $data_hewan->rekomendasi_tindakan }}.</li>
                <li>Tanggal keluar dari kandang adalah {{ $data_hewan->tanggal_keluar }}.</li>
            </ul>
        </div>
    </div>
</body>
</html>
