<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="col-12 text-center py-2 my-auto" id="text-slide">
    <div class="d-flex justify-content-between align-items-center breaking-news">
        <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center   py-2 text-primary px-1 news"><span class="d-flex align-items-center">
                <h4 class="p-0 m-0">&nbsp;Announcement</h4>
            </span></div>
        <marquee class="news-scroll " behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            <a href="https://hurs.mahidol.ac.th" target="blank">
                <h3 class="m-0 p-0 text-white">Welcome to MUGH | Mahidol University Global Health</h3>
            </a>
        </marquee>

    </div>
</div>
<?php include './pages/modal.php'; ?>


<body>
    <input type="hidden" id="web_static" name="c_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <div class="container-fluid m-0 p-0 mx-auto mb-3">
        <div class="row m-0 p-0 ">
            <div class="col-12 m-0 p-0">
                <div class="row my-0  m-0 p-0  ">
                    <div class="col-12 col-sm-12  main_card  d-none d-sm-block ">
                        <div class="row m-0 p-0 d-flex justify-content-end">
                            <div class="col-12 col-sm-6 p-4 p-sm-5 text-white my-auto ">
                                <div class="my-4 text-justify  bg-transparent shadow-sm card p-3 d-sm-none">
                                    <ul>
                                        <li>
                                            In recognition of contribution in healthcare industry as well as its dedication to improving life and bringing better health to the society,
                                        </li>
                                        <li>
                                            Mahidol University Global Health (Mugh) was initiated in October 2012 with the aim to bridge the gap between interdisciplinary faculties and network with other universities and organizations at the national, regional and global levels in the context of global health
                                        </li>
                                    </ul>
                                </div>
                                <br>


                                <a href="./about.php" class="btn btn-primary text-white d-none d-sm-block col-12" style="margin-top:150px">
                                    <h3 class="text-uppercase font-weight-bold p-0 m-0">Learn More</h3>
                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12  d-sm-none d-block m-0 p-0  main_card_mo  ">
                        <div class="row m-0 p-0 d-flex justify-content-end main_card_bg">
                            <div class="col-12 col-sm-6 p-4 p-sm-5 text-white my-auto ">

                                <div class="my-4 text-justify  bg-transparent shadow-sm card p-3 d-sm-none">
                                    <div class="col-12 text-center text-white">
                                        <h1 class="text-uppercase font-weight-bold">mugh</h1>
                                        <p>Mahidol University Global Health</p>
                                    </div>
                                    <ul>
                                        <li>
                                            In recognition of contribution in healthcare industry as well as its dedication to improving life and bringing better health to the society,
                                        </li>
                                        <li>
                                            Mahidol University Global Health (Mugh) was initiated in October 2012 with the aim to bridge the gap between interdisciplinary faculties and network with other universities and organizations at the national, regional and global levels in the context of global health
                                        </li>
                                    </ul>
                                </div>
                                <br>
                                <a href="./about.php" class="btn btn-primary text-white d-sm-none  d-block col-12 col-sm-3">
                                    <p class="text-uppercase font-weight-bold p-0 m-0">Learn More</p>
                                </a>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-12  my-0  d-none d-sm-block">
                <div class="row " id="banner">
                    <div class="col-12 m-0 p-0 ">
                        <div class="slideshow"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 py-sm-5">
            <div class="row m-0 p-0 card  border py-5">
                <div class="col-12">
                    <div class="row m-0 p-0">
                        <div class="col-8">
                            <h2 class="text-uppercase fw-bold">News update</h2>
                        </div>
                        <div class="col-4 text-end">
                            <a href="./news.php" class="text-decoration-none">
                                <h3 class="btn btn badge bg-primary text-wrap">SEE ALL ></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper mySwiper ">
                    <div class="swiper-wrapper " id="news">
                        <!-- <div class=" col-sm-3 col-12 swiper-slide   m-0 p-0 "> -->
                        <!-- <div class=""> -->
                        <!-- <div class="card mx-auto" style="width: 18rem;">
                                    <img src="https://images.unsplash.com/photo-1656110899438-ea993f5e3f9d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <b class="fw-bold">Lorem, ipsum dolor.</b>
                                        <h4 class="card-text">Some quick example text to build on </h4>
                                        <small class="text-muted">Lorem ipsum dolor sit.</small>
                                    </div>
                                </div> -->
                        <!-- </div> -->
                        <!-- </div> -->

                    </div>

                </div>


            </div>
        </div>

        <div class="col-12  py-sm-5">
            <div class="row m-0 p-0 card border py-5">
                <div class="col-12">
                    <div class="row m-0 p-0 mb-3">
                        <div class="col-8">
                            <h2 class="text-uppercase fw-bold m-0 p-0">events</h2>
                        </div>
                        <div class="col-4 text-end">
                            <a href="./activity.php" class="text-decoration-none">
                                <h3 class="btn btn badge bg-primary text-wrap">SEE ALL ></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 swiper mySwiper">
                    <ul class="m-0 p-0  swiper-wrapper " id="activity">
                        <!-- <li class="row m-0 p-0 py-3  swiper-slide  mx-2">
                            <div class="col-4 m-0 p-0   d-flex flex-column text-sm-center  text-start">
                                <h6 class="text-secondary">10 December 2022</h6>
                                <small class="p-0 m-0 ">Mahidol University</small>
                            </div>
                            <div class="col-8 m-0 p-0 ">
                                <h1 class="fs-sm-1 fs-5">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</h1>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12  py-sm-5">
            <div class="row m-0 p-0 card border py-5">
                <div class="row m-0 p-0">
                    <div class="col-12">
                        <div class="row m-0 p-0 mb-3">
                            <div class="col-8 ">
                                <h2 class="text-uppercase fw-bold m-0 p-0">Newsletter</h2>
                            </div>
                            <div class="col-4 text-end">
                                <a href="./newsletter.php" class="text-decoration-none">
                                    <h3 class="btn btn badge bg-primary text-wrap">SEE ALL ></h3>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <ul class="m-0 p-0" id="download">
                        <!-- <li class="row m-0 p-0  mx-2">
                            <div class="col-4 m-0 p-0 ">
                                <h1 class="fs-sm-1 fs-5 text-start">Lorem, ipsum.</h1>
                            </div>
                            <div class="col-8 m-0 p-0 ">
                                <h4 class="fs-sm-1 fs-5">Lorem ipsum dolor sit amet.Lorem </h4>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="row m-0 p-0">
            <div class="col-12  p-0   my-3 ">
                <div class="row  h-100 m-0 text-center py-4 ">
                    <div class="col-12 col-sm-8 mx-auto  text-primary  ">
                        <h2 class="font-weight-bold text-uppercase ">Find Your Topic
                        </h2>
                        <small class="text-secondary">Conference Document Activity News update
                        </small><br>

                        <form id="search" method="POST" class="my-4" action="./search_result.php">
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control py-4" id="search_detail" name="search_detail" placeholder="Find this website...">
                                <div class="input-group-prepend">
                                    <button class="btn btn input-group-text" type="submit" id="search_btn" value="submit" disabled>
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- <div class="input-group">
                                <input type="text" id="search_detail" name="search_detail" class="form-control py-4 " placeholder="Find this website..">
                            </div>
                            <button class="btn btn-primary col-12 col-md-8 col-sm-8 mx-auto  p-2 my-3 w-100" type="submit" id="search_btn" value="submit" disabled>
                                <small class="fa-solid fa-magnifying-glass">Click here to go</small>
                                <h4 class="font-weight-bold p-0 m-0">
                                    find now
                                </h4>
                            </button> -->
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    include "include/script.php";
    include "include/footer.php"; ?>
    <script>
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

        function toggle() {
            let viewportWidth = window.innerWidth;
            var myModal = document.getElementById('myModal')

            if (viewportWidth < 900) {
                new bootstrap.Modal(myModal).hide();
            } else {
                new bootstrap.Modal(myModal).show();
            }
        }

        toggle();
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script src="services/api/get_activity.js"></script>
    <script src="services/api/get_news.js"></script>
    <script src="services/api/web_stat.js"></script>
    <script src="services/api/get_download.js"></script>
    <script src="services/api/get_newsletter.js"></script>
    <script src="services/api/get_banner.js"></script>
</body>