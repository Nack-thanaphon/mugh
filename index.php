<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<body>
    <input type="hidden" id="web_static" name="c_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <div class="container m-0 p-0 mx-auto mb-3">
        <div class="row m-0 p-0 ">
            <div class="col-12 m-0 p-0">
                <div class="row my-0 my-sm-3 m-0 p-0">
                    <div class="col-12 col-sm-12  main_card">
                        <div class="row main_card_bg ">
                            <div class="col-12 p-4 p-sm-5 text-white  ">
                                <h1 class="  font-weight-bold ">MUGH</h1>
                                <h5>Mahidol University Global Health</h5>
                                <p class="my-4"> In recognition of contribution in healthcare industry as well as its dedication to improving
                                    life and bringing better health to the society, Mahidol University Global Health (MUGH) was
                                    initiated in October 2012 with the aim to bridge the gap between interdisciplinary faculties and
                                    network with other universities and organizations at the national, regional and global levels in
                                    the context of global health</p>
                                <br>
                                <a href="./about.php" class="btn btn-primary text-white  col-12 col-sm-3">
                                    <p class="text-uppercase font-weight-bold p-0 m-0">Learn More</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-12 col-sm-12 my-0  my-sm-3  ">
                        <div class="row " id="banner">
                            <div class="col-12 m-0 p-0 ">
                                <div class=" text-start m-3 p-0 d-block d-sm-none">
                                    <h5 class="text-uppercase font-weight-bold p-0 m-0">Bannerupdate</h5>
                                </div>
                                <div class="slideshow"></div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row m-0 p-0">
                    <div class="col-12 col-sm-4  p-0 pl-0   my-3 ">
                        <div class="row bg-light  h-100 m-0 p-0  patt">
                            <div class="col-12 py-3 p-sm-4  text-dark  ">
                                <div class="row m-0  p-0 d-flex justify-content-center mb-3">
                                    <hr>
                                    <div class="col-6 text-start m-0 p-0 ">
                                        <h5 class="text-uppercase font-weight-bold p-0 m-0">Newsupdate</h5>
                                    </div>
                                    <div class="col-6 text-right m-0 p-0 ">
                                        <a href="./news.php">อ่านทั้งหมด</a>
                                    </div>
                                </div>
                                <div class="row p-0 m-0 " id="news">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4  p-0 pl-0  pl-sm-3 my-3 ">
                        <div class="row bg-light  h-100 m-0 p-0  patt">
                            <div class="col-12 py-3 p-sm-4 text-dark  ">
                                <div class="row m-0 p-0 d-flex justify-content-between mb-3">
                                    <hr>
                                    <div class="col-6 text-start m-0 p-0 ">
                                        <h5 class="text-uppercase font-weight-bold p-0 m-0">Download</h5>
                                    </div>
                                    <div class="col-6 text-right m-0 p-0 ">
                                        <a href="./file.php">อ่านทั้งหมด</a>
                                    </div>
                                </div>
                                <ul class="" id="download">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4  p-0 pl-0  pl-sm-3 my-3 ">
                        <div class="row bg-light  h-100 m-0 p-0  patt">
                            <div class="col-12 py-3 p-sm-4 text-dark  ">
                                <div class="row m-0 p-0 d-flex justify-content-between mb-3">
                                    <hr>
                                    <div class="col-6 text-start m-0 p-0 ">
                                        <h5 class="text-uppercase font-weight-bold p-0 m-0">Activity</h5>
                                    </div>
                                    <div class="col-6 text-right m-0 p-0 ">
                                        <a href="./activity.php">อ่านทั้งหมด</a>
                                    </div>
                                </div>
                                <ul class="" id="activity">

                                </ul>

                                <!-- <div class="btn btn-primary w-100 text-uppercase font-weight-bold">Read all</div> -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-12  p-0   my-3 ">
                        <div class="row  h-100 m-0 text-center py-4 ">
                            <div class="col-12 col-sm-8 mx-auto  text-primary  ">
                                <h2 class="font-weight-bold text-uppercase ">ค้นหา</h2>
                                <h4>ท่านสามารถค้นหาได้แล้วที่นี้</h4>
                                <small class="text-secondary">การประชุม เอกสาร กิจกรรม ข่าวสาร</small><br>

                                <small class="text-danger">**Coming Soon</small>
                                <form id="search" method="POST" class="my-4" action="./search_result.php">
                                    <div class="input-group">
                                        <input type="text" id="search_detail" name="search_detail" class="form-control py-4 " placeholder="Find this website..">
                                    </div>
                                    <button class="btn btn-primary col-12 col-md-8 col-sm-8 mx-auto  p-2 my-3 w-100" type="submit" id="search_btn" value="submit" disabled>
                                        <small class="fa-solid fa-magnifying-glass">Click here to go</small>
                                        <h4 class="font-weight-bold p-0 m-0">
                                            find now
                                        </h4>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "include/script.php";
    include "include/footer.php"; ?>
    <!-- <script> search
        $('#search_detail').change(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var val = $('#search_detail').val();
            if (val == '') {
                $('#search_btn').attr('Disabled', true);
                return false
            } else {
                $('#search_btn').attr('Disabled', false);
                return true
            }

        });
    </script> -->
    <script src="services/api/get_activity.js"></script>
    <script src="services/api/get_news.js"></script>
    <script src="services/api/web_stat.js"></script>
    <script src="services/api/get_download.js"></script>
    <script src="services/api/get_newsletter.js"></script>
    <script src="services/api/get_banner.js"></script>
</body>