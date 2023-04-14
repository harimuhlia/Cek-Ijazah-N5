<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DatasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasiswa = Siswa::all();
        return view('master.datasiswa.index_siswa', compact('datasiswa'));
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
            'NISN' => 'required|min:6|unique:siswas',
            'jurusan' => 'required',
            'no_ijazah' => 'unique:siswas|min:5',
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
    public function edit($id)
    {
        $datasiswa = Siswa::find($id);
        // dd($datasiswa);
        return view('master.datasiswa.edit_siswa', compact('datasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namalengkap' => 'required',
            'NISN' => 'required|min:6|unique:siswas,NISN,' . $id,
            'jurusan' => 'required',
            'no_ijazah' => 'required|min:6|unique:siswas,no_ijazah,' . $id,
        ]);

        Siswa::find($id)->update($request->all());

        return redirect()->route('datasiswa.index')
            ->with('success', 'Student Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::find($id)->delete();

        return redirect()->back()
            ->with('success', 'Student Deleted successfully.');
    }
}
