@extends('inputDataSertifikasi.layout_inputSertifikasi')
@section('title', 'Edit Data Sertifikasi Karyawan ' . $input_sertifikasi->id)

@section('content')
@component('components.form')
	@slot('title', 'Edit Data Sertifikasi Karyawan ' . $input_sertifikasi->id)
    @slot('action', '/inputDataSertifikasi/'.$input_sertifikasi->id.'/edit')

    @slot('form_content')
    @if($input_sertifikasi -> count() > 0)
		@component('components.input_text')
            @slot('label', 'NIK')
            @slot('type', 'text')
            @slot('name', 'karyawan_nik')
            @slot('placeholder', 'NIK')
            @slot('value' , $input_sertifikasi->karyawan_nik)
        @endcomponent

    	@component('components.input_dropdown')
        	@slot('label', 'Jenis Sertifikasi')
        	@slot('name','jenis_sertifikasi_id')
        	@slot('options')
            	@foreach($jenis_sertifikasi as $jenis_sertifikasi)
              		<option 
              			value="{{ $jenis_sertifikasi->id }}"
                    @if($jenis_sertifikasi->id == $input_sertifikasi->jenis_sertifikasi_id)
                       selected
                    @endif
                  > 
              		{{ $jenis_sertifikasi->jenis }}
              		</option>
            	@endforeach
         	@endslot
       	@endcomponent

       	@component('components.input_text')
          @slot('label', 'Masa berlaku')
          @slot('name','masa_berlaku')
          @slot('type', 'date')
          @slot('placeholder', '')
          @slot('value',$input_sertifikasi->masa_berlaku)
       @endcomponent

		@component('components.input_picture')
          	@slot('label', 'Upload File')
          	@slot('name','upload' )
          	@slot('type','file')
          	@slot('value','')
        @endcomponent

        <br>
        <br>

        @component('components.input_submit')
            @slot('value', 'Input')
        @endcomponent

    @endslot
    @slot('link')
@endcomponent
@endif
@endsection