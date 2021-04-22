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

    public function isExist($data){
        // ini yg bener
        // $cmd = "SELECT count(*) is_exist ".
        //         "FROM ".$this->tabel_terpilih." ".
        //         "WHERE username=:username AND password=sha1(:password);";

        $cmd = "SELECT count(*) is_exist 
                FROM admin 
                WHERE admin_id=:username AND password=:password;";

        $res = DB::select($cmd,$data);
        // dd($res);
        if($res[0]->is_exist == 1){
            return true;
        }
        return false;

        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }
}
