@extends('rekapitulasi.layout_rekapitulasi')

@section('title', 'Detail Jenis Sertifikasi : '.$jenis->jenis)

@section ('content')
	@component('components.table')
		@slot('title')
    <h5 align="center">
        {{ $jenis->jenis }}
    </h5>
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
    		@foreach($data as $i => $department)
    			<tr align="center">
        			<td>{{ $i + 1 }}</td>
        			<td>{{ $department->karyawan_nik }}</td>
        			<td>{{ $department->Karyawan->nama }}</td>
        			<td>{{ $department->Karyawan->departemen }}</td>
        			<td>{{ $department->Karyawan->bagian  }}</td>
    			</tr>
    		@endforeach
    	@endslot
	@endcomponent
    {{ $data->render() }}
@endsection