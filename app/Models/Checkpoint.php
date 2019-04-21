<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkpoint extends Model{
    protected $table = "tb_checkpoint";
    protected $fillable =['id_checkpoint','titik_checkpoint','detail'];
}
?>