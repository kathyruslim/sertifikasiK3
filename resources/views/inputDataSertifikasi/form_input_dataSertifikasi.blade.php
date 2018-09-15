@extends('inputDataSertifikasi.layout_inputSertifikasi')
@section('content')
@if ($jenis_sertifikasi-> count() == 0)
Jenis Sertifikasi belum terdaftar.
@else
@component('components.form')
	@slot('title', 'Input Data Sertifikasi Karyawan')
    @slot('action', '/inputDataSertifikasi/input')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @slot('form_content')
		  @component('components.input_text')
            @slot('label', 'NIK')
            @slot('type', 'text')
            @slot('name', 'karyawan_nik')
            @slot('placeholder', 'NIK')
            @slot('value' , ' ')
        @endcomponent

    	@component('components.input_dropdown')
        	@slot('label', 'Jenis Sertifikasi')
        	@slot('name','jenis_sertifikasi_id')
        	@slot('options')
            	<option selected> Pilih Jenis Sertifikasi</option>
              @foreach($jenis_sertifikasi as $jenis_sertifikasi)
              		<option 
              			value="{{ $jenis_sertifikasi->id }}"
                    @if($jenis_sertifikasi->id == 'jenis_sertifikasi_id') ? 'selected="selected"' : '' @endif
                    > {{ $jenis_sertifikasi->jenis }}
                  </option>
            	@endforeach
         	@endslot
       	@endcomponent

       	@component('components.input_text')
          @slot('label', 'Masa berlaku')
          @slot('name','masa_berlaku')
          @slot('type', 'date')
          @slot('placeholder', '')
          @slot('value','')
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