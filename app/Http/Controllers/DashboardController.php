<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Penduduk;
use App\Models\Vaksin;
use App\Models\Vaksinasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $vaksin = Vaksin::count();
        $vaksinasi = Vaksinasi::count();
        $penduduk = Penduduk::count();
        $lokasi = Lokasi::count();
        return view('dashboard',[
            'title' => 'Dashboard'
        ],compact('vaksinasi','vaksin','penduduk','lokasi'));
    }
}
