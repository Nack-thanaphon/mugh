var html, data;

$(document).ready(function() {
    download();
})

function download() {

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-mugh.com/api/get_download_limit3.php",
        data: {},
        success: function(data) {
            data = data.result;
            for (var i = 0; i < data.length; i++) {
                $fd = `
            <li class="row m-0 p-0 d-flex justify-content-between py-2">
            <div class="col-8 p-0 m-0 download-card">
                <small class="download-type text-white badge badge-pill badge-primary ">${data[i].group}</small>
                <br>
                <b class="py-1">${data[i].name}</b>
          
            </div>
            <div class="col-3 p-0 m-0">
            <a href="https://info-mugh.com/bos/uploads/docs/${data[i].file}">
                <div class="btn btn-primary  w-100 p-1 ">download</div>
                </a>
            </div>
        </li> 
       `
                $('#downloads').append($fd);
            };

        },
        error: function(err) {
            $('#downloads').html('-ไม่มีข่าวสาร-');
        }
    })

}