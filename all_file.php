<?php include './template/include/header.php'; ?>
<?php include './template/include/navbar.php'; ?>





<div class="container">
    <div class="col-md-12">
        <br />
        <div class="row filter_data">

        </div>
    </div>
    <div class="row my-5 p-0  d-flex justify-content-between">
        <div class="col-12 col-md-7 card p-3 m-1">
            <h3 class="text-primary">เอกสาร</h3>
            <small class="text-secondary">File Download : Asean University Health Promotion Network</small>
            <div class="row my-4 m-0 p-0" id="news_list">

            </div>
            <div class="row m-0 p-0 align-self-center">
                <div class="col-12 m-0 p-0 m-auto ">

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center" style="font-size: 0.8rem;">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 card p-3 m-1">
            <?php include './template/include/aside.php' ?>

        </div>
    </div>


</div>

<script>
    $(document).ready(function() {

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-mugh.com/api/news_by_month.php",

            data: {},
            success: function(data) {
                data = data.result;
                for (var i = 0; i < data.length; i++) {
                    news = `
                <li class="m-2">
                <a href="news_result.php?q=${data[i].name}" >
                <b class="p-0 m-0" id="news_title">${data[i].name}</b>
                </a><br>
                <small class="p-0 m-0" id="news_date"></small>
                </li>`
                    $('#month_list').append(news);

                };
            },

            error: function(err) {
                console.log("bad", err)

            }
        })
    })



    $(document).ready(function() {

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-mugh.com/api/get_news.php",
            data: {},
            success: function(data) {
                data = data.result;
                for (var i = 0; i < data.length; i++) {
                    news = `
                <div class="col-12 col-md-4 p-0 m-0">
                    <div class="card shadow-sm p-1 m-2">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1635621259631-9eefa2c922cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="">
                        <div class="card-body m-0 p-1 " style="font-size:1rem;">

                            <div class="col p-0 m-0 my-1">
                                <small class="my-2 m-0 p-0">${data[i].date}</small>
                            </div>
                            <div class="col p-0 m-0 pb-3">
                                <b >${data[i].name}</b>
                            </div>

                            <div class="btn btn-primary  p-0 my-2 w-100">
                                <a href="./single_news.php?id=${data[i].id}" class="text-primary" style="text-decoration: none;">
                                    <p class="m-0 p-1 text-white  text-uppercase">Read more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
          
       `
                    $('#news_list').append(news);
                };

            },
            error: function(err) {

                $('#news').html('-ไม่มีข่าวสาร-');
            }
        })

    })
    $(document).ready(function() {

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-mugh.com/api/get_news.php",
            data: {},
            success: function(data) {
                data = data.result;
                for (var i = 0; i < data.length; i++) {
                    news_update = `
                <div class="row p-0 m-0 my-2" id="news_update">
                <div class="col-2 m-0 p-0 m-auto">
                    <img width="50" height="50"
                        src="https://images.unsplash.com/photo-1647597411979-b5e4a155281b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=433&q=80"
                        alt="">
                </div>
                <div class="col-10 m-0 p-0 text-start">
                    <strong class="p-0 m-0">${data[i].name}</strong><br>
                    <small class="p-0 m-0">Last Updated: ${data[i].date}</small>
                </div>
                </div>
          
       `
                    $('#news_update').append(news_update);
                };

            },
            error: function(err) {

                $('#news').html('-ไม่มีข่าวสาร-');
            }
        })

    })
</script>

<div class="d-none d-sm-block">
    <?php include './template/include/footer.php'; ?>
</div>
<?php

include './template/include/script.php';

?>
</body>