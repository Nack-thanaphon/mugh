var html, data;

$(document).ready(function() {
    activity();
})

function activity() {

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-mugh.com/api/get_activity.php",
        data: {},
        success: function(data) {

            data = data.result;
            for (var i = 0; i < data.length; i++) {
                $ac = `
            <a href="./single_activity.php?event=${data[i].id}" class="actcard p-2 card mx-3">
                <div class="card-left">
                        <p class="badge badge-pill badge-primary"><i class="fas fa-calendar"></i> ${data[i].start_time}-${data[i].end_time}</p>
                        <p class="h5">${data[i].end_date}</p><br>

                        </div>
                    <div class="card-right">
                        <div class="card-right-top">
                        <h4>${data[i].title}</h4>
                            <br>
                        <p><i class="fas fa-map-marker-alt"></i>${data[i].address} </p>
                        </div>

                        </div>
                    </a>
       `
                $('#activities').slick('slickAdd', $ac);
            };

        },
        error: function(err) {
            $('#activities').html('-ไม่มีข่าวสาร-');
            console.log("bad", err)
        }
    })

}

$(document).ready(() => {

    $('#activities').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        centerMode: true,
        slidesToShow: 1,

    });
    $('#activities').slick('slickRemove');
});