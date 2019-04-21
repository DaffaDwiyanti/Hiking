<?php 
namespace App\Http\Controller;

use App\Model\Models\Simaksi;
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
        $this->validate($request, ['id_simaksi'=>'required', 
        'user_id'=>'required']);
        Simaksi::create($request->all());

    }

    public function hapus($id){
        $Simaksi = Simaksi::find($id);
        if ($Simaksi) {
            $Simaksi->update($request->all());
            return response()->json(['message'=>'Data Berhasil Terupdate']);
        }
        return response()->json(['message'=>'Data Gagal Terupdate']);
    }
}

?>