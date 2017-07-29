<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\anak;

class Mycontroller extends Controller
{
    //
    public function index()
    {
    	$a = "Risma Widianti";
    	return "Nama Saya Adalah <br>".$a."</br>";
    }
    public function tampilan()
    {
    	return view('about');
    }
     public function tampilanmodel()
    {
    	$ortu = orangtua::all();
    	$anak = anak::all();
    	return view('about',compact('ortu','anak'));
    }
}