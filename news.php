<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="row p-0 m-1 d-flex justify-content-between">
    <div class="col-12 col-md-8 card p-3  mb-3">
        <h1 class="text-primary font-weight-bold">ข่าวสารประจำเดือน</h1>
        <small class="text-secondary">Newsupdate : Asean University Health Promotion Network</small>
        <hr>

        <div class="row my-4 m-0 p-0" id="news_list">

        </div>
        <div class="row m-0 p-0 align-self-center">
            <div id="pagination_link"></div>
        </div>
    </div>
    <div class="col-12 col-md-4  p-3 m-0 ">
        <?php include './include/aside.php' ?>
    </div>
</div>
<?php include 'include/script.php'; ?>
<script>
    load_data();

    function load_data(query = '', page_number = 1) {
        var form_data = new FormData();

        form_data.append('query', query);
        form_data.append('page', page_number);

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "https://www.info-Mugh.com/api/process_data.php",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(resp) {

                var data = resp.data;

                var news = '';

                var serial_no = 1;

                if (data.length > 0) {
                    for (var i = 0; i < data.length; i++) {
                        news += `
                    <div class=" col-12 col-sm-4 p-2 m-0 my-1 news-card-all">
                <a href="./single_news.php?id=${data[i].id}" data-id="${data[i].id}" id="singlenews"
                class="btn col-12 p-0 m-0 "> 
                  <img class="card-img-top" src="https://info-Mugh.com/bos/${data[i].image}"alt="${data[i].name}">
                </a>
                <p class="badge badge-pill badge-primary m-0 ">${data[i].date}</p>
                <strong class="py-1 name">${data[i].name}</strong>
            </div>

                `
                        serial_no++;
                        $('#news_list').html(news);

                    }

                } else {
                    $('#news_list').append('<p class="text-center">No Data Found</p>');
                }


                $('#total_data').html(resp.total_data);

                $('#pagination_link').html(resp.pagination);

            }


        })
    }


    $(document).ready(function() {

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-Mugh.com/api/news_by_month.php",
            data: {},
            success: function(data) {
                data = data.result;
                for (var i = 0; i < data.length; i++) {
                    news = `
                        <li class="m-2">
                        <a href="news_result.php?q=${data[i].date}" >
                        <b class="p-0 m-0" id="news_title">${data[i].date}</b>
                        </a><br>
                        <small class="p-0 m-0" id="news_date"></small>
                        </li>`
                    $('#month_list').append(news);
                    $('#mounth-header').html('ข่าวประจำเดือน');

                };
            },

            error: function(err) {
                console.log("bad", err)

            }
        })
    })
</script>

<div class="d-none d-sm-block">
    <?php include './include/footer.php'; ?>
</div>

</body>