<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $table="tb_destinasi";
    protected $fillable = ['id','nama_destinasi','lokasi_destinasi','harga_destinasi','persyaratan','deskripsi','ketinggian'];
}
