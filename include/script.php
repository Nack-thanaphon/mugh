<a id="button"><i class="fas fa-chevron-up"></i></a>

<div id="fb-root"></div>

<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
var chatbox = document.getElementById('fb-customer-chat');
chatbox.setAttribute("page_id", "101660309178278");
chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
window.fbAsyncInit = function() {
    FB.init({
        xfbml: true,
        version: 'v13.0'
    });
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<script src="assets/js/main.js"></script>
<script src="services/api/map.js"></script>
<!-- <script src="services/api/covid.js"></script> -->
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbXIuLxd1v6Mdx1JZIwIHWgkJJfLp7XBM&callback=initMap&libraries=places,geometry&channel=GMPSB_locatorplus_v4_cABCDE"
    async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
AOS.init();
</script>

</body>