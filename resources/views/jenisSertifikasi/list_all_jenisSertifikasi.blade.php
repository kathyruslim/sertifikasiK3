@extends('jenisSertifikasi.layout_jenisSertifikasi')
@section('title', 'Jenis Sertifikasi')

@section('content')
<p>
    <a class="nav-link" href="/jenisSertifikasi/tambah">
    <span data-feather="plus"></span>
    	Tambah Jenis Sertifikasi
    </a>
</p> 	
@if($jenis_sertifikasi != null)
	@component('components.table')
		@slot('title')
			<h5 align="center">
				Jenis-Jenis Sertifikasi
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
        		<td><a href="/jenisSertifikasi/{{ $jenis_sertifikasi->id }}">Detail</a></td>
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