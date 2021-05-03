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
    public function addexit(){
        $reseller = Reseller::all('reseller_id','nama_reseller');
        $produk = Produk::all();
        $id = Session::get('login');
        $admin = Admin::where('admin_id',$id)->first();
        $nota = DB::select('CALL ID_barangkeluar');
        // $nota = BarangKeluar::hydrate($query);
        // dd($nota);
        // $nota = collect($query);
        // dd($reseller,$produk,$admin);
        return view('Barang_Keluar.tambah', compact('reseller','produk','admin','nota'));
    }



    public function edit($id){
        // echo "Halo Kamu ngakses Controller Awal pada function index";
        $exit = BarangKeluar::query()
        ->where('nota_id', '=', $id)
        ->first();
        
        $detail = DetailBarangKeluar::where('nota_id', $id)->get();
        // diganti get karena ambilnya banyak bukan 1
        // dd($detail);
        return view('Barang_Keluar.edit', compact('exit','detail'));
        // $incoming = BarangMasuk::all('invoice_id', 'total_harga', 'tanggal');
        // dd($incoming);
    }

    public function update_exit(Request $request){
        $id = $_POST['nota_id'];
        BarangKeluar::where('nota_id',$id)->update([
            'total_harga_penjualan'=> $request->input('total_harga_penjualan'), 
            'sudah_dibayar'=>$request->input('sudah_dibayar'), 
            'belum_dibayar'=>$request->input('belum_dibayar')

        ]);

        return redirect('/barangkeluar');;
    }

    public function detailbarangkeluar(){


        return view('Barang_Keluar.detail');
    }

    public function destroy($id)
    {
        BarangKeluar::where('nota_id',$id)->delete();
        // kalau pakai restore dibalikin
        return redirect('/barangkeluar');
        
    }

}
