<?php

namespace App\Http\Controllers;
use Session;
use Alert;
use Mail;
use DB;
use DataTables;
use App\Models\Produk;
use App\Models\BarangMasuk;
use App\Models\DetailBarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Reseller;
use App\Models\StockOpname;
use App\Models\Admin;

use Illuminate\Http\Request;



class BarangMasukController extends Controller
{

    public function addproduk(){

        $nota = DB::select('CALL ID_barangmasuk');
        $produk = Produk::all();

        return view('Barang_Masuk.tambah',compact('nota','produk'));
    }

    public function edit($id){
        // echo "Halo Kamu ngakses Controller Awal pada function index";
        // dd($id);
        $incoming = BarangMasuk::where('invoice_id', $id)->first();
        $detail = DetailBarangMasuk::where('invoice_id', $id)->first();
        // dd($detail);
        return view('Barang_Masuk.edit', compact('incoming','detail'));
        // $incoming = BarangMasuk::all('invoice_id', 'total_harga', 'tanggal');
        // dd($incoming);
    }

    public function detailbarangmasuk(){


        return view('Barang_Masuk.detail');
    }

}
