<?php include './template/include/header.php'; ?>
<?php include './template/include/navbar.php'; ?>



<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<div class="container">
    <div class="col-md-12">
        <br />
        <div class="row filter_data">

        </div>
    </div>
    <div class="row my-5 p-0  d-flex justify-content-between">
        <div class="col-12 col-md-7 card p-3 m-1">
            <h3 class="text-primary">ข่าวสารประจำเดือน</h3>
            <small class="text-secondary">MUGH : News find</small>
            <div class="row my-4 m-0 p-0" id="news_result">


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
            <div class="row p-2 my-2">
                <div class="col-12 m-0 p-0 mb-3">
                    <div class="input-group col-12 p-0 m-0">
                        <input class="form-control p-2" type="search" placeholder="ค้นหา.." id="example-search-input">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>

                <div class="col-12 m-0 p-0 m-auto">
                    <strong class="p-0 m-0 text-uppercase">ข่าวอัพเดต</strong>

                </div>

            </div>
            <div class="row p-2 my-2">
                <div class="col-2 m-0 p-0 m-auto">
                    <img width="50" height="50"
                        src="https://images.unsplash.com/photo-1647597411979-b5e4a155281b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=433&q=80"
                        alt="">
                </div>
                <div class="col-10 m-0 p-0 text-start">
                    <strong class="p-0 m-0">Lorem ipsum dolor sit ametamet.</strong><br>
                    <small class="p-0 m-0">Last Updated: 23 Aug , 2021</small>
                </div>

            </div>
            <div class="row p-2 my-2">
                <div class="col-2 m-0 p-0 m-auto">
                    <img width="50" height="50"
                        src="https://images.unsplash.com/photo-1647597411979-b5e4a155281b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=433&q=80"
                        alt="">
                </div>
                <div class="col-10 m-0 p-0 text-start">
                    <strong class="p-0 m-0">Lorem ipsum dolor sit ametamet.</strong><br>
                    <small class="p-0 m-0">Last Updated: 23 Aug , 2021</small>
                </div>

            </div>

            <div class="row p-2 my-2">
                <div class="col-12 m-0 p-0 m-auto">
                    <strong class="p-0 m-0 text-uppercase">ข่าวประจำเดือน</strong>
                </div>

                <div class="row p-0 m-0 my-2">
                    <div class="col-12 m-auto px-3">

                        </ul>

                    </div>
                </div>

            </div>

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
            data = data.result;

            var html = '';
            for (var i = 0; i < data.length; i++) {
                html += ` <div class="col-12 col-md-4 p-0 m-0">
                    <div class="card shadow-sm p-1 m-2">
                        <img class="card-img-top"
                            src="https://images.unsplash.com/photo-1635621259631-9eefa2c922cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="">
                        <div class="card-body m-0 p-1 " style="font-size:1rem;">

                            <div class="col p-0 m-0 my-1">
                                <small class="my-2 m-0 p-0">${data[i].n_create}</small>
                            </div>
                            <div class="col p-0 m-0 pb-3">
                                <b>${data[i].n_name}</b>
                            </div>

                            <div class="btn btn-primary  p-0 my-2 w-100">
                                <a href="./single_news.php?id=${data[i].n_id}" class="text-primary" style="text-decoration: none;">
                                    <p class="m-0 p-1 text-white  text-uppercase">Read more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>`;

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