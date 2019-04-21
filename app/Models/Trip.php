<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = "tb_trip";
    protected $fillable = ['id_trip','id_destinasi','status_trip','tgl_mulai','tgl_selesai','id_checkpoint'];
}

?>