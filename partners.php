<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<body>
    <div class="container-fluid">
        <div class="row pb-5">
            <div class="col-12 bg-primary py-5 text-center text-white">
                <div class="py-2 align-center">
                    <h1 class="text-uppercase">Our Member</h1>
                    <p>ASEAN University Network – Health Promotion Network (AUN–HPN)</p>
                </div>
                <!-- <small>Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./</small> -->
            </div>
            <div class="col-12 p-2 my-3 m-0">
                <div class="col-12 pb-3 p-0 m-0 mx-auto ">
                    <div class="col-md-12 mx-auto">
                        <div class="row  p-0 m-0">

                            <div class="col-12 p-0 m-0">
                                <ul class="nav nav-tabs" role="tablist ">
                                    <li class="nav-item col-6 p-0 m-0 text-center " id="test">
                                        <a class="nav-link active py-3" data-toggle="tab" href="#tabs-1" role="tab">
                                            <h5 class="p-0 m-0 text-dark">Full Members</h5>
                                        </a>

                                    </li>
                                    <li class="nav-item col-6 p-0 m-0 text-center">
                                        <a class="nav-link  py-3" data-toggle="tab" href="#tabs-2" role="tab">
                                            <h5 class="p-0 m-0 text-dark">Associate Members</h5>
                                        </a>
                                    </li>
                                </ul><!-- Tab panes -->
                            </div>
                            <div class="col-12 col-md-12 p-2 m-0 card">
                                <div class="row p-0 m-0">
                                    <div class="col-12 col-md-6 p-sm-2 p-0 d-sm-block d-none">
                                        <div id="map"></div>
                                    </div>
                                    <div class="col-12 col-md-6 p-0 m-0">
                                        <div class="tab-content">
                                            <div class=" tab-pane active" id="tabs-1" role="tabpanel">
                                                <?php include "pages/full_member.php"; ?>
                                            </div>
                                            <div class=" tab-pane " id="tabs-2" role="tabpanel">
                                                <?php include "pages/ass_member.php"; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <?php
    include './include/script.php';
    include "./include/footer.php"; ?>
</body>