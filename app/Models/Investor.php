<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    // Jika nama tabel di database tidak sesuai dengan konvensi Laravel (jamak dari nama model), tambahkan properti ini:
    protected $table = 'investor'; // Pastikan ini sesuai dengan nama tabel di database
    public $timestamps = false; // Hapus baris ini jika tabel Anda menggunakan timestamps

    protected $fillable = [
       'nama_investor','no_tlp','email','no_wa','nama_perusahaan','alamat_perusahaan',
       'kota','provinsi','kode_pos','negara','website','tipe_entitas','status','nominal_investasi','bukti_investasi'
    ];

}
