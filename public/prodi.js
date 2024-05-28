$.ajax({
    type: "GET",
    url: "/get-jenjang",
    dataType: 'JSON',
    success: function (response) {
        if (response) {
            $.each(response, function (index, jenjang) {
                $('#jenjang').append(new Option(jenjang.nama_jenjang, jenjang.id_jenjang));
            });
        }
    }
});
// $.get('https://bolainsight.my.id/api/list-jenjang', function (response) {
//     if (response.success) {
//         $.each(response.data, function (index, jenjang) {
//             $('#jenjang').append(new Option(jenjang.nama_jenjang, jenjang.id_jenjang));
//         });
//     }
// });

$('#jenjang').change(function () {
    var jenjangId = $(this).val();
    if (jenjangId) {
        $.ajax({
            type: "GET",
            url: "/get-prodi?id_jenjang=" + jenjangId,
            dataType: 'JSON',
            success: function (res) {
                if (res) {
                    $("#prodi").empty();
                    $("#prodi").append('<option>--Prodi--</option>');
                    $.each(res, function (index, prodi) {
                        $("#prodi").append('<option value="' + prodi.id_prodi + '">' +
                            prodi.nama_prodi +
                            '</option>');
                    });
                } else {
                    $("#prodi").empty();
                }
            }
        });
    } else {
        $("#prodi").empty();
    }
});