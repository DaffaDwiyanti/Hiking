<?php 
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function tampil(){
        return Room::all();
    }
    public function tampilSendiri($id){
        $Room = Room::find($id);
        if (!$Room) {
            return response()->json(['message'=>'Data Tidak ditemukan']);
        }
        return $Room;
    }
    public function tambah(Request $request){
        $this->validate($request, ['id_room'=>'required', 
        'penanggung_jawab'=>'required', 
        'room_status'=>'required', 
        'id_simaksi'=>'required']);
        return Room::create($request->all());

    }

    public function hapus($id){
        $Room = Room::find($id);
        if ($Room) {
            $Room->update($request->all());
            return response()->json(['message'=>'Data Berhasil Terupdate']);
        }
        return response()->json(['message'=>'Data Gagal Terupdate']);
    }
}

?>