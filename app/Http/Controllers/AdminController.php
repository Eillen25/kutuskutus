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
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_admin(){
    

        return view('Admin.tambah');
    }

    public function insert_admin(Request $request){
        // dd($request->all());
        $password = md5($_POST['password']);
        $akses = 1;
        // dd($password);
        Admin::create([
            'admin_id'=>$request->input('admin_id'),
            'nama_admin'=>$request->input('nama_admin'),
            'password'=>$password,
            'gaji'=>$request->input('gaji'),
            'nomor_telepon'=>$request->input('nomor_telepon'),
            'email'=>$request->input('email'),
            'email'=>$akses,
            'alamat'=>$request->input('alamat')
            ]);

        return redirect('/admin');
    }

    public function admin_edit($id){

        $admin = Admin::find($id);

        return view('Admin.edit', compact('admin'));
    }



}
