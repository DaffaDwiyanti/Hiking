<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $table="tb_destinasi";
    protected $fillable = ['id_destinasi','nama_destinasi','lokasi_destinasi','harga_destinasi','persyaratan','deskripsi','ketinggian'];
}
