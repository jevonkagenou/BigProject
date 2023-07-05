// File: public/js/custom.js
$(document).ready(function() {
    $('.edit-btn').click(function() {
        var itemId = $(this).data('id');
        var editUrl = '{{ route("jadwalkerja.update", ":id") }}';
        editUrl = editUrl.replace(':id', itemId);

        // Mengambil data item yang akan diedit melalui AJAX
        $.ajax({
            url: editUrl,
            type: 'GET',
            success: function(response) {
                // Mengisi nilai form dengan data yang diterima
                $('#updatejadwalkerja #nama_jadwal').val(response.nama_jadwal);
                $('#updatejadwalkerja #hari_kerja').val(response.hari_kerja);
                $('#updatejadwalkerja #hari_libur').val(response.hari_libur);

                // Membuka modal
                $('#updatejadwalkerja').modal('show');
            },
            error: function() {
                alert('Gagal memuat data.');
            }
        });
    });
});
