<!-- Footer -->

<footer class="footer">
    <div class="footer_content">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <!-- Footer About -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_about">
                        <div class="footer_logo">
                            <a href="">
                                <div>Madrasah<span>Ibtidaiyah</span></div>
                                <div>AL Amanah Kec. Cipeundeuy</div>
                            </a>
                        </div>
                        <div class="footer_about_text">

                        </div>
                    </div>
                </div>

                <!-- Footer Contact Info -->
                <div class="col-lg-4 footer_col text-center">
                    <div class="footer_contact">
                        <div class="footer_title">Kontak</div>
                        <ul class="contact_list">
                            <li>+62 852-8314-0325</li>
                            <li><a href="https://wa.me/+6285283140325" target="_blank">Hubungi</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Contact Info -->
                <div class="col-lg-4 footer_col text-center">
                    <div class="footer_contact">
                        <div class="footer_title">Alamat</div>
                        <ul class="contact_list">
                            <li>+Dusun Cibeunying Rt. 22 Rw. 08 Desa Wantilan Kec. Cipeundeuy Kab. Subang 41272</li>
                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <div class="footer_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Hak Cipta &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Dwi Fristtikasari | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="<?= base_url('assets/user/') ?>js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/user/') ?>styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?= base_url('assets/user/') ?>styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/easing/easing.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?= base_url('assets/user/') ?>plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="<?= base_url('assets/user/') ?>js/custom.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>

</html>