@extends('rekapitulasi.layout_rekapitulasi')
@section('title', 'Rekapitulasi Sertifikasi')

@section('content')

	@if($data != null)
		@component('components.table')
			@slot('title')
			<h5 align="center">
				Rekapitulasi Sertifikasi Karyawan PT Petrokimia Gresik
			</h5>
			@endslot

			@slot ('head')
			<tr align="center">
				<th>No.</th>
				<th>Jenis Sertifikasi</th>
				<th>Jumlah Sertifikat</th>
				<th><th>
			</tr>
			@endslot

			@slot('body')
			@foreach( $data as $i => $input_sertifikasi)
			<tr align="center">
				<td>{{ $i + 1}}</td>
        		<td>{{ $input_sertifikasi->jenis }}</td>
        		<td>{{ count(explode(",",$input_sertifikasi->id_jenis)) }}</td>
        		<td><a href="detail_rekapitulasi/{{ $input_sertifikasi->jenis_sertifikasi_id }}">Detail</a></td>
    		</tr>
    		@endforeach
    		@endslot
    	@endcomponent
        {{ $data->render() }}
    @else
	    <div class="col-md-12">
	    	<p>Sertifikasi Karyawan Belum Terdaftar.</p>
	    </div>
	 @endif
@endsection