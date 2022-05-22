
//End Nav Slidepicture

// To top Button
var btn = $('#button');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});
// End To top Button



// google map

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
});

function initMap() {

    const uluru = { lat: 13.7948786, lng: 100.3194293 };

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: uluru,
    });

    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}
// end google map



// google translate

function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'en', includedLanguages: 'th,en,', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
}
$('document').ready(function () {
    $("#google_translate_element").on("click", function () {
        // Change font family and color
        $("iframe")
            .contents()
            .find(
                ".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *"
            )
            .css({
                color: "#544F4B",
                "font-family": "Roboto",
                width: "100%"
            });
        // Change menu's padding
        $("iframe")
            .contents()
            .find(".goog-te-menu2-item-selected")
            .css("display", "none");

        // Change menu's padding
        $("iframe").contents().find(".goog-te-menu2").css("padding", "0px");

        // Change the padding of the languages
        $("iframe").contents().find(".goog-te-menu2-item div").css("padding", "20px");

        // Change the width of the languages
        $("iframe").contents().find(".goog-te-menu2-item").css("width", "100%");
        $("iframe").contents().find("td").css("width", "50%");

        // Change hover effects
        $("iframe")
            .contents()
            .find(".goog-te-menu2-item div")
            .hover(
                function () {
                    $(this)
                        .css("background-color", "#4385F5")
                        .find("span.text")
                        .css("color", "white");
                },
                function () {
                    $(this)
                        .css("background-color", "white")
                        .find("span.text")
                        .css("color", "#544F4B");
                }
            );

        // Change Google's default blue border
        $("iframe").contents().find(".goog-te-menu2").css("border", "none");

        // Change the iframe's box shadow
        $(".goog-te-menu-frame").css(
            "box-shadow",
            "0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)"
        );

        // Change the iframe's size and position?
        $(".goog-te-menu-frame").css({
            height: "100%",
            width: "100%",
            top: "-10px"
        });
        // Change iframes's size
        $("iframe").contents().find(".goog-te-menu2").css({
            height: "100%",
            width: "100%"
        });
    });
});




$(document).ready(function () {
    setInterval(function () {
        $(".hero-slider .slider img").toggleClass("banner").toggleClass("scale-animation");
    }, 6000);
});

