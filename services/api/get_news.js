var html, data;
$(document).ready(function () {
    newsrender();
})

function newsrender() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-aun-hpn.com/api/get_news_limit3.php",
        data: {},
        success: function (data) {
            data = data.result;
            if (data != '') {
                for (var i = 0; i < data.length; i++) {
                    $news = `
                    
                    <div class="col-12  m-0 p-0 bg-white patt mb-2" id="singlenews" >
                    <div class="row m-0 p-0">
                        <div class="col-4 m-0 p-0" >
                        <a href="./single_news.php?id=${data[i].id}" data-id="${data[i].id}" > 
                        <img class="img_new" src="https://info-aun-hpn.com/bos/${data[i].image}"alt="${data[i].name}">
                        </a>                        
                        </div>
                        <div class="col-8 m-0">
                        <small class="badge badge-pill badge-primary m-0 ">${data[i].type}</small>
                            <img width="30px" height="20px" src="https://www.dol.go.th/lampang/PublishingImages/Pages/default/new.gif"alt="${data[i].name}">
                                <br>
                                <small class="text-dark name">${data[i].name}</small>
                    
                                <small class="text-muted">${data[i].date}</small>
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