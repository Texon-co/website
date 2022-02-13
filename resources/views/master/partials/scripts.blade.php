<!-- Vendor JS Files -->
<script src="{{asset('vendor/aos/aos.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script> -->
<script src="{{asset('js/lottie.min.js')}}"></script>
<script>
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('motion-container'),
        path: 'assets/js/motion.json',
        renderer: 'svg',
        loop: true,
        autoplay: true,
        name: "Animation Texon",
    });
</script>

<!-- Template Main JS File -->
<script src="{{asset('js/main.js')}}"></script>