<?php include './include/header.php'; ?>

<?php include './include/navbar.php'; ?>

<div class="container">
    <div class="row my-5 m-2 p-0   d-flex justify-content-between">

        <div class="col-12 col-md-7 card p-3 m-1">

            <h3 class="text-primary">กิจกรรม</h3>
            <small class="text-secondary">Activity : Mahidol University Global Health</small>
            <div class="row my-4 m-0 p-0" id="activity_list">

            </div>

        </div>

        <div class="col-12 col-md-4 card p-3 m-1">
            <?php include './include/aside.php'; ?>
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
                    <a href="./single_activity.php?event=${data[i].id}" class="text-reset">
                        <p class="fa fa-calendar-check " style="font-size:5.5rem;"></p>
                        </a>
                    </div>
                    <div class="col-7 m-0 p-0 mx-auto">
                        <strong class="m-0 p-0" >${data[i].type}</strong>
                        <p class="m-0 p-0" >${data[i].title}</p>
                        <ul class="list-inline">
                            <li class="list-inline-item text-primary">${data[i].end_date}</li><br>
                            <li class="list-inline-item"><i class="fa fa-clock"></i> ${data[i].start_time} - ${data[i].end_time} </li>
                            <li class="list-inline-item"><i class="fa fa-location-arrow text-danger"></i> ${data[i].address}</li>
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
    <?php include './include/footer.php'; ?>
</div>
<?php

include 'include/script.php';

?>
</body>