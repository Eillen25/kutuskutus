<?php

namespace App\Http\Controllers;
use Session;
use Alert;
use Mail;
use DB;
use PDF;
use DataTables;
use App\Models\Produk;
use App\Models\BarangMasuk;
use App\Models\DetailBarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Reseller;
use App\Models\StockOpname;
use App\Models\Admin;
use Carbon\Carbon;

use Illuminate\Http\Request;



class BarangMasukController extends Controller
{
    
    public function addproduk(){
        
        $nota = DB::select('CALL ID_barangmasuk');
        $produk = Produk::all();
        
        return view('Barang_Masuk.tambah',compact('nota','produk'));
    }

    public function insert_incoming(Request $request){
        $data = $request->all();
        // dd($data);
        $invoice_id = $_POST['invoice_id'];
        $admin_id = Session::get('login');
        $tanggal = Carbon::parse($request->tanggal)->toDateString();
        $total = $_POST['total_seluruh'];
        $produk_id = $_POST['produk_id'];
        $jumlah = $_POST['jumlah'];
        $harga_satuan = $_POST['harga_satuan'];

        // INSERT BARANG MASUK
        $insert = DB::select(DB::raw("CALL insert_barangmasuk(:id_invo, :id_admin, :tanggal,  :total)"),[
            ':id_invo' => $invoice_id,
            ':id_admin' => $admin_id,
            ':tanggal' => $tanggal,
            ':total' => $total,
        ]);

        // INSERT DETAIL BARANG MASUK
        foreach ($data['produk_id'] as $index => $produk_id) {
            $insert_det = DB::select(DB::raw("CALL insert_detbarangmasuk(:id_invo, :id_prod, :jum, :harga)"),[
                ':id_invo' => $invoice_id,
                ':id_prod' => $produk_id,
                ':jum' => $data['jumlah'][$index],
                ':harga' => $data['harga_satuan'][$index],
            ]);
        }
        return redirect('/barangmasuk');
        
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

    public function detail_barangmasuk($id){
        $det = DetailBarangMasuk::where('invoice_id', $id)->get();
        $incoming = BarangMasuk::find($id);
        // dd($incoming);
        return view('Barang_Masuk.detail', compact('incoming','det'));
    }


    // KALAU CETAK INVOICE
    // public function cetak_pdf($id){
    //     $det = DetailBarangMasuk::where('invoice_id', $id)->get();
    //     $incoming = BarangMasuk::find($id);
    //     ini_set('max_execution_time', 300);
    //     $pdf = PDF::loadview('Barang_Masuk.detail_pdf', compact('incoming','det') );
    //     return $pdf->stream();
    //     }

    
}
