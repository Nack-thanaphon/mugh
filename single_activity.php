<?php include './template/include/navbar.php'; ?>

<body onload="singlenews();">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 p-0 m-0">
            </div>
            <div class="col-md-9">
                <nav aria-label="">
                    <ol class="breadcrumb bg-transparent p-0 my-2">
                        <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="#">กิจกรรม</a></li>
                    </ol>
                </nav>
                <article id="blog-post" class="blog-post">
                    <h3 id="news_title" class="blog-post-title my-3 mx-auto"></h3>
                    <div class="row d-flex justify-space-between">
                        <p>
                        <div class="col-6 col-sm-8"> <i class="fas fa-calendar-day" aria-hidden="true"></i> January
                            </li> 1, 2022 <br> by <a href="#">Admin</a>

                        </div>
                        </p>
                        <div class="col-6 col-sm-4 text-right">
                            <p style="font-size: 0.8rem;">
                                <i class="fas fa-eye" aria-hidden="true">
                                </i> จำนวนผู้อ่าน |</li><b id="news_views"></b> ครั้ง
                            </p>
                        </div>

                    </div>
                    <div class="col-12 my-2 pb-5 p-0">
                        <div id="news_image" alt=""></div>
                        <div class="col-12 sm-12 w-100 " id="news_detail"></div>
                    </div>
                </article>
                <div class="mt-3">
                    <a id="readmore" href="./" class="btn btn-primary p-sm-2 p-2">
                        back </a>
                </div>
            </div>

            <div class="col-md-3 d-none d-md-block">
                <?php include './template/include/aside.php'; ?>
            </div>
        </div>


    </div>


    <script>
    function singlenews() {
        var baseUrl = (window.location).href; // You can also use document.URL
        var id = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "https://www.info-mugh.com/api/news_viewscounter.php",
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
            url: "https://www.info-mugh.com/api/singlenews.php",
            data: {
                id: id,
            },
            success: function(data) {
                $('#title').html(data[0].n_name);
                $('#news_title').html(data[0].n_name);
                $('#news_image').html(
                    '<img style="object-fit: cover; width:100%;" src="https://info-mugh.com/bos/' +
                    data[0].n_image + '"></img>');
                $('#news_detail').html(data[0].n_detail);
                $('#news_views').html(data[0].n_views);

            },
            error: function(err) {
                console.log("bad", err)

            }
        })

    })




    // var img = localStorage.getItem('success2');


    // $('#news_title').html(localStorage.getItem('success'));
    // $('#news_image').html(localStorage.getItem('success2'));


    // console.log('retrievedObject: ', JSON.parse(img));
    </script>

    <?php

    include './template/include/script.php';
    include "./template/include/footer.php"; ?>
</body>