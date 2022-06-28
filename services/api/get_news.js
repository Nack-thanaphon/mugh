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
                    
                <div class=" col-sm-3 col-12 swiper-slide  ">
                    <div class="shadow-sm">
                    <a href = "./single_news.php?id=${data[i].id}" class="text-decoration-none" data-id="${data[i].id}" > 
                        <div class="card mx-auto" style="width: 18rem;">
                             <img src="https://info-Mugh.com/bos/${data[i].image}" class="card-img-top" alt="...">
                            <div class="card-body">
                        <b class="fw-bold">${data[i].type}</b>
                        <h4 class="card-text">${data[i].name}</h4>
                        <small class="text-muted">${data[i].date}</small>
                    </div>
                    </a>
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