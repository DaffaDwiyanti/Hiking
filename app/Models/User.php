<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "tb_user";
    protected $fillable = ['user_id','nama_user','notlp','email','alamat','nik','role'];
    
}

?>