<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    // Jika nama tabel di database tidak sesuai dengan konvensi Laravel (jamak dari nama model), tambahkan properti ini:
    protected $table = 'daftar'; // Pastikan ini sesuai dengan nama tabel di database
    public $timestamps = false; // Hapus baris ini jika tabel Anda menggunakan timestamps

    protected $fillable = [
       'jenis','foto','usia','level','berat',
       'kondisi_fisik','harga','kategori','status'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_daftar');
    }
    
}
