<?php 
namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function tampil(){
        return Trip::all();
    }
    
    public function tampilSendiri($id){
        $Trip = Trip::find($id);
        if (!$Trip) {
            return response()->json(['message'=>'Data Tidak ditemukan']);
        }
        return $Trip;
    }
    public function tambah(Request $request){
        $this->validate($request, ['id_trip'=>'required', 
        'id_destinasi'=>'required', 
        'status_trip'=>'required', 
        'tgl_mulai'=>'required', 
        'tgl_selesai'=>'required',
        'id_checkpoint'=>'required']);
        return Trip::create($request->all());

    }

    public function hapus($id){
        $Trip = Trip::find($id);
        if ($Trip) {
            $Trip->delete();
            return response()->json(['message'=>'Data Berhasil Terhapus']);
        }
        return response()->json(['message'=>'Data Gagal Terhapus']);
    }

    public function update(Request $request, $id){
        $Trip = Trip::where('id_trip', $id);
        if($Trip){
            $Trip->update($request->all());
            return response()->json(['message'=>'data terupdate']);
        }
        return response()->json(['message'=>'data gagal di update']);
    }
}

?>