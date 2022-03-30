<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<body>
    <input type="hidden" id="web_static" name="c_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">

    <div class="container">
        <div class="row">
            <div class="col-12 p-0 m-0">
                <?php include 'pages/hero_banner.php'; ?>
            </div>

            <div class="col-12 p-0 m-0 ">
                <div data-aos="fade-in" class="col-12 m-0 p-0  d-none d-md-block">
                    <?php include "pages/news-hero.php" ?>
                </div>
            </div>
            <div class="col-12 p-0 m-0">
                <div class="date">
                    <p><?php echo date("l j  F Y "); ?></p>
                </div>
            </div>
            <!-- <div class="col-12 p-0 m-0">
                <div data-aos="fade-in" class="col-12 m-0 p-0 my-3 ">
                    <?php include "pages/covid.php" ?>
                </div>
            </div> -->

            <div data-aos="fade-up" class="col-12 py-3 p-0 m-0 my-1  ">
                <?php include "pages/news.php" ?>
            </div>
            <div class="col-12 p-0 m-0 w-100">

                <div class="col-12 col-sm-12 py-2 my-3 p-0 ">
                    <?php include "pages/activity_bar.php"; ?>

                </div>
            </div>
        </div>
    </div>

    <?php
    include "include/script.php";
    include "include/footer.php"; ?>
    <script src="services/api/get_activity.js"></script>
    <script src="services/api/get_news.js"></script>
    <script src="services/api/web_stat.js"></script>
    <script src="services/api/get_download.js"></script>
    <script src="services/api/get_newsletter.js"></script>
    <script src="services/api/get_banner.js"></script>
</body>