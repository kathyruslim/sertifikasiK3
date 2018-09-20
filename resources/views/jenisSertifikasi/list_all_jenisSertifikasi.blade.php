@extends('jenisSertifikasi.layout_jenisSertifikasi')
@section('title', 'Jenis Sertifikasi K3 PT Petrokimia Gresik')

@section('content')
<p>
    <a href="/jenisSertifikasi/tambah" class="btn btn-success"><span data-feather="plus"></span> Tambah Jenis Sertifikasi</a>
</p>
@if($jenis_sertifikasi != null)
	@component('components.table')
		@slot('title')
			<h5 align="center">
				JENIS-JENIS SERTIFIKASI
			</h5>
		@endslot

		@slot ('head')
			<tr align="center">
				<th>No.</th>
				<th>Jenis Sertifikasi</th>
				<th></th>
			</tr>
		@endslot

		@slot('body')
			@foreach( $jenis_sertifikasi as $jenis_sertifikasi)
			<tr align="center">
				<td>{{ $loop->index + 1}}</td>
        		<td>{{ $jenis_sertifikasi->jenis}}</td>
        		<td><a href="/jenisSertifikasi/{{ $jenis_sertifikasi->id }}" class="btn btn-info"><span data-feather="info"></span> Detail</a></td>
    		</tr>
    		@endforeach
    	@endslot
    @endcomponent
@else
	<div class="col-md-12">
	   	<p>Jenis Sertifikasi Belum Terdaftar.</p>
	</div>
@endif
@endsection