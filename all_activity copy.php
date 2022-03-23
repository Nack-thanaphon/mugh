<?php include './template/include/header.php'; ?>

<?php include './template/include/navbar.php'; ?>

<div class="container">
    <div class="row my-5 p-0  d-flex justify-content-between">


        <div class="col-12 col-md-7 card p-3 m-1">

            <h3 class="text-primary">กิจกรรม</h3>
            <small class="text-secondary">Activity : Asean University Health Promotion Network</small>
            <div class="row my-4 m-0 p-0" id="news_list">

            </div>
            <div class=" bg-white d-flex justify-content-between mb-3 p-1 ">
                <div class="col-3 text-center p-0 mx-auto">
                    <h2><span class="badge badge-primary p-2 m-0">23</span></h2>
                    <h5>OCT</h5>
                </div>
                <div class="col-7 m-0 p-0 mx-auto">
                    <strong>Ice Cream Social</strong>
                    <p>Lorem ipsum dolsit amet, consectetur adipiscing </p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fas fa-calendar-day" aria-hidden="true"></i> Monday
                        </li>
                        <li class="list-inline-item"><i class="fa fa-clock" aria-hidden="true"></i> 12:30 PM -
                            2:00 PM</li>
                        <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Cafe
                        </li>
                    </ul>
                </div>
            </div>


        </div>

        <div class="col-12 col-md-4 card p-3 m-1">
            <?php include './template/include/aside.php'; ?>
        </div>
    </div>


</div>



<?php

include './template/include/script.php';
include "./template/include/footer.php"; ?>