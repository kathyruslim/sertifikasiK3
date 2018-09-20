@extends('inputDataSertifikasi.layout_inputSertifikasi')
@section('title', 'Data Sertifikasi Karyawan PT Petrokimia Gresik')

@section('content')
	<p>
		<a href="/inputDataSertifikasi/input" class="btn btn-success"><span data-feather="plus"></span> Input Data Sertifikasi</a>
	</p>
	@if($input_sertifikasi != null)
	@component('components.table')
		@slot('title')
			<h5 align="center">
				DATA SERTIFIKASI KARYAWAN 
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
	        		<td>{{ $input_sertifikasi->Jenis->jenis }}</td>
					<td>
						{{ date('d F Y', strtotime ($input_sertifikasi->masa_berlaku))}}
					</td>
	        		<td>
	        			<img src="{{ $input_sertifikasi->upload}}" width="42" height="42"></img>
	        		</td>
	        		<td>
	        			<p>
	        				<a href="/inputDataSertifikasi/{{ $input_sertifikasi->id}}/edit" class="btn btn-primary"><span data-feather="edit"></span> Edit</a>   
	        				<a href="/inputDataSertifikasi/{{ $input_sertifikasi->id}}/delete" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a>
                            @if(\App\Http\Controllers\inputSertifikasiController::checkDate($input_sertifikasi->masa_berlaku))
	        				    <a><span data-feather="alert-circle"></span></a>
                            @endif
	        			</p>
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