<?php 
namespace App\Http\Controllers;

use App\Models\Checkpoint;
use Illuminate\Http\Request;

class CheckpointController extends Controller
{
    public function tambah(Request $request){
        $this->validate($request,[
            'id_checkpoint'=>'required',
            'titik_checkpoint'=>'required',
            'detail'=>'required'
            ]);    
            return Checkpoint::create($request->all());    
    }

    public function update(Request $request, $id){
        $Checkpoint = Checkpoint::find($id);
        if ($Checkpoint) {
            return Checkpoint::update($request->all());
            return response()->json(['message'=>'Data terupdate']);
        }
        return response()->json(['message'=>'Data gagal update'],404);
        
    }

    public function tampil(){
        return Checkpoint::all();
    }

    public function tampilSendiri($id){
        $Checkpoint = Checkpoint::find($id);
        if ( !$Checkpoint) {
        return response()->json(['message'=> 'Data tidak ditemukan']);
        }
        return $Checkpoint;

    }

    public function delete($id){
        $Checkpoint = Checkpoint::find($id);
        if ($Checkpoint) {
            $Checkpoint->delete();
            return response()->json(['message'=>'Data terhapus']);
        }
        return response()->json(['message'=>'Data Gagal terhapus'],404);
    }
}
?>