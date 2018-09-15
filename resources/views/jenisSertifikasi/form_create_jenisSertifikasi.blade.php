@extends('jenisSertifikasi.layout_jenisSertifikasi')
@section('title', 'Jenis Sertifikasi')

@section('content')
@component('components.form')
	@slot('title', 'Tambah Jenis Sertifikasi')
	@slot('action', '/jenisSertifikasi/tambah')
	@slot('form_content')

		@component('components.input_text')
            @slot('label', 'Jenis Sertifikasi')
            @slot('type', 'text')
            @slot('name', 'jenis')
            @slot('placeholder', 'Jenis Sertifikasi')
            @slot('value' , '')
        @endcomponent

        @component('components.input_text')
            @slot('label', 'Dasar Peraturan')
            @slot('type', 'text')
            @slot('name', 'dasar')
            @slot('placeholder', 'Dasar Peraturan')
            @slot('value', '')
        @endcomponent

        <br>
        <br>

        @component('components.input_submit')
            @slot('value', 'Simpan')
        @endcomponent

    @endslot
    @slot('link')
@endcomponent
@endsection