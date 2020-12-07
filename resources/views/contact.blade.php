<!DOCTYPE html>
<html lang="en">

@include('layouts-my-portfolio.head')

<body class="contact">
<!-- Live Style Switcher Starts - demo only -->
<!-- @include('layouts-my-portfolio.switcher') -->
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
@include('layouts-my-portfolio.header')
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>Kontak <span>Saya</span></h1>
    <span class="title-bg">contact</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-12">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Sekian Info Tentang Saya</h3>
                <p class="open-sans-font mb-3">Anda dapat menghubungi saya melalui:.</p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">Email </span>irahman.hanif@gmail.com
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">Phone</span>+6287771707650
                </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook"><a title="Facebook" href="https://facebook.com/irrahman.hanif"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter"><a title="Twitter" href="https://twitter.com/HANIFI_rahman"><i class="fa fa-twitter"></i></a>
                    </li>
            </div>
            <!-- Left Side Ends -->
        </div>
    </div>

</section>
<!-- Template JS Files -->
@include('layouts-my-portfolio.script')

</body>

</html>
