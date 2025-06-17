<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller {

    public function index() {
        return view('datawisata', [
            'users' => Wisata::all(), 
            'title' => 'Data wisata'
        ]);
    }

    
    
    public function add() {
        return view('adddatawisata',[
            'title' => 'Tambah Data wisata'
        ]);
    }
    public function edit($id){
        
        $wisata = Wisata::where('id', $id)->first();

        return view('editdatawisata', [
            'wisata' => $wisata,
            'title' => 'Edit Data wisata'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_wisata     = $request->input('nama_wisata');
        $lokasi_wisata       = $request->input('lokasi_wisata');
        $kode_wisata   = $request->input('kode_wisata');
        $kategori_wisata = $request->input('kategori_wisata');
        
        $wisata = Wisata::where('id', $id)->first();
        $wisata->nama_wisata   = $nama_wisata;
        $wisata->lokasi_wisata     = $lokasi_wisata;
        $wisata->kode_wisata = $kode_wisata;
        $wisata->kategori_wisata = $kategori_wisata;

        $wisata->save();

        return redirect()->to('/wisata');
    }


    public function dashboard(){
        $wisata= Wisata::count();
        $totalWisata = Wisata::count();
        $recentWisata = Wisata::latest()->take(5)->get(); // ambil 5 wisata terbaru

        return view('main', compact('wisata', 'totalWisata', 'recentWisata'));

    }

    public function store(Request $request) {
        $nama_wisata = $request->input('nama_wisata');
        $lokasi_wisata = $request->input('lokasi_wisata');
        $kode_wisata = $request->input('kode_wisata');
        $kategori_wisata = $request->input('kategori_wisata');
        
        $wisata = new Wisata;
        $wisata->nama_wisata = $nama_wisata;
        $wisata->lokasi_wisata = $lokasi_wisata;
        $wisata->kode_wisata = $kode_wisata;
        $wisata->kategori_wisata = $kategori_wisata;

        $wisata->save();

        return redirect()->to('/wisata');
    }
    public function delete($id) {
        $wisata = Wisata::where('id', $id)->first();
        $wisata->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $wisata = Wisata::where('nama','berat_badan','tinggi_badan','stamina','event','kejuaraan','%',$request->search.'%')->get();
        }else{
            $wisata = Wisata::all();
        }
        return view('datawisata',['Wisata' => $wisata]);
    }
}
