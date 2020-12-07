<!DOCTYPE html>
<html lang="en">

@include('layouts-my-portfolio.head')

<body class="about">
<!-- Live Style Switcher Starts - demo only -->
<!-- @include('layouts-my-portfolio.switcher') -->
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
@include('layouts-my-portfolio.header')
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>TENTANG <span>SAYA</span></h1>
    <span class="title-bg">Resume</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Personal Info Starts -->
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">informasi personal</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                        <img src="{{asset('assets/img/my-photo.jpg')}}" class="img-fluid main-img-mobile" alt="my picture" />
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Nama depan :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Hanif</span> </li>
                            <li> <span class="title">Nama belakang :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Ibadurrahman</span> </li>
                            <li> <span class="title">Tanggal Lahir :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">29 Mei 1998</span> </li>
                            <li> <span class="title">Alamat :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Depok, Jawa Barat</span> </li>
                            <li> <span class="title">Phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+6287771707650</span> </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">irahman.hanif@gmail.com</span> </li>
                            <li> <span class="title">instagram :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">lbadl_</span> </li>
                            <li> <span class="title">Facebook :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">irrahman.hanif</span> </li>
                            <li> <span class="title">Twitter :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">HANIFI_rahman</span> </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="https://drive.google.com/file/d/1snD7NQ_AQnUsw2voWGaMjmVclVvjTszX/view?usp=sharing" class="btn btn-download">Download CV</a>
                    </div>
                </div>
            </div>
            <!-- Personal Info Ends -->
            <!-- Boxes Starts -->
            <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">15</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">Topology Design</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">3</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">Web projects</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">2</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">IoT project</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">4</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">Android project</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Boxes Ends -->
        </div>
        <hr class="separator">
        <!-- Skills Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p60">
                    <span>60%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p55">
                    <span>55%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">java (android studio)</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p35">
                    <span>35%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">laravel</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>65%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p75">
                    <span>75%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">dinamic routing</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p75">
                    <span>75%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">static routing</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p45">
                    <span>45%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">c++</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                    <span>70%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">mysql</h6>
            </div>
        </div>
        <!-- Skills Ends -->
        <hr class="separator mt-1">
        <!-- Experience & Education Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Riwayat Pendidikan</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2016 - 2020</span>
                            <h5 class="poppins-font text-uppercase">Teknik Multimedia & Jaringan <span class="place open-sans-font">PNJ</span></h5>
                            <p class="open-sans-font">Hal yang saya pelajari ialah yang berkaitan dengan multimedia, baik itu pembuatan konten multimedia seperti video, poster, brosur, dll. Berkaitan dengan jaringan, seperti desain topologi jaringan, pembuatan kabel-kabel straight-cross, konfigurasi dinamis & statik. Bahkan mempelajari pemrograman android dan embedded system / IoT</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2013 - 2016</span>
                            <h5 class="poppins-font text-uppercase">SMA Jurusan IPA <span class="place open-sans-font">SMAN 02 DEPOK</span></h5>
                            <p class="open-sans-font">Perjurusan untuk menentukan masuk ke Jurusan IPA atau IPS terjadi dikelas X dengan melalui beberapa pengujian. Adapun saya masuk di Jurusan IPA. Di kelas X MIPA 1, XI MIPA 1, & XII MIPA 1</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2010 - 2013</span>
                            <h5 class="poppins-font text-uppercase">SMP <span class="place open-sans-font">SMPN 04 DEPOK</span></h5>
                            <p class="open-sans-font">Saya sekolah di Sekolah Menengah Pertama Negeri 04 Depok</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2004 - 2010</span>
                            <h5 class="poppins-font text-uppercase">SD <span class="place open-sans-font">SDN MEKARJAYA 21</span></h5>
                            <p class="open-sans-font">Saya sekolah di Sekolah Dasar Negeri Mekarjaya 21 Depok</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="separator mt-1">

        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Pengalaman</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">05/08/2019 - 04/11/2019</span>
                            <h5 class="poppins-font text-uppercase">OPERASIONAL TIK <span class="place open-sans-font">PUSINTEK KEMENKEU</span></h5>
                            <p class="open-sans-font">Subbidang Dukungan Teknis Tingkat II</p>
                            <p class="open-sans-font">Kegiatan untuk melakukan identifikasi dan analisis permasalahan layanan TIK, pemulihan permasalahan layanan TIK, analisis potensi masalah TIK, analisis tren dan akar masalah TIK, dan pengelolaan Known Error Database (KEDB)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Experience & Education Ends -->
    </div>
</section>
<!-- Main Content Ends -->

<!-- Template JS Files -->
@include('layouts-my-portfolio.script')

</body>

</html>
