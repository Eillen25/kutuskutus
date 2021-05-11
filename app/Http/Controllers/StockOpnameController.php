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
use App\Models\Grade;

use Carbon\Carbon;



use Illuminate\Http\Request;

class StockOpnameController extends Controller
{
    public function add_so(){
        $id = DB::select('CALL ID_stockopname');
        $produk = Produk::all();
        
        return view('Stok_Opname.tambah', compact('id','produk'));
    }

    public function insert_so(Request $request){
        // dd($request->all());
        // dd($email);
        $id = Session::get('login');
        $tanggal = Carbon::parse($request->tanggal)->toDateString();
        $satuan = 'pcs';
        StockOpname::create([
            'opname_id'=>$request->input('opname_id'),
            'admin_id'=>$id,
            'produk_id'=>$request->input('produk'),
            'satuan_id'=>$satuan,
            'jumlah_sistem'=>$request->input('jumlah_sistem'),
            'jumlah_hitung'=>$request->input('jumlah_hitung'),
            'perbedaan'=>$request->input('perbedaan'),
            'alasan'=>$request->input('alasan'),
            'tanggal'=>$tanggal
            ]);

        return redirect('/stockopname');
    }

}
