<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
	//menampilkan semua record
    public function percobaan()
    {
    	$a = Siswa::all();
    	return view('siswa',compact('a'));
    }
    //menampilkan berdasarkan id
     public function percobaan1($id)
    {
    	$b = Siswa::find($id);
    	return $b;
    }

    
}
