<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <?php

    include "./database/connect.php";

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET["id"])) {
            $stmt =  $conn->prepare("SELECT * FROM tbl_news WHERE n_id = '" . $_GET["id"] . "'");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }



    ?>

    <?php foreach ($result as $row) : ?>
        <meta property="og:title" content="<?php echo $row['n_name']; ?>">
        <title>Mugh | <?php echo $row['n_name']; ?></title>
        <meta name="keywords" content="<?php echo $row['n_name']; ?>">
        <meta property="og:image" content="https://info-Mugh.com/bos/<?php echo $row['n_image']; ?>">
    <?php endforeach; ?>


    <link rel="icon" href="./img/logo/logo.png" />
    <link href="./assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<?php include './include/navbar.php'; ?>

<body onload="singlenews();">
    <div class="container-fluid p-0">
        <div class="row p-0 m-1 d-flex justify-content-between">
            <div class="col-12 col-md-8 p-sm-3 p-1  my-3">
                <nav aria-label="">
                    <div class="row m-0 p-0 d-none d-sm-block">
                        <div class="col-8">
                            <ol class="breadcrumb bg-transparent p-0 my-2">
                                <li class="breadcrumb-item"><a href="./">หน้าหลัก</a></li>
                                <li class="breadcrumb-item"><a href="#">ข่าวสาร</a></li>
                            </ol>
                        </div>

                    </div>
                </nav>
                <h2 class="text-primary font-weight-bold">ข่าวสารประจำเดือน</h2>
                <small class="text-secondary">Newsupdate : Asean University Health Promotion Network</small>
                <hr>
                <article id="blog-post" class="blog-post">
                    <h3 id="news_title"></h3>
                    <div class="row m-0 p-0 d-flex justify-space-between">
                        <div class="col-12 col-sm-9 ">
                            <div class="addthis_inline_share_toolbox_4p75"></div>
                        </div>

                        <div class="col-12 col-sm-3 text-right">
                            <small id="date"></small><br>
                            <small class="p-0 m-0 " style="font-size: 0.8rem;">
                                เข้าชม
                                <span id="news_views"></span> ครั้ง
                            </small>
                        </div>
                    </div>
                    <hr class="py-2">
                    <div class="col-12 my-2 p-0">
                        <div id="news_image" alt=""></div>
                        <div id="news_detail" class="my-4"></div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-4  p-3 m-0 ">
                <?php include './include/aside.php' ?>
            </div>
        </div>
    </div>
    <?php include 'include/script.php'; ?>

    <script>
        function singlenews() {
            var baseUrl = (window.location).href; // You can also use document.URL
            var id = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "https://www.info-Mugh.com/api/news_viewscounter.php",
                data: {
                    id: id,
                },
                success: function(data) {
                    console.log(data);
                },
                error: function(err) {
                    console.log("bad", err)
                }
            })

        }

        $(document).ready(function() {
            var baseUrl = (window.location).href; // You can also use document.URL
            var id = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "https://www.info-Mugh.com/api/single_news.php",
                data: {
                    id: id,
                },
                success: function(data) {
                    $('#news_title').html('<h3 class="blog-post-title my-3 mx-auto">' + data[0].n_name + '</h3>');
                    $('#news_image').html(
                        '<img style="object-fit: cover; width:100%;"src="https://info-Mugh.com/bos/' +
                        data[0].n_image + '"></img>');
                    $('#news_detail').html(data[0].n_detail);
                    $('#news_views').html(data[0].n_views);
                    $('#date').append(data[0].n_date);

                    console.log("good", err)

                },

                error: function(err) {
                    console.log("bad", err)

                }
            })
        })
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-620dd9c449543115"></script>
    <div class="d-none d-sm-block">
        <?php include './include/footer.php'; ?>
    </div>

</body>