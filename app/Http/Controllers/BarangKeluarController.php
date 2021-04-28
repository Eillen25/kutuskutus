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
use App\Models\DetailBarangKeluar;
use App\Models\Reseller;
use App\Models\StockOpname;
use App\Models\Admin;
use Illuminate\Http\Request;


class BarangKeluarController extends Controller
{
    //DEN TARUH BLADENYA DI SINI
    public function edit($id){
        // echo "Halo Kamu ngakses Controller Awal pada function index";
        $exit = BarangKeluar::query()
        ->where('nota_id', '=', $id)
        ->first();
        
        $detail = DetailBarangKeluar::where('nota_id', $id)->first();
        // dd($detail);
        return view('Barang_Keluar.edit', compact('exit','detail'));
        // $incoming = BarangMasuk::all('invoice_id', 'total_harga', 'tanggal');
        // dd($incoming);
    }
}
