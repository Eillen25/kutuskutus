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
        $tanggal = Carbon::createFromFormat('d/m/Y', $request->tanggal)->toDateString();
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
                ':harga' => $data['harga_satuan'][$index]
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

    public function combo_box() {
        return view('Barang_Masuk.laporan');
    }

    public function preview_laporan_bulan(Request $request) {
        setlocale(LC_TIME, 'IND');  // or setlocale(LC_TIME, 'id_ID');

        $month = $_POST['month'];
        // dd($month);
        $monthName = date("F", mktime(0, 0, 0, $month, 10));
        
        // dd($monthName);

        $res = DB::select('SELECT p.nama_produk, SUM(dbm.jumlah*harga) AS total, SUM(dbm.jumlah) AS jumlah
        FROM barang_masuk AS bm, detail_barang_masuk AS dbm, produk AS p
        WHERE EXTRACT(MONTH FROM tanggal) ='.$month.' AND bm.invoice_id = dbm.invoice_id AND dbm.produk_id = p.produk_id
        GROUP BY dbm.produk_id');

        $total = DB::select('SELECT SUM(total) AS total_semua
        FROM (SELECT produk_id, SUM(dbm.jumlah*harga) AS total
        FROM barang_masuk AS bm, detail_barang_masuk AS dbm
        WHERE EXTRACT(MONTH FROM tanggal) = '.$month.' AND bm.invoice_id = dbm.invoice_id
        GROUP BY dbm.produk_id) a
        ');
        // dd($res,$total);
        return view('Barang_Masuk.preview_detail_pdf', compact('monthName','res','total','month'));

       
    }

    public function laporan_bulan(Request $request) {
        $month = $_POST['month'];
        // dd($month);

        $monthName = date("F", mktime(0, 0, 0, $month, 10));
        
        // dd($monthName);

        $res = DB::select('SELECT p.nama_produk, SUM(dbm.jumlah*harga) AS total, SUM(dbm.jumlah) AS jumlah
        FROM barang_masuk AS bm, detail_barang_masuk AS dbm, produk AS p
        WHERE EXTRACT(MONTH FROM tanggal) ='.$month.' AND bm.invoice_id = dbm.invoice_id AND dbm.produk_id = p.produk_id
        GROUP BY dbm.produk_id');

        $total = DB::select('SELECT SUM(total) AS total_semua
        FROM (SELECT produk_id, SUM(dbm.jumlah*harga) AS total
        FROM barang_masuk AS bm, detail_barang_masuk AS dbm
        WHERE EXTRACT(MONTH FROM tanggal) = '.$month.' AND bm.invoice_id = dbm.invoice_id
        GROUP BY dbm.produk_id) a
        ');
        // dd($res,$total);
       
        ini_set('max_execution_time', 300);
        $pdf = PDF::loadview('Barang_Masuk.detail_pdf', compact('res','total','monthName') );
        return $pdf->stream();
      

       
    }

   

    public function combo_box_tahun() {
        $tahun = DB::select('SELECT EXTRACT(YEAR FROM tanggal) AS year
        FROM barang_masuk
        GROUP BY year
        ');
        // dd($tahun);
        return view('Barang_Masuk.laporan_tahun',compact('tahun'));
    }

    public function preview_laporan_tahun(Request $request) {
        $year = $_POST['year'];
        $res = DB::select('SELECT p.produk_id, p.nama_produk, SUM(dbm.jumlah*harga) AS total, SUM(dbm.jumlah) AS jumlah
        FROM barang_masuk AS bm, detail_barang_masuk AS dbm, produk p
        WHERE EXTRACT(YEAR FROM tanggal) = '.$year.' AND bm.invoice_id = dbm.invoice_id AND dbm.produk_id = p.produk_id
        GROUP BY dbm.produk_id
        ');
        // dd($res);
        $total = DB::select('SELECT SUM(total) AS total_semua
        FROM (SELECT produk_id, SUM(dbm.jumlah*harga) AS total
        FROM barang_masuk AS bm, detail_barang_masuk AS dbm
        WHERE EXTRACT(YEAR FROM tanggal) = '.$year.' AND bm.invoice_id = dbm.invoice_id
        GROUP BY dbm.produk_id) a
        ');
        // dd($res,$total);
       
        return view('Barang_Masuk.preview_detail_tahun_pdf', compact('year','res','total'));
      

       
    }

    public function laporan_tahun(Request $request) {
        $year = $_POST['year'];
        $res = DB::select('SELECT p.produk_id, p.nama_produk, SUM(dbm.jumlah*harga) AS total, SUM(dbm.jumlah) AS jumlah
        FROM barang_masuk AS bm, detail_barang_masuk AS dbm, produk p
        WHERE EXTRACT(YEAR FROM tanggal) = '.$year.' AND bm.invoice_id = dbm.invoice_id AND dbm.produk_id = p.produk_id
        GROUP BY dbm.produk_id
        ');
        // dd($res);
        $total = DB::select('SELECT SUM(total) AS total_semua
        FROM (SELECT produk_id, SUM(dbm.jumlah*harga) AS total
        FROM barang_masuk AS bm, detail_barang_masuk AS dbm
        WHERE EXTRACT(YEAR FROM tanggal) = '.$year.' AND bm.invoice_id = dbm.invoice_id
        GROUP BY dbm.produk_id) a
        ');
        // dd($res,$total);
       
        ini_set('max_execution_time', 300);
        $pdf = PDF::loadview('Barang_Masuk.detail_tahun_pdf', compact('res','total','year') );
        return $pdf->stream();
      

       
    }
   


}
