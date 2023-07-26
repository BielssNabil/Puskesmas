<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\DaftarPasien;
class DaftarController extends Controller
{
    //method untuk tampil data antrian
    public function search(Request $request)
    {
        $search = $request->search;

        $getdata = DB::table('tb_antrian')
        ->where('nama','like',"%". $search."%")
        ->get();

        return view('daftar',['daftarAntrian'=>$getdata]);
    }

    //method untuk tampil data antrian
    public function antriantampil()
    {
        $daftarpasien = DaftarPasien::all();
        // $daftarpasien = DaftarPasien::find($search);

        return view('daftar',['daftarAntrian'=>$daftarpasien, 'title'=>"Daftar"]);
    }

    //method untuk tambah data antrian
    public function daftartambah(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        DaftarPasien::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        return redirect('/daftar');
    }

    //method untuk hapus data antrian
    public function daftarhapus($nik)
    {
        $datapinjam=DaftarPasien::find($nik);
        $datapinjam->delete();

        return redirect()->back();
    }

    //method untuk edit data antrian
    public function daftaredit($nik, Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        
       $p = DaftarPasien::find($nik);
       $p->nik = $request->nik;
       $p->nama = $request->nama;
       $p->alamat = $request->alamat;

       $p->save();

        return redirect('/daftar');
    }
}
