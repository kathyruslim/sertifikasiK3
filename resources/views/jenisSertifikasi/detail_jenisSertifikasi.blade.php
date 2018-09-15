@extends('jenisSertifikasi.layout_jenisSertifikasi')

@section('title', 'Jenis Sertifikasi'.$jenis_sertifikasi->id)

@section ('content')
@component('components.info_panel')
	@slot('title', 'Detail Jenis Sertifikasi '. $jenis_sertifikasi->jenis)

    @slot('body')
        <p>No. {{ $jenis_sertifikasi->id }}</p>
        <p>Jenis Sertifikasi: {{ $jenis_sertifikasi->jenis }}</p>
        <p>Dasar Hukum: {{ $jenis_sertifikasi->dasar }}</p>
        <p><a href="/jenisSertifikasi/{{ $jenis_sertifikasi->id }}/edit">Edit</a> / <a href="/jenisSertifikasi/{{ $jenis_sertifikasi->id }}/delete">Delete</a></p>
        
    @endslot
@endcomponent

@endsection