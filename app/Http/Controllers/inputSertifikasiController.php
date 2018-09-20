<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inputSertifikasi;
use App\karyawan;
use App\jenisSertifikasi;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\upload;
use DB;

class inputSertifikasiController extends Controller
{
    public function form_input_dataSertifikasi(){
        
        $jenis_sertifikasi = jenisSertifikasi::all();
        $karyawan_nik = karyawan::all();
        return view('inputDataSertifikasi.form_input_dataSertifikasi', compact('jenis_sertifikasi','karyawan_nik'));
    }

   public function proses_input_dataSertifikasi(Request $request){

       foreach($request->jenis_sertifikasi_id as $i => $value){
           $image = sha1(date('ymdhis')).'.'.request()->upload[$i]->getClientOriginalExtension();
           Storage::putFileAs('upload', $request->file('upload')[$i],$image);
           inputSertifikasi::create([
               'karyawan_nik' => $request->karyawan_nik,
               'jenis_sertifikasi_id' => $request->jenis_sertifikasi_id[$i],
               'masa_berlaku' => $request->masa_berlaku[$i],
               'upload' => 'upload/'.$image
           ]);
       }
       return redirect('inputDataSertifikasi');
       
    }

     public function show_all_inputDataSertifikasi(){
        
        $input_sertifikasi = inputSertifikasi::all();
//
        $data = [
            'input_sertifikasi' => $input_sertifikasi ,
        ];
//
        return view('inputDataSertifikasi.list_all_inputDataSertifikasi', $data);
    }

    public static function checkDate($date)
    {
        $tanggal_sekarang = date('Y-m-d'); //misal : tanggal 19

        $masa_berlaku = $date; //misal : tanggal 22
        $sisa_hari = date_diff(date_create($masa_berlaku),date_create($tanggal_sekarang)); //3
        if ($sisa_hari->d <= 3){
            return true;
        }

        return false;
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
        $input_sertifikasi->upload = $request->file('upload')->store('upload');
        $input_sertifikasi->save();

        return redirect('/inputDataSertifikasi');
    }
}