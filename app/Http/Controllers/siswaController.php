<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('master.datasiswa.index_siswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.datasiswa.tambah_siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namalengkap' => 'required',
            'NISN' => 'required',
            'jurusan' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('datasiswa.index')
            ->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('master.datasiswa.edit_siswa', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $this->validate($request, [
            'namalengkap' => 'required',
            'NISN' => 'required',
            'jurusan' => 'required',
        ]);
        $siswa->update([
            'namalengkap'     => $request->namalengkap,
            'NISN'     => $request->NISN,
            'jurusan'   => $request->jurusan,
            'tempatlahir'     => $request->tempatlahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'wali'   => $request->wali,
            'thn_masuk'     => $request->thn_masuk,
            'thn_lulus'     => $request->thn_lulus,
            'no_ijazah'   => $request->no_ijazah,
            'asalsekolah'     => $request->asalsekolah,
        ]);

        // $request->validate([
        //     'namalengkap' => 'required',
        //     'NISN' => 'required',
        //     'jurusan' => 'required',
        // ]);
        // $siswa = Siswa::find($siswa);
        // $siswa->namalengkap = $request->get('namalengkap');
        // $siswa->NISN = $request->get('NISN');
        // $siswa->jurusan = $request->get('jurusan');
        // $siswa->tempatlahir = $request->get('tempatlahir');
        // $siswa->tanggal_lahir = $request->get('tanggal_lahir');
        // $siswa->wali = $request->get('wali');
        // $siswa->thn_masuk = $request->get('thn_masuk');
        // $siswa->thn_lulus = $request->get('thn_lulus');
        // $siswa->no_ijazah = $request->get('no_ijazah');
        // $siswa->asalsekolah = $request->get('asalsekolah');
        // $siswa->update();

        return redirect()->route('datasiswa.index')
            ->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
