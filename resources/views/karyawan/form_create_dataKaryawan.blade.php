@extends('karyawan.layout_dataKaryawan')
@section('title', 'Data Karyawan')

@section('content')
@component('components.form')
	@slot('title', 'Tambah Data Karyawan')
	@slot('action', '/karyawan/tambah')
	@slot('form_content')

		@component('components.input_text')
            @slot('label', 'NIK')
            @slot('type', 'text')
            @slot('name', 'nik')
            @slot('placeholder', 'NIK')
            @slot('value' , '')
        @endcomponent

        @component('components.input_text')
            @slot('label', 'Nama')
            @slot('type', 'text')
            @slot('name', 'nama')
            @slot('placeholder', 'Nama')
            @slot('value', '')
        @endcomponent

        @component('components.input_text')
            @slot('label', 'Departemen')
            @slot('type', 'text')
            @slot('name', 'departemen')
            @slot('placeholder', 'Departemen')
            @slot('value', '')
        @endcomponent

        @component('components.input_text')
            @slot('label', 'Bagian')
            @slot('type', 'text')
            @slot('name', 'bagian')
            @slot('placeholder', 'Bagian')
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