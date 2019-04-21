<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Models;

class Transaksi extends Model
{
    protected $table = "tb_transaksi";
    protected $fillable = ['id_transaksi','tgl_transaksi','id_trip','total_bayar','id_riwayat_transaksi'];
}

?>