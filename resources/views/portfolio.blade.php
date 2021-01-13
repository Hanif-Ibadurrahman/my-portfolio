<!DOCTYPE html>
<html lang="en">

@include('layouts-my-portfolio.head')

<body class="portfolio">
<!-- Live Style Switcher Starts - demo only -->
<!-- @include('layouts-my-portfolio.switcher') -->
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
@include('layouts-my-portfolio.header')
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>portfolio</span></h1>
    <span class="title-bg">works</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('assets/img/projects/website-peminjaman.jpg')}}" alt="Website Project" />
                        <div><span>Website Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('assets/img/projects/website-monitoring-listrik1.jpg')}}" alt="Website Project" />
                        <div><span>Website Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('assets/img/projects/website-monitoring-bahan-bakar1.jpg')}}" alt="Website Project" />
                        <div><span>Website Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('assets/img/projects/nodemcu-relay-doorlock.jpg')}}" alt="IoT Project" />
                        <div><span>IoT Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('assets/img/projects/gas-1.jpg')}}" alt="IoT Project" />
                        <div><span>IoT Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('assets/img/projects/rip.png')}}" alt="Dinamic Routing Design" />
                        <div><span>Dinamic Routing Design</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('assets/img/projects/statik1.png')}}" alt="Static Routing Design" />
                        <div><span>Static Routing Design</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('assets/img/projects/enterprise.png')}}" alt="Frame Relay & Vlan Design" />
                        <div><span>Frame Relay & Vlan Design</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
                <!-- Portfolio Item Starts -->
                <li>
                    <figure>
                        <img src="{{asset('assets/img/projects/app1-1.png')}}" alt="Android Project" />
                        <div><span>Android Project</span></div>
                    </figure>
                </li>
                <!-- Portfolio Item Ends -->
            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Website Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website, IoT, Android</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Purpose </span>: <span class="ft-wt-600 uppercase">Skripsi</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, PHP, Java, C++</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="http://peminjaman.my-source.rf.gd/inventory/" target="_blank">Website Peminjaman</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        
                        <div id="slider-peminjaman" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-peminjaman" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-peminjaman" data-slide-to="1"></li>
                                <li data-target="#slider-peminjaman" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="videocontainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jowJcBzDBIk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="slide 1"></iframe>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="videocontainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pvCwtHhqX_o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="slide 2"></iframe>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="videocontainer">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/CsdOTa2DaUc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="slide 3"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Website Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website Monitoring Listrik</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Pusintek</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, PHP</span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider-listrik" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-listrik" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-listrik" data-slide-to="1"></li>
                                <li data-target="#slider-listrik" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/projects/website-monitoring-listrik1.jpg')}}" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/website-monitoring-listrik2.jpg')}}" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/website-monitoring-listrik3.jpg')}}" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Website Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Pusintek</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, PHP</span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider-bahan-bakar" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-bahan-bakar" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-bahan-bakar" data-slide-to="1"></li>
                                <li data-target="#slider-bahan-bakar" data-slide-to="2"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/projects/website-monitoring-bahan-bakar1.jpg')}}" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/website-monitoring-bahan-bakar2.jpg')}}" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/website-monitoring-bahan-bakar3.jpg')}}" alt="slide 3">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>IoT Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">IoT, Android, Website</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Purpose </span>: <span class="ft-wt-600 uppercase">Skripsi</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">C/C++</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Tool </span>: <span class="ft-wt-600 uppercase"><a href="https://www.arduino.cc/en/software/" target="_blank">Arduino IDE</a></span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider-iot" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-iot" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-iot" data-slide-to="1"></li>
                                <li data-target="#slider-iot" data-slide-to="2"></li>
                                <li data-target="#slider-iot" data-slide-to="3"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/projects/nodemcu-relay-doorlock.jpg')}}" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/rangkaian.jpg')}}" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <div class="videocontainer">
                                        <iframe src="https://drive.google.com/file/d/1yjGwL5nCCGPqCan50tQfPzL9_ggFQ4wn/preview" width="640" height="480" alt="slide 3"></iframe>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/alur.jpg')}}" alt="slide 4">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>IoT Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">IoT</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Purpose </span>: <span class="ft-wt-600 uppercase">Greenhouse</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, PHP, Python(Flask)</span>
                                </div>
                                <div class="col-12 col-sm-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Microcontroller </span>: <span class="ft-wt-600 uppercase">Raspberry Pi</span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider-gas" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-gas" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-gas" data-slide-to="1"></li>
                                <li data-target="#slider-gas" data-slide-to="2"></li>
                                <li data-target="#slider-gas" data-slide-to="3"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/projects/gas-1.jpg')}}" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/gas-2.jpg')}}" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/gas-3.jpg')}}" alt="slide 3">
                                </div>
                                <div class="carousel-item">
                                    <div class="videocontainer">
                                        <video id="video" class="responsive-video" controls poster="{{asset('assets/img/projects/cover.png')}}">
                                            <source src="{{asset('assets/img/projects/video.mp4')}}" type="video/mp4" alt="slide 4">
                                       </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Dinamic Routing Design</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Topology Design</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Configuration </span>: <span class="ft-wt-600 uppercase">RIP, EIGRP, OSPF</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Tool </span>: <span class="ft-wt-600 uppercase">Packet Tracer Cisco & GNS3</span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider-dinamic" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-dinamic" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-dinamic" data-slide-to="1"></li>
                                <li data-target="#slider-dinamic" data-slide-to="2"></li>
                                <li data-target="#slider-dinamic" data-slide-to="3"></li>
                                <li data-target="#slider-dinamic" data-slide-to="4"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/projects/rip.png')}}" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/eigrp.png')}}" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/rip1.png')}}" alt="slide 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/rip-acl.png')}}" alt="slide 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/ospf-gns3.png')}}" alt="slide 5">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Static Routing Design</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Topology Design</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Tool </span>: <span class="ft-wt-600 uppercase">Packet Tracer Cisco</span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider-static" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-static" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-static" data-slide-to="1"></li>
                                <li data-target="#slider-static" data-slide-to="2"></li>
                                <li data-target="#slider-static" data-slide-to="3"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/projects/statik1.png')}}" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/statik2.png')}}" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/statik3.png')}}" alt="slide 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/statik4.png')}}" alt="slide 4">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Frame Relay & Vlan Design</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Topology Design</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Tool </span>: <span class="ft-wt-600 uppercase">Packet Tracer Cisco</span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider-frame-vlan" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-frame-vlan" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-frame-vlan" data-slide-to="1"></li>
                                <li data-target="#slider-frame-vlan" data-slide-to="2"></li>
                                <li data-target="#slider-frame-vlan" data-slide-to="3"></li>
                                <li data-target="#slider-frame-vlan" data-slide-to="4"></li>
                                <li data-target="#slider-frame-vlan" data-slide-to="5"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/projects/enterprise.png')}}" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/frame-relay.png')}}" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/frame-relay2.png')}}" alt="slide 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/vlan.png')}}" alt="slide 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/vlan2.png')}}" alt="slide 5">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/vlan-isp.png')}}" alt="slide 6">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
                <!-- Portfolio Item Detail Starts -->
                <li>
                    <figure>
                        <!-- Project Details Starts -->
                        <figcaption>
                            <h3>Android Project</h3>
                            <div class="row open-sans-font">
                                <div class="col-6 mb-2">
                                    <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Android</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-user-o pr-2"></i><span class="project-label">Purpose </span>: <span class="ft-wt-600 uppercase">Scan Qr Code, Inventory, Note, App Soal </span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">Java</span>
                                </div>
                                <div class="col-6 mb-2">
                                    <i class="fa fa-external-link pr-2"></i><span class="project-label">Tool </span>: <span class="ft-wt-600 uppercase">Android Studio</span>
                                </div>
                            </div>
                        </figcaption>
                        <!-- Project Details Ends -->
                        <!-- Main Project Content Starts -->
                        <div id="slider-android" class="carousel slide portfolio-slider" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-android" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-android" data-slide-to="1"></li>
                                <li data-target="#slider-android" data-slide-to="2"></li>
                                <li data-target="#slider-android" data-slide-to="3"></li>
                                <li data-target="#slider-android" data-slide-to="4"></li>
                            </ol>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/projects/app1-1.png')}}" alt="slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/app1-2.png')}}" alt="slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/app2-1.png')}}" alt="slide 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/app2-2.png')}}" alt="slide 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/projects/app3-1.png')}}" alt="slide 5">
                                </div>
                            </div>
                        </div>
                        <!-- Main Project Content Ends -->
                    </figure>
                </li>
                <!-- Portfolio Item Detail Ends -->
            </ul>
            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="{{asset('assets/img/projects/navigation/left-arrow.png')}}" alt="previous"></span>
                <span class="icon nav-next"><img src="{{asset('assets/img/projects/navigation/right-arrow.png')}}" alt="next"></span>
                <span class="nav-close"><img src="{{asset('assets/img/projects/navigation/close-button.png')}}" alt="close"> </span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
    </div>
</section>
<!-- Main Content Ends -->

<!-- Template JS Files -->
@include('layouts-my-portfolio.script')

</body>

</html>
