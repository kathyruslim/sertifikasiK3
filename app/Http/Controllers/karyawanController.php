<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyawan;

class karyawanController extends Controller
{
    public function form_create_dataKaryawan(){
    	return view('karyawan.form_create_dataKaryawan');
    }

    public function proses_create_dataKaryawan(Request $request){
    	$count = karyawan::count();
    	$next_id = ($count == 0) ? 1 : karyawan::max('id') + 1;

    	$karyawan = new karyawan;
        $karyawan->id = $next_id;
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->departemen = $request->departemen;
        $karyawan->bagian = $request->bagian;
        $karyawan->save();

        return redirect('/karyawan');
    }

    public function show_all_dataKaryawan(){
        
        $karyawan = karyawan::all();

        $data = [
            'karyawan' => $karyawan
        ];

        return view('karyawan.list_all_dataKaryawan', $data);
    }

    public function form_edit_dataKaryawan($id){
        $karyawan = karyawan::find($id);
        $data = [
            'karyawan' => $karyawan
        ];

        return view('karyawan.edit_dataKaryawan', $data);
    }

    public function proses_edit_dataKaryawan($id, Request $request){
        $karyawan = karyawan::find($id);

        $karyawan->NIK = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->departemen = $request->departemen;
        $karyawan->bagian = $request->bagian;
        $karyawan->save();

        return redirect('/karyawan');
    }

    public function proses_delete_dataKaryawan($id){
        $karyawan = karyawan::find($id);
        $karyawan->delete();

        return redirect('/karyawan');
    }
}
