<div class="row p-2 my-2">
    <!-- <div class="col-12 m-0 p-0 mb-3">
        <div class="input-group col-12 p-0 m-0">
            <input class="form-control p-2" type="search" placeholder="ค้นหา.." name="search" id="search">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
        <ul class="list-group" id="result"></ul>
    </div> -->

    <div class="row p-0 m-0 my-2">
        <div class="col-12 mx-auto ">
            <div class="col-12 m-0 p-0 m-auto">
                <h3 class="p-0 m-0 text-uppercase">Monthly News</h3>
            </div>

            <div class=" p-0 m-0" id="news_update">
            </div>

        </div>
    </div>
</div>

<div class="row p-2 my-2">

    <div class="col-12 mx-auto ">
        <div class="col-12 m-0 p-0 m-auto">
            <h3 class="p-0 m-0 text-uppercase" id="mounth-header"></h3>
        </div>
        <ul id="month_list">

        </ul>
    </div>


</div>


<script>
    $(document).ready(function() {

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-Mugh.com/api/news_aside.php",
            data: {},
            success: function(data) {
                data = data.result;
                for (var i = 0; i < data.length; i++) {
                    news_update = `
            <a href="./single_news.php?id=${data[i].id}" class="text-primary" style="text-decoration: none;">    
            <div class="row p-0 m-0 my-2" id="news_update">
            <div class="col-3  p-0 m-auto">
            <img class="mr-1 m-0  w-100" width="100%" height="50px"src="https://www.info-Mugh.com/bos/${data[i].image}"alt="">
            </div>
            <div class="col-9 m-0 pl-1 text-start">
                <h6 class="p-0 m-0 name">${data[i].name}</h6>
                <small class="p-0 m-0 text-secondary">${data[i].date}</small>
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

    // $(document).ready(function() {
    //     $.ajaxSetup({
    //         cache: false
    //     });
    //     $('#search').keyup(function() {
    //         $('#result').html('');
    //         $('#state').val('');
    //         var searchField = $('#search').val();
    //         var expression = new RegExp(searchField, "i");

    //         $.getJSON('data.json',
    //             function(data) {
    //                 $.each(data, function(key, value) {
    //                     if (value.name.search(expression) != -1 ||
    //                         value.location.search(expression) != -1) {

    //                         $('#result').append(
    //                             '<li class="list-group-item link-class"><img src="' + value
    //                             .image +
    //                             '" height="40" width="40" class="img-thumbnail" /> ' + value
    //                             .name + ' | <span class="text-muted">' + value.location +
    //                             '</span></li>');
    //                     } else {
    //                         $("#result").html('<p class="py-3">-ไม่มีผลการค้นหา-</p>');

    //                     }
    //                 });
    //             });
    //     });

    //     $('#result').on('click', 'li', function() {
    //         var click_text = $(this).text().split('|');
    //         $('#search').val($.trim(click_text[0]));
    //         $("#result").html('');
    //     });
    // });
</script>