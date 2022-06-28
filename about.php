<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>

<div class="container-fluid">
    <div class="row ">
        <div class="col-12 bg-primary py-5 text-center text-white">
            <div class="py-2">
                <h1>ABOUT US</h1>
            </div>
            <!-- <small>Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./</small> -->
        </div>
        <div class=" col-md-3 col-12 mt-5">
            <div class="position-sticky  mb-5" style="top: 2rem;">
                <div class="text-black rounded">
                    <div class="bg-white shadow-sm p-3 text-white ">
          
                        <div class="nav flex-column nav-pills me-3 text-dark" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" type="button"  id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"> Our
                                GOAL</a>
                            <a class="nav-link text-uppercase"  type="button" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Our Mission</a>
                            <a class="nav-link text-uppercase"  type="button" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Our Objectives</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8 mb-5 mx-auto col-12 tab-content" id="v-pills-tabContent">

            <div class=" tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <article class="tab-pane well active in active" id="Whoweare">
                    <img width="100%" src="./img/mugh.png" alt="">
                    <h2 class="blog-post-title mt-4 text-primary" id="Whoweare">Our Goal</h2>
                    <h3>Mahidol University Global Health Coordination Unit

                    </h3>
                    <br>
                    <p> &nbsp; &nbsp; &nbsp;In recognition of contribution in healthcare industry as well as its dedication to improving
                        life and bringing better health to the society, Mahidol University Global Health (MUGH) was
                        initiated in October 2012 with the aim to bridge the gap between interdisciplinary faculties
                        and network with other universities and organizations at the national, regional and global
                        levels in the context of global health in order to achieve health equity for better health
                        of all.
                    </p>
                </article>

            </div>



            <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <article>
                    <h2 class="blog-post-title mt-5 text-primary" id="Whoweare">Our Mission</h2>
                    <h3>Mahidol University Global Health Coordination Unit</h3>
                    <hr>
                    <br>
                    <p>
                    <h3 class="text-primary">Enhance Ability</h3>
                    <p> &nbsp;&nbsp;&nbsp;Global Health related academic degree programs, trainings and workshops are our vehicle to
                        build and drive the collective capacities for local and international experts to play the
                        key role in Global Health.</p>
                    <h3 class="text-primary">Reserch</h3>
                    <p> &nbsp;&nbsp;&nbsp;MUGH partners and engages in research collaborative works on Global Health by generating
                        insights, synthesizing Global Health related information and facilitating the development of
                        research works on Global Gealth.</p>
                    <h3 class="text-primary">Connection</h3>
                    <p>
                        &nbsp;&nbsp;&nbsp;MUGH aims to build partnership and collaboration among relevant partners and stakeholders on
                        Global Health at the national, regional and global levels to contribute to developing and
                        advocating the Global Health Policy.
                    </p>

                </article>
            </div>
            <div class="tab-pane fade  " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <article>
                    <h2 class="blog-post-title mt-5 text-primary" id="Whoweare">Our Objectives</h2>
                    <div class="pt-3">
                        <p>1.To create a platform for Global Health in Mahidol University and international
                            partnership
                        </p>
                        <p>2.To organize the advocacy meetings with partners at national and international </p>
                        <p>3.To create Global Health Education program including both of local and international
                            short-term
                            training programs</p>
                        <p> To develop the Mahidol University Active Ageing Policy Watch Center (MAPC)</p>
                    </div>
                    </p>
                </article>
            </div>

        </div>

    </div>


</div>



<?php

include 'include/script.php';
include "include/footer.php"; ?>