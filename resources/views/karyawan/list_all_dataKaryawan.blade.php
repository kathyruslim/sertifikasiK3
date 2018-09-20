@extends('karyawan.layout_dataKaryawan')
@section('title', 'Data Karyawan PT Petrokimia Gresik')

@section('content')
@section('action', $karyawan)
<p>
    <a href="/karyawan/tambah" class="btn btn-success"><span data-feather="plus"></span>Tambah Data Karyawan</a>
</p>	
@if($karyawan != null)
	@component('components.table')
		@slot('title')
			<h5 align="center">
				DATA KARYAWAN
			</h5>
		@endslot

		@slot ('head')
			<tr align="center">
				<th>No.</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Departemen</th>
				<th>Bagian</th>
				<th>Aksi </th>
			</tr>
		@endslot

		
		@slot('body')
			@foreach( $karyawan as $karyawan)
				<tr align="center">
					<td>{{$loop->index+1}}</td>
	        		<td>{{ $karyawan->nik }}</td>
	        		<td>{{ $karyawan->nama}}</td>
	        		<td>{{ $karyawan->departemen}}</td>
	        		<td>{{ $karyawan->bagian}}</td>
	        		<td>
        				<p>
        					<a href="/karyawan/{{ $karyawan->id }}/edit" class="btn btn-primary"><span data-feather="edit"></span> Edit</a>   
        					<a href="/karyawan/{{ $karyawan->id }}/delete" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a></p>
        			</td>
    			</tr>
    		@endforeach
    	@endslot
    @endcomponent
@else
	<div class="col-md-12">
		<p>Data Karyawan Belum Terdaftar.</p>
	</div>
@endif
@endsection