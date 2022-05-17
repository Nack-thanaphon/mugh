<?php include './include/header.php'; ?>

<?php include './include/navbar.php'; ?>


<div class="row m-0 p-0">
    <div class="col-12 col-md-12 col-sm-12 card p-3 p-sm-5 text-sm-center">
        <h1 class="text-primary font-weight-bold">กิจกรรม</h1>
        <small class="text-secondary">Activity : Asean University Health Promotion Network</small>
        <hr>
        <div class="row my-4 m-0 p-0">
            <div class=" col-12 bg-white mb-3 ">
                <ul id="activity_list">
                </ul>
            </div>
        </div>

    </div>


</div>


<script>
    $(document).ready(function() {

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-aun-hpn.com/api/get_activity.php",
            data: {},
            success: function(data) {
                data = data.result;
                for (var i = 0; i < data.length; i++) {
                    news = `<li class="mb-3">
                            <div class="row m-0 p-0">
                                <div class="col-12 col-sm-4 text-sm-left m-0 p-0 text-secondary">
                                    <p class="p-0 m-0">${data[i].end_date}</p>
                                    <small ><i class="fas fa-clock"></i> ${data[i].start_time} - ${data[i].end_time} </small>
                                </div>
                                <div class="col-12 col-sm-8 m-0 p-0  text-left">
                                    <h6 class=" m-0 p-0 ">
                                    ${data[i].title}
                                    </h6>
                                <br>
                                    <a href="" class="btn btn-primary p-1 m-0">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </li>`
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