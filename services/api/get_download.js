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
                    $fd = `
                    
                    <li class="row m-0 p-0  mx-2">
                    <a href="./single_file.php?f=${data[i].id}" class="row m-0 p-0 text-decoration-none">
                            <div class="col-4 m-0 p-0 ">
                                <h1 class="fs-sm-1 fs-5 text-start">${data[i].date}</h1>
                            </div>
                            <div class="col-8 m-0 p-0 ">
                                <h4 class="fs-sm-1 fs-5">${data[i].name}</h4>
                            </div>
                            </a>
                    </li>
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