@extends('rekapitulasi.layout_rekapitulasi')

@section('title', 'Detail Jenis Sertifikasi '.$input_sertifikasi->jenis)

@section ('content')
	@component('components.table')
		@slot('title', 'Detail Jenis Sertifikasi '. $input_sertifikasi->jenis)
    	@endslot
 		@slot('head')
     		<tr align="center">
        		<th>No.</th>
        		<th>NIK</th>
        		<th>Nama</th>
        		<th>Departemen</th>
        		<th>Bagian</th>
    		</tr>
    	@endslot

    	@slot('body')
    		@foreach($departments as $department)
    			<tr align="center">
        			<td>{{ $loop->index + 1 }}</td>
        			<td></td>
        			<td></td>
        			<td></td>
        			<td></td>
    			</tr>
    		@endforeach
    	@endslot
	@endcomponent
@endsection