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
	
	DB::table('tabelbuku')->where('id',$id)->delete();
		
	
	return redirect('/input');
}
public function edit($id)
{
	
	$tabelbuku = DB::table('tabelbuku')->where('id',$id)->get();
	
	return view('edit',['tabelbuku' => $tabelbuku]);
 
}
public function update(Request $request)
{
	
	DB::table('tabelbuku')->where('id',$request->id)->update([
		'id' => $request->id,
		'judul' => $request->judul,
		'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang' => $request->pengarang
	]);
	
	return redirect('/input');
}
    public function store(Request $request)
{
	
	DB::table('tabelbuku')->insert([
		'id' => $request->id,
		'judul' => $request->judul,
		'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang'=> $request->pengarang
	]);
	
	return redirect('/input');
 
}
}
