<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>



<div class="container-fluid">
    <div class="row p-0 m-1 d-flex justify-content-between">
        <div class="col-12 col-md-8 card p-3  mb-3">
            <h3 class="text-primary text-left">ข่าวสารประจำเดือน</h3>
            <h3 id="news_year" class="text-secondary font-weight-bold"></h3>

            <small class="text-secondary">News Update : Mahidol University Global Health</small>
            <!-- <div class="col-md-3 text-right"><b>Total Data - <span id="total_data"></span></b></div> -->
            <input type="hidden" name="search" class="form-control" id="search" placeholder="Search Here" onkeyup="load_data(this.value);" />
            <div class="row my-4 m-0 p-0" id="news_result">
            </div>
        </div>
        <div class="col-12 col-md-4  p-3 m-0 ">
            <?php include './include/aside.php' ?>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        var baseUrl = (window.location).href; // You can also use document.URL
        var month = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
        console.log(month)
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "https://www.info-mugh.com/api/search_news.php",
            data: {
                month: month,
            },
            success: function(data) {
                data = data.result
                console.log(data)
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += `<div class=" col-12 col-sm-4 p-2 m-0 my-1 news-card-all">
                <a href="./single_news.php?id=${data[i].n_id}" data-id="${data[i].n_id}" id="singlenews"
                class="btn col-12 p-0 m-0 "> 
                  <img class="card-img-top" src="https://info-mugh.com/bos/${data[i].n_image}"alt="${data[i].n_name}">
                </a>
                <small class="text-secondary my-3 ">${data[i].n_date}</small>
                <small class="py-1 name">${data[i].n_name}</small>
            </div>`;

                    $("#news_year").append(data[i].n_date)
                }
                $("#news_result").append(html)

            },

            error: function(err) {
                console.log("bad", err)

            }
        })
    })
</script>



</body>