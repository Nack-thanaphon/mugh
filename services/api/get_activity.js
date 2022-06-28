var html, data;

$(document).ready(function () {
    activity();
})

function activity() {

    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://www.info-Mugh.com/api/get_activity.php",
        data: {},
        success: function (data) {

            data = data.result;
            if (data != '') {
                for (var i = 0; i < data.length; i++) {
                    ac = ` 
                    <li class="row m-0 p-0 py-3  swiper-slide  mx-2">
                    <div class="col-4 m-0 p-0   d-flex flex-column text-sm-center  text-start">
                        <h6 class="text-secondary">${data[i].end_date}</h6>
                        <small class="p-0 m-0 ">${data[i].address}</small>
                    </div>
                    <div class="col-8 m-0 p-0 ">
                        <h1 class="fs-sm-1 fs-5">${data[i].title}</h1>
                    </div>
                </li>
           `
                    $('#activity').append(ac);
                };
            } else {
                $('#activity').html('ไม่มีข้อมูล');
            }

        },
        error: function (err) {

            console.log("bad", err)
        }
    })

}
