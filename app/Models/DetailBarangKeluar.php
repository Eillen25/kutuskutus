<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class DetailBarangKeluar extends Model
{
    use HasFactory;
    

    protected $table = "detail_barang_keluar";
    protected $fillable = [
        "nota_id",
        "produk_id",
        "jumlah",
        "satuan_id",
        "harga_satuan"
        
    ];

    public function produk()
    {
    	return $this->belongsTo('App\Models\Produk', 'produk_id');
   
    }
}
