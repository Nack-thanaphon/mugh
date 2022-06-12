<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container-fluid">
    <div class="row m-0 p-0">
        <div class="col-12 col-md-12 col-sm-12 card p-3  m-1  text-sm-center" id="download">

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var baseUrl = (window.location).href; // You can also use document.URL
        var id = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-mugh.com/api/single_download.php",
            data: {
                id: id,
            },
            success: function(data) {
                data = data.result;


                for (var i = 0; i < data.length; i++) {
                    $fd = `<h6 id="f_type" class="text-secondary"> ${data[i].group}</h6>
                        <h3 class="text-primary font-weight-bold" id="f_title">${data[i].name}</h3>
                        <small id="f_date" class="">วัน เดือน ปี : ${data[i].date}</small>
                        <hr>
                        <div class="row m-0 p-0">
                            <div class="col-8 mx-auto">
                            <a href="https://info-mugh.com/bos/uploads/docs/${data[i].file}" class="btn btn-success w-100" target="blank"><i class="fas fa-arrow-circle-down"></i> Download </a>
                            </div>
                        </div>`
                    $('#download').append($fd);
                };
            },
            error: function(err) {
                console.log("bad", err)
            }
        })
    })
</script>
<?php

include './include/script.php';
include "./include/footer.php"; ?>