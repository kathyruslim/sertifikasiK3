<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenisSertifikasi;


class jenisSertifikasiController extends Controller
{
    public function form_create_jenisSertifikasi(){
        return view('jenisSertifikasi.form_create_jenisSertifikasi');
    }

    public function proses_create_jenisSertifikasi(Request $request){
        $count = jenisSertifikasi::count();
        $next_id = ($count == 0) ? 1 : jenisSertifikasi::max('id') + 1;

        $jenis_sertifikasi = new jenisSertifikasi;
        $jenis_sertifikasi->id = $next_id;
        $jenis_sertifikasi->jenis = $request->jenis;
        $jenis_sertifikasi->dasar = $request->dasar;
        $jenis_sertifikasi->save();

        return redirect('/jenisSertifikasi');
    }

    public function show_all_jenisSertifikasi(){
        
        $jenis_sertifikasi = jenisSertifikasi::all();

        $data = [
            'jenis_sertifikasi' => $jenis_sertifikasi
        ];

        return view('jenisSertifikasi.list_all_jenisSertifikasi', $data);
    }

    public function show_detail_jenisSertifikasi($id){
        $jenis_sertifikasi = jenisSertifikasi::find($id);

        $data = [
            'jenis_sertifikasi' => $jenis_sertifikasi
        ];

        return view('jenisSertifikasi.detail_jenisSertifikasi', $data);
    }

    public function form_edit_jenisSertifikasi($id){
        $jenis_sertifikasi = jenisSertifikasi::find($id);
        $data = [
            'jenis_sertifikasi' => $jenis_sertifikasi
        ];

        return view('jenisSertifikasi.edit_jenisSertifikasi', $data);
    }

    public function proses_edit_jenisSertifikasi($id, Request $request){
        $jenis_sertifikasi = jenisSertifikasi::find($id);

        $jenis_sertifikasi->jenis = $request->jenis;
        $jenis_sertifikasi->dasar = $request->dasar;
        $jenis_sertifikasi->save();

        return redirect('/jenisSertifikasi/'.$id);
    }

    public function proses_delete_jenisSertifikasi($id){
        $jenis_sertifikasi = jenisSertifikasi::find($id);
        $jenis_sertifikasi->delete();

        return redirect('/jenisSertifikasi');
    }
}