<?php if(getisset("lang")) {
   oturum("locale",get("lang"));
      App::setLocale(get("lang"));
     // yonlendir("/");
   exit();
   } ?>
<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{setting("title")}}</title>
    <link rel="stylesheet" href="template/assets/libs/OwlCarousel-2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="template/dist/css/iconfont/tabler-icons.css">
    <link rel="stylesheet" href="template/dist/css/style.css">
</head>
<body>
    <!------------------------------>
    <!-- Header Start -->
    <!------------------------------>
    <header class="main-header position-fixed w-100">
            <div class="container">
                <nav class="navbar navbar-expand-xl py-0">
                    <div class="logo">
                        <a class="navbar-brand py-0 me-0" href="./"><img src="{{url(setting("logo"))}}" width="256" class="img-fluid" alt=""></a>
                    </div>
                    <a class="d-inline-block d-lg-block d-xl-none d-xxl-none  nav-toggler text-decoration-none"  data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
                        <i class="ti ti-menu-2 text-warning"></i>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">                                             
                            <ul class="navbar-nav me-auto">
                                <?php $menu = contents("menu");
                                foreach($menu AS $m)  { 
                                 
                                 ?>
                                 <li class="nav-item">
                                     <a class="nav-link text-capitalize" aria-current="page" href="{{($m->slug)}}">{{e2($m->title)}}</a>
                                 </li> 
                                 <?php } ?>
                               
                            </ul>
                            <div class="d-flex align-items-center">
                                <div class="input-group  search">
                                    <button class="btn border-0 p-0" type="button" id="button-addon1"><i class="ti ti-search text-white"></i></button>
                                    <input type="text" class="form-control border-0 bg-transparent ps-2" placeholder="search" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                                <a class="btn btn-warning btn-hover-secondery text-capitalize " href="#">register</a>
                            </div>
                    </div>
                </nav>
            </div>

            <div class="offcanvas offcanvas-start"  tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <div class="logo">
                        <a class="navbar-brand py-0 me-0" href="#"><img src="template/assets/images/Creato-logo.svg" alt=""></a>
                    </div> 
                    <button type="button" class="btn-close text-reset  ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x text-warning"></i></button>
                </div>
                <div class="offcanvas-body pt-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" aria-current="page" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">Pricing </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">Elements </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize" href="#">blog </a>
                        </li>
                        </ul>
                        <div class="login d-block align-items-center mt-3">
                            <a class="btn btn-warning text-capitalize w-100" href="#">contact us</a>
                        </div>
                </div>
            </div>
    </header>
    <!------------------------------>
     <!-- Header End  -->
    <!------------------------------>

    <!------------------------------>
    <!--- Hero Banner Start--------->
    <!------------------------------>
   @yield("content")

    <!------------------------------>
    <!-----Footer Start------------->
    <!------------------------------>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-logo-col">
                        <a href="#"><img src="template/assets/images/footer/Logo.svg"></a>
                        <p class="blue-light mb-0 fs-7 fw-500">Rakon is a simple, elegant, and secure way to build your bitcoin and crypto portfolio.</p>
                        <div class="callus text-white fw-500 fs-7">
                            1989 Don Jackson Lane
                            <div class="blue-light">Call us: <a href="#" class="text-warning fw-500 fs-7 text-decoration-none">808-956-9599</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">Social</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">Company</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#" >About</a></li>
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Legal & Privacy</a></li>
                    </ul>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="subscribe">
                        <h5 class="text-white">Subscribe</h5>
                        <p class="blue-light fw-500">Subscribe to get the latest news form us
                        </p>
                        <div class="input-group">
                            <input type="email" class="form-control br-15" placeholder="Enter email address" aria-label="Enter email address" aria-describedby="button-addon2">
                            <button class="btn btn-warning btn-hover-secondery ms-xxl-2 ms-xl-2 ls-lg-0 ms-md-0 ms-sm-0 ms-0"  type="button" id="button-addon2">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyrights text-center blue-light  fw-500">@<span id="autodate">2023</span> - All Rights Reserved by <a href="https://adminmart.com/" class="blue-light text-decoration-none">adminmart.com</a> Dsitributed By <a href="https://themewagon.com" class="blue-light text-decoration-none">ThemeWagon</a></div>
        </div>
    </footer>
    <!------------------------------>
    <!-------Footer End------------->
    <!------------------------------>

    
    <script src="template/dist/js/jquery.min.js"></script>
    <script src="template/dist/js/bootstrap.min.js"></script>
    <script src="template/assets/libs/OwlCarousel-2/dist/owl.carousel.min.js"></script>
    <script src="template/dist/js/custom.js"></script>

</body>
</html>
