<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendudukAll = Penduduk::all();
        return view('penduduk.index',[
            'title' => 'List Data Penduduk'
        ],compact('pendudukAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penduduk.create',[
            'title' => 'Penduduk Baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'no_telp' => 'required',
        ]);
        Penduduk::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'no_telp' => $request->no_telp,
        ]);
        return redirect()->to('/penduduk')->with('success','Berhasil Menambah Data Penduduk');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penduduk = Penduduk::where('id',$id)->first();
        return view('penduduk.edit',[
            'title' => 'Edit Data Penduduk'
        ])->with('penduduk',$penduduk);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Penduduk::where('id',$id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'no_telp' => $request->no_telp,
        ]);
        return redirect()->to('/penduduk')->with('success','Berhasil Update Data Penduduk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Penduduk::where('id',$id)->delete();
        return redirect()->to('/penduduk')->with('success','Berhasil Hapus Data Penduduk');
    }
}
