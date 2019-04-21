<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatT extends Model
{
    protected $table="tb_riwayat_transaksi";
    protected $fillable = ['id_riwayat_transaksi','user_id','status_transaksi','batas_bayar','id_transaksi','id_trip'];
    
}

?>