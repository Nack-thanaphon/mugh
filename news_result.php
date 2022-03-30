<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>



<div class="container">
    <div class="col-md-12">
        <br />
        <div class="row filter_data">

        </div>
    </div>
    <div class="row my-5 p-0  d-flex justify-content-between">
        <div class="col-12 col-md-7 card p-3 mb-3">

            <h3 class="text-primary text-left">ข่าวสารประจำเดือน</h3>
            <h6 id="news_year" class="text-primary"></h6>

            <small class="text-secondary">News Update : Mahidol University Global Health</small>
            <!-- <div class="col-md-3 text-right"><b>Total Data - <span id="total_data"></span></b></div> -->
            <input type="hidden" name="search" class="form-control" id="search" placeholder="Search Here" onkeyup="load_data(this.value);" />


            <div class="row my-4 m-0 p-0" id="news_result">

            </div>
            <div class="row m-0 p-0 align-self-center">
                <div id="pagination_link"></div>
                <!-- <div class="col-12 m-0 p-0 m-auto ">
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
                </div> -->
            </div>
        </div>
        <div class="col-12 col-md-4 card p-3 ">
            <?php include './include/aside.php' ?>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        var baseUrl = (window.location).href; // You can also use document.URL
        var month = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
        console.log(1)
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "https://www.info-mugh.com/api/search_news.php",
            data: {
                month: month,
            },
            success: function(data) {


                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += `         <div class=" col-12 col-sm-4 p-2 m-0 my-1 news-card-all">
                <a href="./single_news.php?id=${data[i].id}" data-id="${data[i].id}" id="singlenews"
                class="btn col-12 p-0 m-0 "> 
                  <img class="card-img-top" src="https://info-mugh.com/bos/${data[i].image}"alt="${data[i].name}">
                </a>
                <p class="badge badge-pill badge-primary m-0 ">${data[i].date}</p>
                <strong class="py-1 name">${data[i].name}</strong>
            </div>`;

                    $("#news_year").append(data[i].year)
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