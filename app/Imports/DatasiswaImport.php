<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class DatasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'namalengkap'=> $row [0],
            'NISN'=> $row [1],
            'jurusan'=> $row [2],
            'tempatlahir'=> $row [3],
            'tanggal_lahir'=> $row [4],
            'wali'=> $row [5],
            'thn_masuk'=> $row [6],
            'thn_lulus'=> $row [7],
            'no_ijazah'=> $row [8],
            'asalsekolah'=> $row [9],
        ]);
    }
}
