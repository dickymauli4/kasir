<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function pegawai()
    {
        $data = DB::table('users')->get();
        // dd($dataa);
        return view('Pegawai',compact('data'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function insertdata(Request $request)
    {
        // dd($request->all());
        // Users::create($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

       DB::table('users')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        // 'role' => 2,
       ]);
        return redirect()->route('Pegawai.user');
    }

    public function hapus($id)
    {
        $dataa = Users::find($id);
        $dataa->delete();
        return redirect()->route('Pegawai.user')->with('Succes','Data Berhasil Dihapus');
    }
}
