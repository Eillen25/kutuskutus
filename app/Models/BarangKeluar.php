<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class BarangKeluar extends Model
{
    use HasFactory;
    // protected $primaryKey = 'nota_id';
    protected $table = "barang_keluar";
    protected $fillable = [
        "nota_id",
        "admin_id",
        "reseller_id",
        "tanggal",
        "total_harga_penjualan",
        "sudah_dibayar",
        "belum_dibayar",
        "jumlah_kutus"
        
    ];

    public function reseller()
    {
    	return $this->belongsTo('App\Models\Reseller', 'reseller_id');
   
    }

    public function admin()
    {
    	return $this->belongsTo('App\Models\Admin', 'admin_id');
   
    }
}
