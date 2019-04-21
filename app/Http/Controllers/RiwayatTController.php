<?php
namespace App\Http\Controller;

use App\Model\Models\RiwayatT;
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
            'id_destinasi'=>'required', 
            'nama_destinasi'=>'required', 
            'lokasi_destinasi'=>'required', 
            'harga_destinasi'=>'required', 
            'persyaratan'=>'required', 
            'deskripsi'=>'required', 
            'ketinggian'=>'required']);
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
