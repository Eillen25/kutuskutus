<?php

namespace App\Http\Controllers;
use Session;
use Alert;
use Mail;
use DB;
use DataTables;
use App\Models\Produk;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Reseller;
use App\Models\StockOpname;
use App\Models\Admin;
use Illuminate\Http\Request;



class BarangMasukController extends Controller
{
    public function edit($id){
        // echo "Halo Kamu ngakses Controller Awal pada function index";

        return view('Barang_Masuk.edit');
        // $incoming = BarangMasuk::all('invoice_id', 'total_harga', 'tanggal');
        // dd($incoming);
    }
}