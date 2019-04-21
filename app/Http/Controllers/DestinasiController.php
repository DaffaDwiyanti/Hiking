<?php 
namespace App\Http\Controller;

use App\Model\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function tambah(Request $request){
        $this->validate($request, ['id_destinasi'=>'required', 
        'nama_destinasi'=>'required',
        'lokasi_destinasi' =>'required', 
        'harga_destinasi'=>'required', 
        'persyaratan'=>'required', 
        'deskripsi'=>'required', 
        'ketinggian'=>'required']);
        return Destinasi::create($request->all());
    }

    public function hapus($id){
        $Destinasi = Destinasi::find($id);
        if ($Destinasi) {
            $Destinasi->delete();
            return response()->json(['message'=>'Data Berhasil dihapus']);
        }
        return response()->json(['message'=>'Data tidak bisa dihapus',404]);
    }

    public function update(Request $request, $id){
        $Destinasi = Destinasi::find($id);
        if ($Destinasi) {
            return Destinasi::update($request->all());
            return response()->json(['message'=>'Data berhasil diupdate']);

        }
        return response()->json(['message'=>'Data gagal update']);
    }

    public function tampil(){
        return Destinasi::all();
    }

    public function tampilSendiri($id){
        $Destinasi = Destinasi::find($id);
        if (!$Destinasi) {
            return response()->json(['message'=>'Data tidak ditemukan']);
        }
        return $Destinasi;
    }
}
?>