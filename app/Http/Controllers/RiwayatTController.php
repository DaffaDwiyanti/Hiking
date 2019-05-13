<?php
namespace App\Http\Controllers;

use App\Models\RiwayatT;
use Illuminate\Http\Request;

class RiwayatTController extends Controller
{
    public function tampil(){
        return RiwayatT::all();
        
    }

    public function tampilSendiri($id){
        $RiwayatT = RiwayatT::find($id);
        if (!$RiwayatT) {
            return response()->json(['message'=>'Data tidak ditemukan']);
        }
        return $RiwayatT;
    }

    public function tambah(Request $request){
        $this->validate($request,[
            'id_riwayat_transaksi'=>'required', 
            'user_id'=>'required', 
            'status_transaksi'=>'required', 
            'batas_bayar'=>'required', 
            'id_transaksi'=>'required', 
            'id_trip'=>'required']);
        return RiwayatT::create($request->all());
    }

    public function hapus($id){
        $RiwayatT = RiwayatT::find($id);
        if ($RiwayatT) {
            $RiwayatT->delete();
            return response()->json(['message'=>'Berhasil Dihapus']);
        }
        return response()->json(['message'=>'Data Gagal Terhapus']);
    }

    public function update(Request $request, $id){
        $RiwayatT = RiwayatT::find($id);
        if ($RiwayatT) {
            $RiwayatT->update($request->all());
            return response()->json(['message'=>'Data Berhasil Terupdate']);
        }
        return response()->json(['message'=>'Data gagal Terupdate']);
    }
    
}
