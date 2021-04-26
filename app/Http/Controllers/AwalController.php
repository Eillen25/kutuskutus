<?php

namespace App\Http\Controllers;
use Alert;


use App\Models\Produk;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Reseller;
use App\Models\StockOpname;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Mail as Mail;
use Illuminate\Support\Facades\Session as Session;
use Yajra\DataTables\Facades\DataTables as DataTables;

//use Yajra\DataTables\DataTables;
//use Yajra\DataTables\Facades\DataTables as DataTables;

class AwalController extends Controller
{
    public function home(){
        // echo "Halo Kamu ngakses Controller Awal pada function index";
        $results = Produk::select('*',
        DB::raw('(CASE 
            WHEN jumlah_stok <= "200" THEN "Stok Menipis"
            WHEN jumlah_stok = "0" THEN "Tidak Tersedia"
            ELSE "Tersedia" 
            END) AS status'))
        ->get();
        return view('dashboard', compact('results'));
     
    }

    // DATATABLE
    // public function dashboard(){
    //     $results = Produk::select('*',
    //     \DB::raw('(CASE 
    //         WHEN jumlah_stok <= "200" THEN "Stok Menipis"
    //         WHEN jumlah_stok = "0" THEN "Tidak Tersedia"
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
            $button .= '<a class="btn btn-success btn-sm"  href="/barangmasuk/detail/' . $incoming->invoice_id. '")"><i class="far fa-eye"></i></a>';
            $button .= '<a class="btn btn-warning btn-sm"   style="margin: 0 10px" href="/barangmasuk/edit/' . $incoming->invoice_id . '")"><i class="fas fa-edit"></i></a>';
            $button .= '<a class="btn btn-danger btn-sm" href="/barangmasuk/destroy/' . $incoming->invoice_id . '")"><i class="far fa-trash-alt"></i></a>';
            $button .= '<button type="submit"  class="donate_now btn btn-default-border-blk generalDonation" data-toggle="modal"  data-backdrop="static" data-keyboard="false" data-target="#myModalHorizontal">donate now</button>';
            $button .= '</div>';
            return $button;
        })
        ->make(true);
    }

    public function exit(){


        return view('barangkeluar');
        
    }

    public function exit_json(){
        $exit = BarangKeluar::query();
        // dd($results);
        
        return DataTables::eloquent($exit)
        ->addColumn('action', function ($exit) {
            $button ='<div style="display: flex;  ">';
            $button .= '<a class="btn btn-success btn-sm"  href="/barangkeluar/detail/{id}' . $exit->nota_id. '")"><i class="far fa-eye"></i></a>';
            $button .= '<a class="btn btn-warning btn-sm" style="margin: 0 10px" "href="/barangkeluar/edit/{id}' . $exit->nota_id . '")"><i class="fas fa-edit"></i></a>';
            $button .= '<a class="btn btn-danger btn-sm" href="/barangmasuk/keluar/{id}' . $exit->nota_id . '")"><i class="far fa-trash-alt"></i></a>';
            $button .= '</div>';
            return $button;
        })
        ->addColumn('nama_reseller',function($exit){
            return $exit->reseller->nama_reseller;
        })
        ->make(true);
    }

    public function produk(){


        return view('produk');
        // $incoming = BarangMasuk::all('invoice_id', 'total_harga', 'tanggal');
        // dd($incoming);
    }
    // DATATABLE
    public function produk_json(){
        $produk = Produk::query();
        // dd($results);
        
        return DataTables::eloquent($produk)
        ->addColumn('action', function ($produk) {
            $button ='<div style="display: flex;  ">';
            // $button .= '<a class="btn btn-success btn-sm"  href="/produk/detail/{id}' . $produk->produk_id. '")">Detail</a>';
            $button .= '<a class="btn btn-warning btn-sm" style="margin: 0 10px" "href="/produk/edit/{id}' .  $produk->produk_id . '")"><i class="fas fa-edit"></i></a>';
            $button .= '<a class="btn btn-danger btn-sm" href="/produk/destroy/{id}' . $produk->produk_id . '")"><i class="far fa-trash-alt"></i></a>';
            $button .= '</div>';
            return $button;
        })
        ->make(true);
    }

    public function reseller(){


        return view('reseller');
        
    }

    public function reseller_json(){
        $res = Reseller::query();
        // dd($results);
        
        return DataTables::eloquent($res)
        ->addColumn('action', function ($res) {
            $button ='<div style="display: flex;  ">';
            // $button .= '<a class="btn btn-success btn-sm"  href="/reseller/detail/{id}' . $res->reseller_id. '")">Detail</a>';
            $button .= '<a class="btn btn-warning btn-sm" style="margin: 0 10px" "href="/reseller/edit/{id}' . $res->reseller_id . '")"><i class="fas fa-edit"></i></a>';
            $button .= '<a class="btn btn-danger btn-sm" href="/reseller/destroy/{id}' . $res->reseller_id . '")"><i class="far fa-trash-alt"></i></a>';
            $button .= '</div>';
            return $button;
        })
        ->addColumn('jenis_grade',function($res){
            return $res->grade->jenis_grade;
        })
        ->make(true);
    }

    public function sopname(){


        return view('stockopname');
        // $incoming = BarangMasuk::all('invoice_id', 'total_harga', 'tanggal');
        // dd($incoming);
    }
    // DATATABLE
    public function sopname_json(){
        $sopname = StockOpname::query();
        // dd($results);
        
        return DataTables::eloquent($sopname)
        ->addColumn('action', function ($sopname) {
            $button ='<div style="display: flex;  ">';
            // $button .= '<a class="btn btn-success btn-sm"  href="/produk/detail/{id}' . $produk->produk_id. '")">Detail</a>';
            $button .= '<a class="btn btn-danger btn-sm" href="/stockopname/destroy/{id}' . $sopname->opname_id . '")"><i class="far fa-trash-alt"></i></a>';
            $button .= '</div>';
            return $button;
        })
        ->addColumn('nama_admin',function($sopname){
            return $sopname->admin->nama_admin;
        })
        ->addColumn('nama_produk',function($sopname){
            return $sopname->produk->nama_produk;
        })
        ->make(true);
        // dd($results);
    }

    public function admin(){


        return view('admin');
        // $incoming = BarangMasuk::all('invoice_id', 'total_harga', 'tanggal');
        // dd($incoming);
    }

    public function admin_json(){
        $admin = Admin::query();
        // dd($results);
        
        return DataTables::eloquent($admin)
        ->addColumn('action', function ($admin) {
            $button ='<div style="display: flex;  ">';
            // $button .= '<a class="btn btn-success btn-sm"  href="/produk/detail/{id}' . $produk->produk_id. '")">Detail</a>';
            $button .= '<a class="btn btn-warning btn-sm" style="margin: 0 10px" "href="/admin/edit/{id}' .  $admin->admin_id . '")"><i class="fas fa-edit"></i></a>';
            $button .= '<a class="btn btn-danger btn-sm" href="/admin/destroy/{id}' . $admin->admin_id . '")"><i class="far fa-trash-alt"></i></a>';
            $button .= '</div>';
            return $button;
        })
        ->make(true);
        // dd($results);
    }

    public function exit2(){


        return view('Barang_Keluar.edit');
        // $incoming = BarangMasuk::all('invoice_id', 'total_harga', 'tanggal');
        // dd($incoming);
    }
    
    public function profile(){


        return view('profile');
    }
    public function login(){


        return view('login');
    }
    

    //authentication
    public function authentication(Request $req){
        //1. Get INPUT
        $username = $req->input('username');
        $pass    = $req->input('password');

        $data = [
            'username' => $username,
            'password' => $pass
        ];

        //2. Check Username dan Password ke database
        $usr = new Admin();

        $flag_exist = $usr->isExist($data);
        
        // die;
        if ($flag_exist){
            //2.a. Jika KETEMU, maka session LOGIN dibuat
           Session::put('login', $username);
            Session::put('pass', $pass);

           

            Session::flash('success', 'Anda berhasil Login!');

            return redirect('/home');
        } else {
            //2.b. Jika TIDKA KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Username dan Password tidak sesuai!');
            return redirect('/login');
        }
    }



    // FORGOT PASSWORD BELUM ADA QUERY UNTUK CEK EMAIL
    public function forgot_pass(Request $request){
        $this->validate($request, [
            'email'  =>  'required|email'
           ]);
        // $berhasil= 0;
        $data = array(
                'email'  => $request->input('email')
            );
        $email = $_POST['email'];
        $isExist = Admin::select("*")
                        ->where("email", $email)
                        ->exists();
        // UPDATE PASSWORD JADI 123
        Admin::where('email',$email)->update(['password'=>'1234']);
        // BARU KIRIM KE EMAIL ADMIN
        if ($isExist) {
            // dd('Record is available.');
            try{
                    Mail::send('email_sandi',$data, function($data) use($request){
                        $data->to($request->email,'Verifikasi')->subject('Verifikasi Sandi');
                        $data->from(env('MAIL_USERNAME','masakyukgan@gmail.com'),'Verifikasi Sandi anda');
                        
                        // dd($data->to('masakyukgan@gmail.com','Verifikasi')->subject('Verifikasi Email'));
                    });
            }catch (Exception $e){
                    return response (['status' => false,'errors' => $e->getMessage()]);
            }
        }else{
            dd('Record is not available.');
        }


        return redirect('/login');
        
    }


    public function produkedit(){


        return view('Produk.edit');
    }
    public function reselleredit(){


        return view('Reseller.edit');
    }

    public function adminedit(){


        return view('Admin.edit');
    }

    public function incoming2(){


        return view('Barang_Masuk.edit');
    }

    public function detailbarangkeluar(){


        return view('Barang_Keluar.detail');
    }

    public function detailbarangmasuk(){


        return view('Barang_Masuk.detail');
    }

    public function about(){


        return view('about');
    }

    public function deleteincoming(){


        return view('Barang_Masuk.delete');
    }
}

