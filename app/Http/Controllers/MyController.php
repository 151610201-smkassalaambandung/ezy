<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //pasing data basic
    public function percobaan()
    {
    	$a="Fauziah Rahmi";
    	return "Nama Saya Adalah ".$a;
    }
    //pasing data view
    public function percobaan2()
    {
    	return view('about');
    }
    //passing data variable to view
    public function percobaan3()
    {
    	$a="Fauziah Rahmi";
    	return view ('latihan.saya',compact('a'));
    }
    public function percobaan4()
    {
    	$a="Fauziah Rahmi";
    	$b="XI RPL 1";
    	$c="SMK Assalaam";
    	return view ('latihan.test',compact('a','b','c'));
    }
    public function percobaan5()
    {
    	$a=1;
    	$b=2;
    	$c=3;
    	return view ('seleksi',compact('a','b','c'));
    }
    //array dan pengulangan
    public function percobaan6()
    {
    	$no=70;
    	$buah=['Mangga','Jeruk','Apel','Anggur'];
    	return view ('buah',compact('no','buah'));
    }
     public function percobaan7()
    {
    	$buah=['Mangga','Jeruk','Apel','Anggur','Durian'];
    	$makhluk=['Gajah','Harimau','Kucing','cicak','katak'];
    	$komputer=['samsung','acer','asuz','lenovo','hp'];
    	return view ('latihan',compact('buah','makhluk','komputer'));
    }
    public function percobaan8($data,$data2 = null)
    {

    	$array= array('buah'=>['mangga'=>['import','local'],
                                'jeruk'=>['import','local'],
                                'apel'=>['import','local']],

                        'binatang'=>['gajah'=>['sumatra','jawa'],
                                    'harimau'=>['sumatra','jawa'],
                                    'kucing'=>['anggora','garong']],

                        'komputer'=>['samsung'=>['pc','monitor'],
                                    'acer'=>['pc','monitor'],
                                    'asus'=>['pc','monitor']]);

    	if ($data){
            $query = (array_keys($array[$data]));
        }
        if ($data2){
            $query = ($array[$data][$data2]);
        }
        return view ('parameter',compact('query','data','data2'));
    }
    
    


}
