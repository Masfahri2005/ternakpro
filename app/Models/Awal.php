<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awal extends Model
{
    use HasFactory;

    // Jika nama tabel di database tidak sesuai dengan konvensi Laravel (jamak dari nama model), tambahkan properti ini:
    protected $table = 'awal'; // Pastikan ini sesuai dengan nama tabel di database
    public $timestamps = false; // Hapus baris ini jika tabel Anda menggunakan timestamps

    protected $fillable = [
       'nama_lengkap','no_tlp','email_aktif','rating','pesan_saran'
    ];
}
