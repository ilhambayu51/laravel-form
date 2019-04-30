<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bukuController extends Controller
{
    public function perpus()
    {
        $tabelbuku=DB::table('tabelbuku')->get();

        return view ('input',['tabelbuku'=>$tabelbuku]);
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('tabelbuku')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/input');
}
    public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('tabelbuku')->insert([
		'id' => $request->id,
		'judul' => $request->judul,
		'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang'=> $request->pengarang
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/input');
 
}
}
