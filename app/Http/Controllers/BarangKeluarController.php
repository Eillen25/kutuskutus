<?php

namespace App\Http\Controllers;
use Session;
use Alert;
use Mail;
use DB;
use DataTables;
use PDF;
use App\Models\Produk;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\DetailBarangKeluar;
use App\Models\Reseller;
use App\Models\StockOpname;
use App\Models\Admin;
use  App\Models\Grade;
use Illuminate\Http\Request;
use Carbon\Carbon;


class BarangKeluarController extends Controller
{
    //DEN TARUH BLADENYA DI SINI
    public function addexit(){
        $reseller = Reseller::all();
        $produk = Produk::all();
        // dd($produk);

        $id = Session::get('login');
        $admin = Admin::where('admin_id',$id)->first();
        $nota = DB::select('CALL ID_barangkeluar');
        $grade = Grade::all();
        // $nota = BarangKeluar::hydrate($query);
        // dd($nota);
        // $nota = collect($query);
        // dd($reseller,$produk,$admin);
        // dd($reseller->grade->jenis_grade);
        return view('Barang_Keluar.tambah', compact('reseller','produk','admin','nota','grade'));
    }

    public function calexit(Request $request){
        // return $request->all();
                $cal = Grade::where([
                'grade_id' =>$request->grade_id,
                'produk_id' =>$request->produk_id
            ])
            ->firstOrFail();
        
        return $cal;
    }

    public function insert_exit(Request $request){
        $data = $request->all();
        $data['produk_id'] = array_filter($data['produk_id']);
        $data['jumlah'] = array_filter($data['jumlah']);
        $data['harga_diskon'] = array_filter($data['harga_diskon']);
        $data['total_harga_penjualan'] = array_filter($data['total_harga_penjualan']);
        
        // dd($data);
        $nota_id = $_POST['nota_id'];
        $admin_id = Session::get('login');
        $tanggal = Carbon::parse($request->tanggal)->toDateString();
        $res = $_POST['reseller_id'];
        $reseller_id = substr($res,0, strpos($res, "|"));
        $jumlah = $_POST['jumlah'];
        $jumlah_kutus = 0;
        // dd($reseller_id);
        $subtotal = $_POST['total_harga_penjualan'];
        $total = 0;
            foreach($subtotal as $s){
             
                    $total += (int)$s;
              
            };
        $produk_id = $_POST['produk_id'];
        // dd($produk_id);
        $harga_satuan = $_POST['harga_satuan'];
        // dd($reseller_id);
        // dd($total);
        // dd($jumlah);
        // BUAT IF UNTUK JUMLAH KUTUS
        // dd($produk_id);
        foreach($data['produk_id'] as $p => $produk_id){
            if($produk_id == 'MUS1'){
                $jumlah_kutus += $jumlah[$p];
            }
            else{
                $jumlah_kutus += 0;
            };
        };  

        // INSERT PERTAMA KE BARANG KELUAR
         $insert = DB::select(DB::raw("CALL insert_barangkeluar(:id_nota, :id_admin, :tanggal, :id_res, :total,  :jum_kut)"),[
            ':id_nota' => $nota_id,
            ':id_admin' => $admin_id,
            ':tanggal' => $tanggal,
            ':id_res' => $reseller_id,
            ':total' => $total,
            ':jum_kut' => $jumlah_kutus
            
        ]);
        foreach ($data['produk_id'] as $index => $produk_id) {
            $insert_det = DB::select(DB::raw("CALL insert_detbarangkeluar(:id_nota, :id_prod, :jum, :harga)"),[
                ':id_nota' => $nota_id,
                ':id_prod' => $produk_id,
                ':jum' => $data['jumlah'][$index],
                ':harga' => $data['harga_diskon'][$index],
            ]);
        }
        // INSERT KEDUA KE DETAIL BARANG KELUAR
        // foreach(array($jumlah) as $j){
        //     if(!is_null($j)){
        //         $insert_det = DB::select(DB::raw("CALL insert_detbarangkeluar(:id_nota, :id_prod, :jum, :harga)"),[
        //             ':id_nota' => $nota_id,
        //             ':id_prod' =>$produk_id[$j],
        //             ':jum' => $jumlah[$j],
        //             ':harga' => $harga_satuan[$j],
                    
                    
        //         ]);
        //     }
        // }
        return redirect('/barangkeluar/edit/'.$nota_id);
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

        return redirect('/barangkeluar');
    }

    public function detailbarangkeluar($id){
        // dd($id);
        $det = DetailBarangKeluar::where('nota_id', $id)->get();
        $exit = BarangKeluar::find($id);
        // dd($exit);

        return view('Barang_Keluar.detail', compact('det','exit'));
    }

    public function cetak_pdf($id){
        $det = DetailBarangKeluar::where('nota_id', $id)->get();
        $exit = BarangKeluar::find($id);
        ini_set('max_execution_time', 300);
        $pdf = PDF::loadview('Barang_Keluar.detail_pdf', compact('det','exit') );
        return $pdf->stream();
    }


    public function destroy($id)
    {
        BarangKeluar::where('nota_id',$id)->delete();
        DetailBarangKeluar::where('nota_id',$id)->delete();
        // kalau pakai restore dibalikin
        return redirect('/barangkeluar');
        
    }

  

}
