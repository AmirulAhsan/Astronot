<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AsrtronotController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel astronot
        $astronot= DB::table('astronot')->get();

        // mengirim ke halaman astronot untuk ditampilkan data
        return view('dataastronot',['astronot'=>$astronot]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('astronot')->insert([           
            'id' => $request->id,
            'nama' => $request->nama,
            'negara' => $request->negara,
            'tahun' => $request->tahun,
            'roket' => $request->roket
        ]);

        return redirect('/tampildata');
    }

    public function edit($id)
    {
        #ambil data astronot berdasarkan id
        $astronot = DB::table('astronot')->where('id', $id)->get();

        #passing data
        return view('edit', ['astronot' => $astronot]);
    }

    public function update(Request $request)
    {
        DB::table('astronot')->insert([           
            'id' => $request->id,
            'nama' => $request->nama,
            'negara' => $request->negara,
            'tahun' => $request->tahun,
            'roket' => $request->roket
        ]);

        return redirect('/tampildata');
    }

    public function hapus($id)
    {
        DB::table('astronot')->where('id', $id)->delete();
        return redirect('/tampildata');
    }

}