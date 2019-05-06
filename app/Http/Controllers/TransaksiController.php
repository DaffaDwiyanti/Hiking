<?php 
namespace App\Http\Controller;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function tampil(){
        return Transaksi::all();
    }
    public function tampilSendiri($id){
        $Transaksi = Transaksi::find($id);
        if (!$Transaksi) {
            return response()->json(['message'=>'Data Tidak ditemukan']);
        }
        return $Transaksi;
    }
    public function tambah(Request $request){
        $this->validate($request, ['id_transaksi'=>'required', 
        'tgl_transaksi'=>'required', 
        'id_trip'=>'required', 
        'total_bayar'=>'required', 
        'id_riwayat_transaksi'=>'required']);
        Transaksi::create($request->all());

    }

    public function hapus($id){
        $Transaksi = Transaksi::find($id);
        if ($Transaksi) {
            $Transaksi->update($request->all());
            return response()->json(['message'=>'Data Berhasil Terupdate']);
        }
        return response()->json(['message'=>'Data Gagal Terupdate']);
    }
}

?>