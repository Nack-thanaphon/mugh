<?php include './template/include/header.php'; ?>

<?php include './template/include/navbar.php'; ?>

<div class="container">
    <div class="row my-5 p-0  d-flex justify-content-between">


        <div class="col-12 col-md-7 card p-3 m-1">

            <h3 class="text-primary">กิจกรรม</h3>
            <small class="text-secondary">Activity : Asean University Health Promotion Network</small>
            <div class="row my-4 m-0 p-0" id="activity_list">

            </div>



        </div>

        <div class="col-12 col-md-4 card p-3 m-1">
            <?php include './template/include/aside.php'; ?>
        </div>
    </div>


</div>




<script>
    $(document).ready(function() {

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-mugh.com/api/get_activity.php",
            data: {},
            success: function(data) {
                data = data.result;
                for (var i = 0; i < data.length; i++) {
                    news = `
                <div class=" col-12 bg-white mb-3 p-1 ">
                <div class="row p-0 m-0">
                    <div class="col-4 text-center p-0 mx-auto">
                        <small class="badge  badge-pill badge-primary p-2 m-0">${data[i].end_date}</small><br>
                        <p class="fa fa-calendar-check py-2" style="font-size:3rem; "></p>
                        
                        
                    </div>
                    <div class="col-7 m-0 p-0 mx-auto">
                        <strong>${data[i].type}</strong>
                        <p>${data[i].title}</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-clock" aria-hidden="true"></i> ${data[i].start_time} - ${data[i].end_time} </li>
                            <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> ${data[i].address}</li>
                        </ul>
                    </div>
                    </div>
                </div>

          
       `
                    $('#activity_list').append(news);
                };

            },
            error: function(err) {

                $('#news').html('-ไม่มีข่าวสาร-');
            }
        })

    })
</script>

<div class="d-none d-sm-block">
    <?php include './template/include/footer.php'; ?>
</div>
<?php

include './template/include/script.php';

?>
</body>