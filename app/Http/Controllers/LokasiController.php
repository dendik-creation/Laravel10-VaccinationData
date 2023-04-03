<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasiAll = Lokasi::all();
        return view('lokasi.index',[
            'title' => 'Data Lokasi'
        ],compact('lokasiAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lokasi.create',[
            'title' => 'Lokasi Baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat_lokasi' => 'required',
        ]);
        Lokasi::create([
            'nama' => $request->nama,
            'alamat_lokasi' => $request->alamat_lokasi,
        ]);
        return redirect()->to('/lokasi')->with('success','Berhasil Menambah Data Lokasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lokasi $lokasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lokasi = Lokasi::where('id',$id)->first();
        return view('lokasi.edit',[
            'title' => 'Edit Lokasi'
        ])->with('lokasi',$lokasi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat_lokasi' => 'required',
        ]);
        Lokasi::where('id',$id)->update([
            'nama' => $request->nama,
            'alamat_lokasi' => $request->alamat_lokasi,
        ]);
        return redirect()->to('/lokasi')->with('success','Berhasil Update Data Lokasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Lokasi::where('id',$id)->delete();
        return redirect()->to('/lokasi')->with('success','Berhasil Hapus Data Lokasi');
    }
}
