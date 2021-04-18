<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Produk extends Model
{
    use HasFactory;
    protected $primaryKey = 'produk_id';
    protected $table = "produk";
    protected $fillable = [
        "produk_id",
        "nama_produk",
        "jumlah_stok",
        "satuan_id",
        "harga_modal",
        "harga_jual",
        "status_del"
    ];
}
