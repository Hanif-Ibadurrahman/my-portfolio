<!DOCTYPE html>
<html lang="en">

@include('layouts-my-portfolio.head')

<body class="home">
<!-- Live Style Switcher Starts - demo only -->
<!-- @include('layouts-my-portfolio.switcher') -->
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
@include('layouts-my-portfolio.header')
<!-- Header Ends -->
<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="{{asset('assets/img/my-photo.jpg')}}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">hi !</h6>
                <h1 class="text-uppercase poppins-font"><span>Perkenalkan Saya</span> Hanif Ibadurrahman</h1>
                <p class="open-sans-font">Lulusan dari Politeknik Negeri Jakarta, Jurusan Teknik Informatika dan Komputer, Program Studi TEKNIK MULTIMEDIA DAN JARINGAN.</p>
                <a href="{{url('about')}}" class="btn btn-about">Tentang Saya</a>
            </div>
        </div>
    </div>
</section>
<!-- Main Content Ends -->

<!-- Template JS Files -->
@include('layouts-my-portfolio.script')

</body>

</html>
