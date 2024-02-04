<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- About -->
            <div class="col-lg-3 footer_col">
                <div class="footer_about">
                    <div class="logo_container">
                        <a>
                            <div class="logo_content d-flex flex-row align-items-start justify-content-start">
                                <div class="logo_img">
                                    <img src="/assets/images/logo.png" width="120px" height="auto" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="footer_about_text" style="margin-top:60px; top:60px">
                        <p>Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar.
                        </p>
                    </div>
                    <div class="footer_social" style="margin-top:0px; top:60px">
                        <ul>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 footer_col">
                <div class="footer_links">
                    <div class="footer_title">Quick menu</div>
                    <ul class="footer_list">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About us</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('news')}}">News</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 footer_col">
                <div class="footer_links">
                    <div class="footer_title">Useful Links</div>
                    <ul class="footer_list">
                        <li><a href="{{route('contact')}}">Contacts</a></li>
                        <li><a href="{{route('news')}}">News</a></li>
                        <li><a href="{{route('about')}}">Teachers</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 footer_col">
                <div class="footer_contact">
                    <div class="footer_title">Contact Us</div>
                    <div class="footer_contact_info">
                        <div class="footer_contact_item">
                            <div class="footer_contact_title">Address:</div>
                            <div class="footer_contact_line">{{config('company.address.street')}}
                                {{config('company.address.city')}},
                                {{config('company.address.country')}}</div>
                        </div>
                        <div class="footer_contact_item">
                            <div class="footer_contact_title">Phone:</div>
                            <div class="footer_contact_line">
                                <a href="tel:{{config('company.phone1')}}">{{config('company.phone1')}}</a><br>
                                <a href="tel:{{config('company.phone2')}}">{{config('company.phone2')}}</a><br>
                                <a href="tel:{{config('company.phone3')}}">{{config('company.phone3')}}</a>
                            </div>
                        </div>
                        <div class="footer_contact_item">
                            <div class="footer_contact_title">Email:</div>
                            <div class="footer_contact_line">
                                <a href="tel:{{config('company.email')}}">{{config('company.email')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="copyright"> Copyright &copy;<?php echo ' '.date('Y'); ?> Designed By <a
                        href="https://cloudstechn.com" target="_blank">TechClouds</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/styles/bootstrap4/popper.js"></script>
<script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/greensock/TweenMax.min.js"></script>
<script src="assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/plugins/video-js/video.min.js"></script>
<script src="assets/plugins/video-js/Youtube.min.js"></script>
<script src="assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="assets/js/custom.js"></script>

<script>
$(document).ready(function() {
    //hide the notification after 2seconds  
    setTimeout(function() {
        $("#fade").fadeOut('slow');
    }, 5000);
});
</script>
</body>

</html>