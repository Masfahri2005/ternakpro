<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Invoice - TernakPro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
        }
        .content-wrapper {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background-color: #fdf6e3;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .card {
            border: 1px solid #ffeb3b;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff9c4;
        }
        .card-header {
            background-color: #fbc02d;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #f9a825;
        }
        .card-body {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .card-body .item {
            width: 45%;
            margin-bottom: 15px;
        }
        .item strong {
            color: #fbc02d;
        }
        .footer {
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            border-top: 1px solid #ffeb3b;
            font-size: 14px;
            color: #777;
        }
        a {
            color: #fbc02d;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                Detail Transaksi
            </div>
            <div class="card-body">
                <div class="item">
                    <p><strong>Nama Lengkap :</strong> {{ $transaksi->nama_lengkap }}</p>
                </div>
                <div class="item">
                    <p><strong>Nomor Telepon :</strong> {{ $transaksi->no_tlp }}</p>
                </div>
                <div class="item">
                    <p><strong>Email :</strong> {{ $transaksi->email }}</p>
                </div>
                <div class="item">
                    <p><strong>Alamat :</strong> {{ $transaksi->alamat }}</p>
                </div>
                <div class="item">
                    <p><strong>Jenis Hewan :</strong> {{ $transaksi->daftar->jenis }}</p>
                </div>
                <div class="item">
                    <p><strong>Harga :</strong> {{ $transaksi->daftar->harga }}</p>
                </div>
                <div class="item">
                    <p><strong>Metode Pembayaran :</strong> {{ $transaksi->metode_pembayaran }}</p>
                </div>
                <div class="item">
                    <p><strong>Status Pembayaran :</strong> {{ $transaksi->status_pembayaran }}</p>
                </div>
                <div class="item">
                    <p><strong>Tanggal Transaksi :</strong> {{ $transaksi->tanggal_transaksi }}</p>
                </div>
                <div class="item">
                    <p><strong>Bukti Pembayaran :</strong>
                        @if($transaksi->bukti_pembayaran)
                            <a href="{{ asset('uploads/' . $transaksi->bukti_pembayaran) }}" target="_blank">Lihat Bukti Pembayaran</a>
                        @else
                            Tidak ada bukti pembayaran
                        @endif
                    </p>
                </div>
                <div class="item">
                    <p><strong>Catatan Tambahan :</strong> {{ $transaksi->catatan_tambahan }}</p>
                </div>
            </div>
        </div>
        <div class="footer">
            Terima kasih telah bertransaksi dengan TernakPro. Semoga sukses dalam usaha ternak Anda!
        </div>
    </div>
</body>
</html>
