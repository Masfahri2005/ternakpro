<!DOCTYPE html>
<html>
<head>
    <title>Detail Investor/Pemasok</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table, .table th, .table td {
            border: 1px solid #ddd;
        }
        .table th, .table td {
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2 class="text-center">Detail Investor/Pemasok</h2>
    <table class="table">
        <tr>
            <th>Nama Investor/Pemasok</th>
            <td>{{ $investor->nama_investor }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>{{ $investor->no_tlp }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $investor->email }}</td>
        </tr>
        <tr>
            <th>Nomor WhatsApp</th>
            <td>{{ $investor->no_wa }}</td>
        </tr>
        <tr>
            <th>Nama Usaha</th>
            <td>{{ $investor->nama_perusahaan }}</td>
        </tr>
        <tr>
            <th>Alamat Usaha</th>
            <td>{{ $investor->alamat_perusahaan }}</td>
        </tr>
        <tr>
            <th>Kota Usaha</th>
            <td>{{ $investor->kota }}</td>
        </tr>
        <tr>
            <th>Provinsi Usaha</th>
            <td>{{ $investor->provinsi }}</td>
        </tr>
        <tr>
            <th>Kode Pos</th>
            <td>{{ $investor->kode_pos }}</td>
        </tr>
        <tr>
            <th>Negara</th>
            <td>{{ $investor->negara }}</td>
        </tr>
        <tr>
            <th>Website</th>
            <td>
                <a href="{{ $investor->website }}" target="_blank">{{ $investor->website }}</a>
            </td>
        </tr>
        <tr>
            <th>Tipe Entitas</th>
            <td>{{ $investor->tipe_entitas }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $investor->status }}</td>
        </tr>
        <tr>
            <th>Nominal Investasi</th>
            <td>Rp. {{ number_format($investor->nominal_investasi, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Bukti Investasi</th>
            <td>
                @if ($investor->bukti_investasi)
                    <a href="{{ asset('storage/bukti_investasi/' . $investor->bukti_investasi) }}" target="_blank">
                        Lihat Bukti Investasi
                    </a>
                @else
                    Tidak Ada Bukti Investasi
                @endif
            </td>
        </tr>
    </table>
</body>
</html>
