var html, data;

$(document).ready(function() {
    render();
});

function render() {

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-mugh.com/api/get_news.php",
        data: {},
        success: function(data) {
            data = data.result;
            for (var i = 0; i < data.length; i++) {
                $news = `
            <div class="items">
                <img src="https://info-mugh.com/BOS/${data[i].image}"
                    alt="">
                <h5 class="py-3">${data[i].name}&hellip;</h5>
                <p class="py-3" >${data[i].date}</p>
                <div class="wrapper text-left">                 
                    <a href="./single_news.php?id=${data[i].id}" data-id="${data[i].id}" id="singlenews" class="btn col-12 p-2">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
       `
                $('.slideshow').slick('slickAdd', $news);
            };

        },
        error: function(err) {

            console.log("bad", err)
        }
    })

}
$(document).ready(() => {
    $('.slideshow').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        slide: 'div',
        cssEase: 'linear'
    });
    $('.slideshow').slick('slickRemove');
});