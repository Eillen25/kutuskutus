<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Reseller extends Model
{
    use HasFactory;
    protected $primaryKey = 'reseller_id';
    protected $table = "reseller";
    protected $fillable = [
        "reseller_id",
        "nama_reseller",
        "alamat",
        "total_kutus",
        "tanggal_kutus",
        "grade_id",
        "status_del"
    ];
}
