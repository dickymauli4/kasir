<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function barang()
    {
        $data = DB::table('barangs')->get();
        return view('layouts.data-barang', compact('data'));
    }

        public function tambahbarang(){


            return view('layouts.tambahdata');
        }

        public function insertdata(Request $request){
            // dd($request->all());
            barang::create($request->all());
            return redirect()->route('barang');

        }
        public function delete($id){
            $data = barang::find($id);
            $data->delete();
            return redirect()->back();
        }

        public function updateUi($id){
            $barang = DB::table('barangs')->where('id', $id)->first();
            return view('layouts.edit', compact('barang'));
        }

        public function update(Request $request,$id)
        {
            $data = barang::find($id);
            $data ->update($request->all());
            return redirect()->route('barang');
        }










}


