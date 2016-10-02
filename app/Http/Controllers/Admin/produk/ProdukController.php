<?php

namespace App\Http\Controllers\Admin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $title = "Product Manage";
       return view('admin.produk.index')->with('title',$title);
    }
    public function addProduk(){
      $title = "Tambah Produk";
        return view('admin.produk.add')->with('title',$title);
    }
    public function edit($ids){
      $title = $ids;
        return view('admin.produk.add')->with('title',$title);
    }

}
