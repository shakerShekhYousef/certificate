<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $("#banner_carousel").owlCarousel({
        interval: 0, loop: !0, margin: 10, nav: !0, autoplay: !0, animateOut: "fadeOut ",
        navText: ['<a ><i class="fa fa-arrow-left" aria-hidden="true"></i></a>', '<a ><i class="fa fa-arrow-right" aria-hidden="true"></i></a>'],
        autoplayTimeout: 25000, rtl: !0, responsive: { 0: { items: 1 }, 600: { items: 1 }, 1000: { items: 1 } }
    })
</script>
<script src="{{asset('front/js/javascript.js')}}"></script>
