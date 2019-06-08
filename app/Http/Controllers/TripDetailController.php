<?php 
namespace App\Http\Controllers;

use App\Models\TripDetail;
use Illuminate\Http\Request;

class TripDetailController extends Controller
{
    public function tampil(){
        return TripDetail::all();
    }

    public function tampilSendiri($id){
        $TripDetail = TripDetail::find($id);
        if (!$TripDetail) {
            return response()->json(['message'=>'Data Tidak ditemukan']);
        }
        return $TripDetail;
    }
    public function tambah(Request $request){
        $this->validate($request, ['id_room'=>'required', 
        'user_id'=>'required',
        'id_trip'=>'required']);
        return TripDetail::create($request->all());

    }

    public function hapus($id){
        $TripDetail = TripDetail::where('id_room', $id);
        if ($TripDetail) {
            $TripDetail->delete();
            return response()->json(['message'=>'Data Berhasil Terhapus']);
        }
        return response()->json(['message'=>'Data Gagal Terhapus']);
    }

    public function update(Request $request,$id){
        $TripDetail = TripDetail::where('id_room',$id);
        if ($TripDetail) {
            $TripDetail->update($request->all());
            return response()->json(['message'=>'Data Berhasil Terupdate']);
        }
        return response()->json(['message'=>'Data Gagal Terupdate']);
    }
}

?>