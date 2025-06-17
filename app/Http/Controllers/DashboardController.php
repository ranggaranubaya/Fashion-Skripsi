<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Wisata;


class DashboardController extends Controller {

    public function index() {
        
        $wisata= Wisata::count();
        $kriteria= Kriteria::count();
        $alternatif= Alternatif::count();
        

        return view('main',[
            'title' => 'Dashboard'
        ], compact('wisata','kriteria','alternatif'))
        ;   
    }

    public function dashboard(){
    $totalWisata = Wisata::count();
    $recentWisata = Wisata::latest()->take(5)->get(); // ambil 5 wisata terbaru

    return view('main', compact('totalWisata', 'recentWisata'));
}
    
}
