<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class StockOpname extends Model
{
    use HasFactory;
    // protected $primaryKey = 'opname_id'; kalau kayak gini jadinya 0
    protected $table = "stock_opname";
    protected $fillable = [
        "opname_id",
        "satuan_id",
        "jumlah_sistem",
        "jumlah_hitung",
        "perbedaan",
        "alasan",
        "tanggal",
        "status_del"
    ];

    public function admin()
    {
    	return $this->belongsTo('App\Models\Admin', 'admin_id');
   
    }

    public function produk()
    {
    	return $this->belongsTo('App\Models\Produk', 'produk_id');
   
    }
}
