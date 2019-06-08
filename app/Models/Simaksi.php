<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Simaksi extends Model
{
    protected $table = "tb_simaksi";
    protected $fillable = ['id_simaksi','user_id'];
}

?>