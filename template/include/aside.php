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
<div class=" p-0 m-0" id="news_update">
    <!-- <div class="col-2 m-0 p-0 m-auto">
                    <img width="50" height="50"
                        src="https://images.unsplash.com/photo-1647597411979-b5e4a155281b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=433&q=80"
                        alt="">
                </div>
                <div class="col-10 m-0 p-0 text-start">
                    <strong class="p-0 m-0">Lorem ipsum dolor sit ametamet.</strong><br>
                    <small class="p-0 m-0">Last Updated: 23 Aug , 2021</small>
                </div> -->
</div>

<div class="row p-2 my-2">
    <div class="col-12 m-0 p-0 m-auto">
        <strong class="p-0 m-0 text-uppercase">ข่าวประจำเดือน</strong>
    </div>

    <div class="row p-0 m-0 my-2">
        <div class="col-12 mx-auto ">
            <ul id="month_list">
                <!-- <li class="m-4" >
                                <a href="">
                                    <b class="p-0 m-0" id="news_title"></b>
                                </a><br>
                                <small class="p-0 m-0" id="news_date"></small>
                            </li> -->
            </ul>
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
            <a href="news_result.php?q=${data[i].date}" >
            <b class="p-0 m-0" id="news_title">${data[i].date}</b>
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
                    news_update = `
            <a href="./single_news.php?id=${data[i].id}" class="text-primary" style="text-decoration: none;">    
            <div class="row p-0 m-0 my-2" id="news_update">
            <div class="col-3  p-0 m-auto">
            <img class="p-0 m-0  w-100" width="70" height="50"src="https://www.info-mugh.com/bos/${data[i].image}"alt="">
            </div>
            <div class="col-9 m-0 pl-1 text-start">
                <h6 class="p-0 m-0 news">${data[i].name}</h6>
                <small class="p-0 m-0">Last Updated: ${data[i].date}</small>
            </div>
            </div>
            </a>
      
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