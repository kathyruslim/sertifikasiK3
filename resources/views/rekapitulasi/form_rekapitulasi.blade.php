@extends('rekapitulasi.layout_rekapitulasi')
@section('title', 'Rekapitulasi Sertifikasi')

@section('content')

	@if($input_sertifikasi != null)
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
			@foreach( $input_sertifikasi as $input_sertifikasi)
			<tr align="center">
				<td>{{ $loop->index + 1}}</td>
        		<td>{{ $input_sertifikasi->jenis }}</td>
        		<td>{{ $input_sertifikasi->total }}</td>
        		<td><a href="/rekapitulasi/{{ $input_sertifikasi->jenis }}">Detail</a></td>
    		</tr>
    		@endforeach
    		@endslot
    	@endcomponent
    @else
	    <div class="col-md-12">
	    	<p>Sertifikasi Karyawan Belum Terdaftar.</p>
	    </div>
	 @endif
@endsection