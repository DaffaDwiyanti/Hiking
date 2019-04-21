<?php 
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class TripDetail extends Model
{
    protected $table = "tb_tripDetail";
    protected $fillable = ['id_room','user_id','id_trip']
}

?>