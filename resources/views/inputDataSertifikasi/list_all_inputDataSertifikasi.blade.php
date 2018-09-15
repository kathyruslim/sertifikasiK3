@extends('inputDataSertifikasi.layout_inputSertifikasi')
@section('title', 'Data Sertifikasi Karyawan PT Petrokimia Gresik')

@section('content')
	<p>
    	<a class="nav-link" href="/inputDataSertifikasi/input">
    		<span data-feather="plus"></span>
    			Input Data Sertifikasi
    	</a>
	</p>
	@if($input_sertifikasi != null)
	@component('components.table')
		@slot('title')
			<h5 align="center">
				Data-Data Sertifikasi Karyawan PT Petrokimia Gresik
			</h5>
		@endslot

		@slot ('head')
			<tr align="center">
				<th>No.</th>
				<th>NIK</th>
				<th>Jenis Sertifikasi</th>
				<th>Masa Berlaku</th>
				<th>File Sertifikat</th>
				<th>Aksi</th>
			</tr>
		@endslot

		@slot('body')
			@foreach($input_sertifikasi as $input_sertifikasi)
				<tr align="center">
					<td>{{ $loop->index + 1 }}</td>
					<td>{{ $input_sertifikasi->karyawan_nik }}</td>
	        		<td>{{ $input_sertifikasi->jenis_sertifikasi_id}}</td>
					<td>
						{{ date('d F Y', strtotime ($input_sertifikasi->masa_berlaku))}}
					</td>
	        		<td>
	        			<img src="{{ $input_sertifikasi->upload}}"></img>
	        		</td>
	        		<td>
	        			<p><a href="/inputDataSertifikasi/{{ $input_sertifikasi->id}}/edit">Edit</a> / <a href="/inputDataSertifikasi/{{ $input_sertifikasi->id}}/delete">Delete</a></p>
	        		</td>
    			</tr>
    		@endforeach
    	@endslot
    @endcomponent
    @else
	    <div class="col-md-12"> 
	    	<p>
	    		Data Sertifikasi Karyawan Belum Terdaftar.
	    	</p>
	    </div>
	@endif
@endsection