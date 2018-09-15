<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inputSertifikasi;
use App\karyawan;
use App\jenisSertifikasi;
use Validator;
use App\upload;
use DB;

class inputSertifikasiController extends Controller
{
    public function form_input_dataSertifikasi(){
        
        $jenis_sertifikasi = jenisSertifikasi::all();

        $data = [
            'jenis_sertifikasi' => $jenis_sertifikasi
        ];
        return view('inputDataSertifikasi.form_input_dataSertifikasi', $data);
    }

   public function proses_input_dataSertifikasi(Request $request){
        $count = inputSertifikasi::count();
        $next_id = ($count == 0) ? 1 : inputSertifikasi::max('id') + 1;

        $input = $request->all();
        $pesan = array(
            'karyawan_nik.required' => 'NIK Karyawan 7 karakter.',
            'karyawan_nik.unique' => 'NIK Karyawan sudah digunakan',
            'upload.required' => 'Ukuran file maksimal 1MB dan berjenis .jpg, .png'
        );

        $aturan = array (
            'karyawan_nik' => 'required|min:7|max:7',
            'karyawan_nik' => 'required|unique:input_sertifikasi',
            'upload' => 'required|image|max:1000|mimes:jpg,png'
        );

        $validator = Validator::make($input,$aturan,$pesan);
        
        if($validator->fails()){
            return Redirect('/inputDataSertifikasi/input')->withErrors($validator)->withInput();
        }
        
        $input_sertifikasi = new inputSertifikasi;
        $input_sertifikasi->id = $next_id;
        $input_sertifikasi->karyawan_nik = $request->karyawan_nik;
        $input_sertifikasi->jenis_sertifikasi_id = $request->jenis_sertifikasi_id;
        $input_sertifikasi->masa_berlaku = $request->masa_berlaku;
        $input_sertifikasi->upload = $request->file('upload')->store('upload');

        if (! $input_sertifikasi->save()){
            App::abort(500);
        }
        return redirect('/inputDataSertifikasi');
    }

     public function show_all_inputDataSertifikasi(){
        
        $input_sertifikasi = inputSertifikasi::all();

        $data = [
            'input_sertifikasi' => $input_sertifikasi
        ];

        return view('inputDataSertifikasi.list_all_inputDataSertifikasi', $data);
    }

    public function proses_delete_dataSertifikasiKaryawan($id){
        $input_sertifikasi = inputSertifikasi::find($id);
        $input_sertifikasi->delete();

        return redirect('/inputDataSertifikasi');
    }

    public function form_edit_dataSertifikasi($id){

        $input_sertifikasi = inputSertifikasi::find($id);
        
        $jenis_sertifikasi = jenisSertifikasi::all();

        $data = [
            'input_sertifikasi' => $input_sertifikasi,
            'jenis_sertifikasi' => $jenis_sertifikasi
        ];

        return view('inputDataSertifikasi.form_edit_dataSertifikasi', $data);
    }

    public function proses_edit_dataSertifikasi($id, Request $request){

        $input_sertifikasi = inputSertifikasi::find($id);

        $input_sertifikasi->karyawan_nik = $request->karyawan_nik;
        $input_sertifikasi->jenis_sertifikasi_id = $request->jenis_sertifikasi_id;
        $input_sertifikasi->masa_berlaku = $request->masa_berlaku;
        $input_sertifikasi->upload = $request->file('upload');

        $input_sertifikasi->save();

        return redirect('/inputDataSertifikasi');

    }
}