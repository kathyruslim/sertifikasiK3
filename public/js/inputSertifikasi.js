$(document).ready(function () {
    var counter = 0;
    $("a#tambahForm").click(function () {
        event.preventDefault(); //mencegah reload
    })
    $('#tambahForm').click(function () {
        counter++;
        $('#newForm').append('<hr><div class="form-group">' +
            '<label for="jenis">Jenis Sertifikasi</label>' +
            '<select name="" id="jenis" class="form-control">' +
            '<option value="">Pilih Jenis Sertifikasi</option>' +
            '<option value="">Sertifikasi 1</option>' +
            '<option value="">Sertifikasi 2</option>' +
            '</select>' +
            '</div>' +

            '<div class="form-group">' +
            '<label for="masaberlaku">Masa Berlaku</label>' +
            '<input type="date" class="form-control" id="masaberlaku" aria-describedby="masaberlaku">' +
            '</div>' +

            '<div class="form-group">' +
            '<label for="up">Upload File</label>' +
            '<input type="file" class="form-control" id="up" aria-describedby="up">' +
            '</div>');
    });
});