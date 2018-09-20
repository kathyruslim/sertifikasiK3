@extends('inputDataSertifikasi.layout_inputSertifikasi')
@section('content')
@if ($jenis_sertifikasi-> count() == 0)
Jenis Sertifikasi belum terdaftar.
@else

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<div class="form-element">
    <div class="col-md-12 padding-0">
        <div class="col-md-8">
            <div class="panel form-element-padding">
                <div class="panel-heading">
                    <h4>Input Data Sertifikasi Karyawan</h4>
                </div>
                <div class="panel-body">
                    <form action="input" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="NIK">NIK</label>
                            <select required="" name="karyawan_nik" id="nik" class="form-control select-nik">
                                <option selected disabled> Masukkan NIK</option>
                                @foreach($karyawan_nik as $nik)
                                    <option value="{{ $nik->nik }}">{{ $nik->nik }}</option>
                                @endforeach
                            </select>
                        </div>


        <div class="form-group">
                            <label for="jenis_sertifikasi">Jenis Sertifikasi</label>
                            <select required="" name="jenis_sertifikasi_id[0]" id="jenis_sertifikasi" class="form-control">
                                <option selected disabled> Pilih Jenis Sertifikasi</option>
                                @foreach($jenis_sertifikasi as $jenis)
                                    <option value="{{ $jenis->id }}">{{ $jenis->jenis }}</option>
                                @endforeach
                            </select>
        </div>

                                <div class="form-group">
            <label for="masa_berlaku">Masa Berlaku</label>
            <input type="date" class="form-control" id="masa_berlaku" name="masa_berlaku[0]" required="" aria-describedby="masa_berlaku">
        </div>

        <div class="form-group">
            <label for="upload">Upload File</label>
            <input type="file" class="form-control" id="upload" name="upload[0]" required="" aria-describedby="upload">
        </div>

        <div id="newForm">

        </div>

        <button onclick="newRow()" type="button" class="btn btn-success">Tambah +</button>
        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endif
<script src="{{ asset('js/select2-master/dist/js/select2.min.js') }}"></script>
<script>
    var i = 1;
    var array = [];
    var jenis = [];
    var nik = [];
    @foreach($jenis_sertifikasi as $x => $j)
    array.push({{ $j->id }});
    jenis.push('{{ $j->jenis }}');
    @endforeach
    @foreach($karyawan_nik as $n)
    nik.push('{{ $n->nik }}');
    @endforeach
    function newRow(){
        //var a0 = '<div class="form-group n-'+i+'"> <label for="NIK">NIK</label></div>';
        //var a = document.createElement('select');
        //a.setAttribute('name', 'karyawan_nik[' + i + ']');
        //a.setAttribute('id', 'nik-'+i);
        //a.setAttribute('required', '');
        //a.setAttribute('class', 'form-control select-nik');

        var b0 = '<hr><div class="form-group j-'+i+'"> <label for="jenis_sertifikasi">Jenis Sertifikasi</label></form-group>';
        var b = document.createElement('select');
        b.setAttribute('name', 'jenis_sertifikasi_id[' + i + ']');
        b.setAttribute('id', 'jenis_sertifikasi-'+i);
        b.setAttribute('required', '');
        b.setAttribute('class', 'form-control');


        var c = '<div class="form-group"> <label for="masa_berlaku">Masa Berlaku</label> <input type="date" class="form-control" required="" id="masa_berlaku" name="masa_berlaku['+i+']" aria-describedby="masa_berlaku"> </div>';
        var d = '<div class="form-group"> <label for="upload">Upload File</label> <input type="file" class="form-control" required="" id="upload" name="upload['+i+']" aria-describedby="upload"> </div>'
        //$("#newForm").append(a0);
        //$(".n-"+i).append(a);
        $("#newForm").append(b0);
        $(".j-"+i).append(b);
        $("#newForm").append(c);
        $("#newForm").append(d);
        $('#jenis_sertifikasi-'+i).append('<option selected disabled value>Pilih Jenis Sertifikasi</option>')
        for(var x = 0; x<array.length; x++){
            console.log(array[0])
            $('#jenis_sertifikasi-'+i).append('<option value=' + array[x] + '>' + jenis[x] + '</option')
        }
        for(var z = 0; z<nik.length; z++){
            //console.log(array[0])
            $('#nik-'+i).append('<option value=' + nik[z] + '>' + nik[z] + '</option')
        }
        //$("#nik-"+i).select2({
       //     width: '100%'
        //});
        i++;
        //console.log(array);
    }

    /**
     *
     $(document).ready(function () {
    var counter = 0;
    $("a#tambahForm").click(function () {
        event.preventDefault(); //mencegah reload
    })
    $('#tambahForm').click(function () {
        counter++;

        $('#newForm').append('<hr><div class="form-group">'+
            '<label for="jenis_sertifikasi">Jenis Sertifikasi</label>'+
            '<select name="jenis_sertifikasi_id []" id="jenis_sertifikasi"'+
            'class="form-control">'+
            '<option selected> Pilih Jenis Sertifikasi</option>'+
                'foreach($jenis_sertifikasi as $jenis_sertifikasi)'+

                'endforeach'+
            '</select>'+
        '</div>'+

        '<div class="form-group">'+
            '<label for="masa_berlaku">Masa Berlaku</label>'+
            '<input type="date" class="form-control" id="masa_berlaku"'+
            'name="masa_berlaku []" aria-describedby="masa_berlaku">'+
        '</div>'+

        '<div class="form-group">'+
            '<label for="upload">Upload File</label>'+
            '<input type="file" class="form-control" id="upload" name="upload []" aria-describedby="upload">'+
        '</div>'+
    });
});
     */

</script>
<script>
    $(document).ready(function(){
        $(".select-nik").select2({
            width: '100%'
        });
    })
</script>

@endsection