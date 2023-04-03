<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Vaksinasi;
use App\Models\Penduduk;
use App\Models\Vaksin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaksinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $vaksinasiAll = Vaksinasi::
                join('penduduks', 'vaksinasis.penduduk_id', '=', 'penduduks.id')
                ->select('vaksinasis.*', 'penduduks.nik', 'penduduks.nama')
            ->where('penduduks.nik','LIKE','%'.$request->search.'%')->paginate(4);
            return view('vaksinasi.index',[
                'result' => 'Hasil Dari Pencarian NIK'.' '. $request->search ,
                'title' => 'Data Vaksinasi'
            ],compact('vaksinasiAll'));
        }
        else{
            $vaksinasiAll = Vaksinasi::with('penduduk','lokasi','vaksin')->latest()->paginate(8);
            return view('vaksinasi.index',[
                'title' => 'Data Vaksinasi'
            ],compact('vaksinasiAll'));
        }
    }

    public function terlama(Request $request){
        if($request->has('search')){
            $vaksinasiAll = Vaksinasi::
                join('penduduks', 'vaksinasis.penduduk_id', '=', 'penduduks.id')
                ->select('vaksinasis.*', 'penduduks.nik', 'penduduks.nama')
            ->where('penduduks.nik','LIKE','%'.$request->search.'%')->paginate(4);
            return view('vaksinasi.index',[
                'result' => 'Hasil Dari Pencarian NIK'.' '. $request->search ,
                'title' => 'Data Vaksinasi'
            ],compact('vaksinasiAll'));
        }
        else{
            $vaksinasiAll = Vaksinasi::with('penduduk','lokasi','vaksin')->paginate(8);
            return view('vaksinasi.index',[
                'title' => 'Data Vaksinasi'
            ],compact('vaksinasiAll'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penduduk = Penduduk::all();
        $vaksin = Vaksin::all();
        $lokasi = Lokasi::all();
        return view('vaksinasi.create',[
            'title' => 'Vaksinasi Baru'
        ],compact('penduduk','vaksin','lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'penduduk_id' => 'required',
            'vaksin_id' => 'required',
            'lokasi_id' => 'required',
        ]);
        $vaksin2 = Vaksinasi::where('penduduk_id',$request->penduduk_id)->first();
        $vaksin3 = Vaksinasi::where('penduduk_id',$request->penduduk_id)->where('vaksin_ke',2)->first();
        $vaksin4 = Vaksinasi::where('penduduk_id',$request->penduduk_id)->where('vaksin_ke',3)->first();
        $maxVaksin = Vaksinasi::where('penduduk_id',$request->penduduk_id)->where('vaksin_ke',4)->first();
        $request['penduduk_id'] = $request->penduduk_id;
        $request['vaksin_ke'] = $request->vaksin_ke;
        $request['lokasi_id'] = $request->lokasi_id;

        if($maxVaksin){
            return back()->with('failed','Penduduk Telah Melakukan Vaksin Sebanyak 4x');
        }
        else{
            if($vaksin2 && !$vaksin3 && !$vaksin4){
                $request['vaksin_ke'] = 2;
                Vaksinasi::create($request->all());
            }
            elseif($vaksin2 && $vaksin3 && !$vaksin4){
                $request['vaksin_ke'] = 3;
                Vaksinasi::create($request->all());
            }
            elseif($vaksin2 && $vaksin3 && $vaksin4){
                $request['vaksin_ke'] = 4;
                Vaksinasi::create($request->all());
            }
            else{
                $request['vaksin_ke'] = 1;
                Vaksinasi::create($request->all());
            }
            return redirect()->to('/mvaksinasi')->with('success','Berhasil Menambah Data Vaksinasi');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vaksinasi $vaksinasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penduduk = Penduduk::all();
        $vaksin = Vaksin::all();
        $lokasi = Lokasi::all();
        $vaksinasi = Vaksinasi::where('id',$id)->first();
        return view('vaksinasi.edit',[
            'title' => 'Edit Vaksinasi'
        ],compact('vaksin','penduduk','lokasi'))->with('vaksinasi',$vaksinasi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'penduduk_id' => 'required',
            'lokasi_id' => 'required',
            'vaksin_id' => 'required',
        ]);
        Vaksinasi::where('id',$id)->update([
            'penduduk_id' => $request->penduduk_id,
            'lokasi_id' => $request->lokasi_id,
            'vaksin_id' => $request->vaksin_id,
        ]);
        return redirect()->to('/mvaksinasi')->with('success','Berhasil Update Data Vaksinasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vaksinasiDel = Vaksinasi::findOrFail($id);
        $vaksinasiDel->delete();
        return redirect()->to('/mvaksinasi')->with('success','Berhasil Hapus Data Vaksinasi');
    }
}
