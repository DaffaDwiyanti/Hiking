<?php 
namespace App\Http\Controller;

use App\Model\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tampil(){
        return User::all();
    }
    public function tampilSendiri($id){
        $User = User::find($id);
        if (!$User) {
            return response()->json(['message'=>'Data Tidak ditemukan']);
        }
        return $User;
    }
    public function tambah(Request $request){
        $this->validate($request, ['user_id'=>'required', 
        'nama_user'=>'required', 
        'notlp'=>'required', 
        'email'=>'required', 
        'alamat'=>'required',
        'nik'=>'required',
        'role'=>'required']);
        User::create($request->all());

    }

    public function hapus($id){
        $User = User::find($id);
        if ($User) {
            $User->update($request->all());
            return response()->json(['message'=>'Data Berhasil Terupdate']);
        }
        return response()->json(['message'=>'Data Gagal Terupdate']);
    }
}

?>