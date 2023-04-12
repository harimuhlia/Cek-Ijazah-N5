<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'namalengkap', 'NISN', 'jurusan', 'tempatlahir', 'tanggal_lahir', 'wali', 'thn_masuk', 'thn_lulus', 'no_ijazah', 'asalsekolah'
    ];
}
