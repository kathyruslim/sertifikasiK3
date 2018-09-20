@extends('karyawan.layout_dataKaryawan')
@section('title', 'Edit Data Karyawan')

@section('content')
@component('components.form')
    @slot('title', 'Edit Data Karyawan : '.$karyawan->nama)
    @slot('action', '/karyawan/'.$karyawan->id.'/edit')
    @slot('form_content')

       @component('components.input_text')
            @slot('label', 'NIK')
            @slot('type', 'text')
            @slot('name', 'nik')
            @slot('placeholder', 'NIK')
            @slot('value' , $karyawan ->nik)
        @endcomponent

        @component('components.input_text')
            @slot('label', 'Nama')
            @slot('type', 'text')
            @slot('name', 'nama')
            @slot('placeholder', 'Nama')
            @slot('value', $karyawan->nama)
        @endcomponent

        @component('components.input_text')
            @slot('label', 'Departemen')
            @slot('type', 'text')
            @slot('name', 'departemen')
            @slot('placeholder', 'Departemen')
            @slot('value', $karyawan->departemen)
        @endcomponent

        @component('components.input_text')
            @slot('label', 'Bagian')
            @slot('type', 'text')
            @slot('name', 'bagian')
            @slot('placeholder', 'Bagian')
            @slot('value', $karyawan->bagian)
        @endcomponent        
        @component('components.input_submit')
            @slot('value', 'Update')
        @endcomponent
    @endslot
    @slot('link')
@endcomponent
@endsection