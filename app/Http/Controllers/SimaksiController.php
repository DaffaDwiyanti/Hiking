<?php 
namespace App\Http\Controllers;

use App\Models\Simaksi;
use Illuminate\Http\Request;


class SimaksiController extends Controller
{
    public function tampil(){
        return Simaksi::all();
    }
    public function tampilSendiri($id){
        $Simaksi = Simaksi::find($id);
        if (!$Simaksi) {
            return response()->json(['message'=>'Data Tidak ditemukan']);
        }
        return $Simaksi;
    }
    public function tambah(Request $request){
        $this->validate($request, ['id_simaksi'=>'required', 'user_id'=>'required']);
        return Simaksi::create($request->all());

    }

    public function hapus($id){
        $Simaksi = Simaksi::find($id);
        if ($Simaksi) {
            $Simaksi->delete();
            return response()->json(['message'=>'Data Berhasil Terupdate']);
        }
        return response()->json(['message'=>'Data Gagal Terupdate']);
    }
}

?>