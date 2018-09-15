@extends('jenisSertifikasi.layout_jenisSertifikasi')
@section('title', 'Edit Jenis Sertifikasi')

@section('content')
@component('components.form')
    @slot('title', 'Edit '.$jenis_sertifikasi->jenis)
    @slot('action', '/jenisSertifikasi/'.$jenis_sertifikasi->id.'/edit')
    @slot('form_content')
        @component('components.input_text')
            @slot('label', 'Jenis Sertifikasi')
            @slot('type', 'text')
            @slot('name', 'jenis')
            @slot('placeholder', 'Jenis Sertifikasi')
            @slot('value', $jenis_sertifikasi->jenis)
        @endcomponent
        @component('components.input_text')
            @slot('label', 'Dasar Peraturan')
            @slot('type', 'text')
            @slot('name', 'dasar')
            @slot('placeholder', 'Dasar Peraturan')
            @slot('value', $jenis_sertifikasi->dasar)
        @endcomponent
        @component('components.input_submit')
            @slot('value', 'Update')
        @endcomponent
    @endslot
    @slot('link')
@endcomponent
@endsection