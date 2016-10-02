<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Admin Area";
        return view('admin.home')->with('title',$title);
    }
    public function addPorduk(){
      $title = "Tambah Produk";
        return view('admin.produk.add')->with('title',$title);
    }

}
