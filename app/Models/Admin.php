<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'admin_id';
    protected $table = "admin";
    protected $fillable = [
        "admin_id",
        "nama_admin",
        "password",
        "gaji",
        "alamat",
        "nomor_telepon",
        "akses_id",
        "status_del"
    ];
}
