<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>

<div class="container">
    <div class="row py-5">
        <div class="col-12 p-0 m-0">
        </div>


        <div class=" col-md-3 col-12">
            <nav aria-label="">
                <ol class="breadcrumb bg-transparent p-0 my-2">
                    <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="#">Our Mission</a></li>

                </ol>
            </nav>
            <div class="position-sticky bg-secondary  mb-5" style="top: 2rem;">
                <div class=" bg-secondary text-black rounded">
                    <div class="bg-dark p-3 text-white ">
                        <h4 class="fst-italic text-center">Our Mission</h4>
                        <div class="nav flex-column nav-pills text-start" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active  text-uppercase" id="v-pills-home-tab" data-toggle="pill"
                                href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> Our
                                GOAL</a>
                            <a class="nav-link text-uppercase" id="v-pills-profile-tab" data-toggle="pill"
                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">Our Mission</a>
                            <a class="nav-link text-uppercase" id="v-pills-messages-tab" data-toggle="pill"
                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                aria-selected="false">Our Objectives</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8 mb-5 mx-auto col-12 tab-content" id="v-pills-tabContent">

            <div class=" tab-pane fade show active" id="v-pills-home" role="tabpanel"
                aria-labelledby="v-pills-home-tab">

                <article class="tab-pane well active in active" id="Whoweare">
                    <img width="100%" src="./img/mugh.png" alt="">
                    <h2 class="blog-post-title mt-4" id="Whoweare">Our Goal</h2>
                    <h6>ASEAN University Network – Health Promotion Network</h6>
                    <br>
                    <p>Enhance the strong collaboration among and between health and non-health researchers in the ASEAN
                        region
                        Facilitate capacity-building activities in the area of health promotion to reduce the capacity
                        gap among ASEAN countries
                        Facilitate exchange and mobility for students, university faculty staff and health-care
                        professionals for experiential learning and research collaboration on issues related to health
                        promotion
                        Work collaboratively towards empowering communities for good health in the region
                        Advocate for relevant health policies at national and regional level related to health promotion
                        Minimize the economic burden of health care for the region through health promotion
                        Support network activities for sustainability
                    </p>
                </article>

            </div>



            <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <article>
                    <h2 class="blog-post-title mt-5" id="Whoweare">Our Mission</h2>
                    <h6>ASEAN University Network – Health Promotion Network</h6>
                    <br>
                    <p>To serve as a platform for ASEAN higher education institutions for collaboration among themselves
                        and with other key stakeholders for the purpose of health promotion in the ASEAN region.
                        To share knowledge, skills and resources among the network members in order to build capacity
                        for health promotion and to develop innovative solutions to common health challenges in the
                        region.
                    </p>
                </article>
            </div>
            <div class="tab-pane fade  " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <article>
                    <h2 class="blog-post-title mt-5" id="Whoweare">Our Objectives</h2>
                    <ul>
                        <li>To create a platform for Global Health in Mahidol University and international
                            partnership
                        </li>
                        <li> To organize the advocacy meetings with partners at national and international </li>
                        <li>To create Global Health Education program including both of local and international
                            short-term
                            training programs</li>
                        <li> To develop the Mahidol University Active Ageing Policy Watch Center (MAPC)</li>
                    </ul>
                    </p>
                </article>
            </div>

        </div>

    </div>


</div>



<?php

include 'include/script.php';
include "include/footer.php"; ?>