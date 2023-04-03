<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaksinAll = Vaksin::all();
        return view('vaksin.index',[
            'title' => 'Data Vaksin'
        ],compact('vaksinAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vaksin.create',[
            'title' => 'Vaksin Baru'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
        Vaksin::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->to('/vaksin')->with('success','Berhasil Menambah Data Vaksin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vaksin $vaksin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vaksin = Vaksin::where('id', $id)->first();
        return view('vaksin.edit',[
            'title' => 'Edit Vaksin'
        ])->with('vaksin',$vaksin);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request)
    {
        Vaksin::where('id',$id)->first()->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->to('/vaksin')->with('success','Berhasil Update Data Vaksin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Vaksin::where('id',$id)->delete();
        return redirect()->to('/vaksin')->with('success','Berhasil Hapus Data Vaksin');
    }
}
