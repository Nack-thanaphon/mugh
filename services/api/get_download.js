var html, data;

$(document).ready(function () {
    download();
})

function download() {

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-Mugh.com/api/get_download_limit3.php",
        data: {},
        success: function (data) {
            data = data.result;
            if (data != '') {
                for (var i = 0; i < data.length; i++) {
                    $fd = `<li class="mb-3 p-0">
                <small class="text-secondary">${data[i].date}</small> <br>
                <small>ชนิดเอกสาร : ${data[i].group}</small>
                <a href="./single_file.php?f=${data[i].id}" class="row m-0 p-0">
                <small class="p-0 m-0 col-12 text-start">${data[i].name}</small>
                </a> </li>
           `
                    $('#download').append($fd);
                };
            } else {
                $('#download').html('ไม่มีข้อมูล');
            }

        },
        error: function (err) {
            console.log(err)
        }
    })

}