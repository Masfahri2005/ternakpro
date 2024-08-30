<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    // Jika nama tabel di database tidak sesuai dengan konvensi Laravel (jamak dari nama model), tambahkan properti ini:
    protected $table = 'transaksi'; // Pastikan ini sesuai dengan nama tabel di database
    public $timestamps = false; // Hapus baris ini jika tabel Anda menggunakan timestamps

    protected $fillable = [
       'nama_lengkap','no_tlp','email','alamat','id_daftar','harga','metode_pembayaran',
       'status_pembayaran','tanggal_transaksi','bukti_pembayaran','catatan_pembayaran'
    ];

    public function daftar()
    {
        return $this->belongsTo(Daftar::class, 'id_daftar');
    }
}
