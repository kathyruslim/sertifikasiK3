@extends('jenisSertifikasi.layout_jenisSertifikasi')

@section('title', 'Jenis Sertifikasi : '.$jenis_sertifikasi->jenis)

@section ('content')
@component('components.info_panel')
	@slot('title', 'Detail')

    @slot('body')
        <p>No. {{ $jenis_sertifikasi->id }}</p>
        <p>Jenis Sertifikasi : {{ $jenis_sertifikasi->jenis }}</p>
        <p>Dasar Peraturan : {{ $jenis_sertifikasi->dasar }}</p>
        <p>
        	<a href="/jenisSertifikasi/{{ $jenis_sertifikasi->id }}/edit" class="btn btn-primary"><span data-feather="edit"></span> Edit</a>    
        	<a href="/jenisSertifikasi/{{ $jenis_sertifikasi->id }}/delete" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a></p>
    @endslot
@endcomponent
<p><a href="/jenisSertifikasi"><span data-feather="chevron-left"></span> Back</a></p>
@endsection