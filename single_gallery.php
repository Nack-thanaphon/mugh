<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container">

    <div class="row m-0 p-0">
        <div class="col-12 col-md-12 col-sm-12 card p-3 p-sm-5 text-sm-center">

            <div class="py-3">
                <h4 id="title">ชื่ออัลบั้ม : </h4>
                <h6 id="date">วันเดือนปี : </h6>
            </div>


            <div>
                <div id="gallery" class="row">

                </div>
            </div>
        </div>
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
            url: "https://www.info-Mugh.com/api/single_image.php",
            data: {
                id: id,
            },
            success: function(resp) {
                data = resp.result;
                if (data != '') {

                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html +=
                            `<div class="col-sm-3 col-md-4 mb-3">
                        <a class="fancybox" data-fancybox="gallery" href="https://info-Mugh.com/bos/uploads/${data[i].image}">
                        <img width="100%" height="100%"  src="https://info-Mugh.com/bos/uploads/${data[i].image}" alt=""/>
                        </a>
                    </div>
                    `

                        $('#title').html(data[i].name);
                        $('#date').html(data[i].date);
                    }
                    $('#gallery').append(html);
                } else {
                    $("#date").hide();
                    $('#title').html('-ไม่มีข้อมูลแสดง-');
                }
            },
            error: function(err) {
                console.log('error :', err)

            }
        })
    })
</script>

<?php

include 'include/script.php';
include "./include/footer.php"; ?>