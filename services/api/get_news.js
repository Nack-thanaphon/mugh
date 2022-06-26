var html, data;
$(document).ready(function () {
    newsrender();
})

function newsrender() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-Mugh.com/api/get_news_limit3.php",
        data: {},
        success: function (data) {
            data = data.result;
            if (data != '') {
                for (var i = 0; i < data.length; i++) {
                    $news = `
                    
                    <div class=" col-sm-4 col-12 swiper-slide ">
                    <div class="m-2">
                    <div class="card mx-auto" style="width: 18rem;">
                    <a href="./single_news.php?id=${data[i].id}" data-id="${data[i].id}" > 
                            <img src="https://info-Mugh.com/bos/${data[i].image}"alt="${data[i].name}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">${data[i].name}</p>
                                <small>${data[i].date}</small>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

                
           `
                    $('#news').append($news);
                };
            } else {
                $('#news').html('ไม่มีข้อมูล')
            }
        },
        error: function (err) {
            consolelog(err)
        }
    })

}