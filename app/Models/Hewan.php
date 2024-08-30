<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    // Jika nama tabel di database tidak sesuai dengan konvensi Laravel (jamak dari nama model), tambahkan properti ini:
    protected $table = 'hewan'; // Pastikan ini sesuai dengan nama tabel di database
    public $timestamps = false; // Hapus baris ini jika tabel Anda menggunakan timestamps

    protected $fillable = [
       'nama_pemilik', 'tlp_pemilik','email_pemilik','jenis_hewan','jenis_kelamin','tanggal_masuk',
       'tanggal_pemantauan','berat_badan','suhu_tubuh', 'kondisi_kesehatan','perubahan_fisik','jenis_pakan',
       'jumlah_pakan','frekuensi_pakan','kondisi_kandang','suhu_lingkungan','kelembapan_lingkungan','pemberian_obat',
       'tindakan_perawatan','catatan','status_kesehatan','rekomendasi_tindakan','tanggal_keluar',
    ];
}
