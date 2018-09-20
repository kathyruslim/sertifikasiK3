<?php

namespace App\Http\Controllers;

use App\inputSertifikasi;
use App\jenisSertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;

class rekapitulasiController extends Controller
{
    public function show_all_rekapitulasi(Request $request){
        $data  = DB::select("Select input_sertifikasi.jenis_sertifikasi_id,jenis_sertifikasi.jenis as jenis,GROUP_CONCAT(input_sertifikasi.jenis_sertifikasi_id) as id_jenis from input_sertifikasi JOIN jenis_sertifikasi on input_sertifikasi.jenis_sertifikasi_id = jenis_sertifikasi.id GROUP BY input_sertifikasi.jenis_sertifikasi_id,jenis_sertifikasi.jenis ORDER BY input_sertifikasi.id DESC");
        $data = $this->arrayPaginator($data, $request);
    	return view('rekapitulasi.form_rekapitulasi',compact('data'));
    }

    public function show_selected_rekapitulasi($id)
    {
        $data = inputSertifikasi::where('jenis_sertifikasi_id',$id)
            ->paginate(10);
        $jenis = jenisSertifikasi::find($id);

        return view('rekapitulasi.form_detail_rekapitulasi',compact('data','jenis'));
    }
    public function arrayPaginator($array, $request)
    {
        $page = Input::get('page', 1);
        $perPage = 10;
        $offset = ($page * $perPage) - $perPage;

        return new LengthAwarePaginator(array_slice($array, $offset, $perPage, true), count($array), $perPage, $page,
            ['path' => $request->url(), 'query' => $request->query()]);
    }
}