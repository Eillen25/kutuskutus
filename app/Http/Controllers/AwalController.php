<?php

namespace App\Http\Controllers;
use Session;
use Alert;
use Mail;
use DB;
use DataTables;
use App\Models\Produk;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function home(){
        // echo "Halo Kamu ngakses Controller Awal pada function index";

        return view('dashboard');
     
    }

    // DATATABLE
    // public function json(){
    //     $results = Produk::select('*',
    //     \DB::raw('(CASE 
    //         WHEN jumlah_stok < "3" THEN "Tidak Tersedia"
    //         ELSE "Tersedia" 
    //         END) AS status'))
    //     ->get();
    //     // dd($results);
                        
    //     return Datatables::of($results)->make(true);
    // }


    public function incoming(){
        // echo "Halo Kamu ngakses Controller Awal pada function index";

        return view('barangmasuk');
        // $incoming = BarangMasuk::all('invoice_id', 'total_harga', 'tanggal');
        // dd($incoming);
    }
    // DATATABLE
    public function json(){
        $incoming = BarangMasuk::query('invoice_id', 'total_harga', 'tanggal');
        // dd($results);
        
        return DataTables::eloquent($incoming)
        ->addColumn('action', function ($incoming) {
            $button ='<div style="display: flex;  ">';
            // <a class="btn btn-warning btn-sm btn-group" href="/admin/beasiswa/edit" )">Detail</a>
            $button .= '<a class="btn btn-success btn-sm"  href="/barangmasuk/detail/{id}' . $incoming->invoice_id. '")">Detail</a>';
            $button .= '<a class="btn btn-warning btn-sm" style="margin: 0 10px" "href="/barangmasuk/edit/{id}' . $incoming->invoice_id . '")">Edit</a>';
            $button .= '<a class="btn btn-danger btn-sm" href="/barangmasuk/destroy/{id}' . $incoming->invoice_id . '")">Hapus</a>';
            $button .= '</div>';
            return $button;
        })
        ->make(true);
    }
}
