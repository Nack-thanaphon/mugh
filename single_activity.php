<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container">
    <div class="row my-5 m-2 p-0  d-flex justify-content-between">
        <div class="col-12 col-md-7 card p-3 mb-2">

            <h6 id="e_type" class="text-secondary"> </h6>


            <h3 id="e_title" class="text-primary py-3"></h3>

            <div class="py-3">
                <h4>รายละเอียดกิจกรรม :</h4>
                <p id="e_detail">

                </p>
            </div>

            <div class="py-1">
                <b id="e_date"></b><br>
                <b id="e_time"></b>
                <p id="e_detail">

                </p>
            </div>
            <h5 id="e_link">
            </h5>
        </div>

        <div class="col-12 col-md-4 card p-3  d-none d-sm-block">
            <?php include './include/aside.php'; ?>
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
            url: "https://www.info-mugh.com/api/singleactivity.php",
            data: {
                id: id,
            },
            success: function(data) {

                data = data.result;
                console.log(data)

                $('#e_type').append("หัวข้อกิจกรรม : ", data[0].type);
                $('#e_title').append("ชื่อกิจกรรม : ", data[0].title);
                $('#e_detail').append(data[0].detail);
                $('#e_link').append('ลิงค์กิจกรรม :<a href="' + data[0].link +
                    '" target="_blank">Click me</a>');
                $('#e_date').append('วันเดือนปี :', data[0].end_date);
                $('#e_time').append('เวลา :', data[0].start_time, '-', data[0].end_time);
                // $('#news_title').html('<h3 class="p-0 m-0">' + data[0].n_name + '</h3>');
                // $('#news_image').html(
                //     '<img style="object-fit: cover; width:100%;"src="https://info-mugh.com/bos/' +
                //     data[0].n_image + '"></img>');
                // $('#news_detail').html(data[0].n_detail);
                // $('#news_views').html(data[0].n_views);
                // console.log("good", err)

            },

            error: function(err) {
                console.log("bad", err)

            }
        })
    })
</script>
<?php

include 'include/script.php';
include "./include/footer.php"; ?>