<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table="tb_room";
    protected $fillable = ['id_room','penanggung_jawab','room_status','id_simaksi'];
}

?>