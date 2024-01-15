<?php if(getisset("lang")) {
   oturum("locale",get("lang"));
      App::setLocale(get("lang"));
     // yonlendir("/");
   //exit();
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
    <style>
        .bg-primary {
            background-color: {{setting('main_color_rgb')}} !important;
        }
        .btn-primary {
            background-color: {{setting('btn_primary')}} !important;
            border-color: {{setting('btn_primary')}}  !important;
        }
        .btn-secondary {
            background-color: {{setting('btn_secondary')}} !important;
            border-color: {{setting('btn_secondary')}}  !important;
        }
        a {
            color: {{setting('link_color')}};
            text-decoration: none;
        }
        .footer {
            padding: 170px 0 100px;
            background-color: {{setting('footer_background')}};
        }
        .blue-light, .footer ul li a {
            color: {{setting('link_light_color')}} !important;
        }
    </style>
    <style>
        <?php echo setting('custom_style') ?>
    </style>
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
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: #f9f9fb;
    padding: 10px;
    border-radius: 23px;">                                             
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
                                <div class="input-group  search d-none">
                                    <button class="btn border-0 p-0" type="button" id="button-addon1"><i class="ti ti-search text-white"></i></button>
                                    <input type="text" class="form-control border-0 bg-transparent ps-2" placeholder="search" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                               
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{e2(App::getLocale())}}
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <?php foreach(languages() AS $lang)  { 
                                          ?>
                                         <li><a class="dropdown-item" href="?lang={{$lang}}">{{e2($lang)}}</a></li> 
                                         <?php } ?>
                                       
                                    </ul>
                                    </div>
                                
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
                        <?php $menu = contents("menu");
                                foreach($menu AS $m)  { 
                                 
                                 ?>
                                 <li class="nav-item">
                                     <a class="nav-link text-capitalize" aria-current="page" href="{{($m->slug)}}">{{e2($m->title)}}</a>
                                 </li> 
                                 <?php } ?>
                       
                        </ul>
                       
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
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12">
                    <div class="footer-logo-col">
                        <a href="#"><img class="img-fluid" width="256" src="{{url(setting("footer-logo"))}}"></a>
                        <p class="blue-light mb-0 fs-7 fw-500">{{setting("footer-description")}}</p>
                        <div class="callus text-white fw-500 fs-7">
                            {{setting("address")}}
                            <div class="blue-light">{{e2("Telefon edin")}}: 
                                <a href="tel:{{setting("phone")}}" class="text-warning fw-500 fs-7 text-decoration-none">{{setting("phone")}}</a>
                                <a href="https://wa.me/{{setting("phone")}}" class="text-warning fw-500 fs-7 text-decoration-none"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">{{e2("Sosyal Medya")}}</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li><a href="#">Blog</a></li>
                        <li><a href="{{setting("facebook")}}">Facebook</a></li>
                        <li><a href="{{setting("twitter")}}">Twitter</a></li>
                        <li><a href="{{setting("instagram")}}">Instagram</a></li>
                        <li><a href="{{setting("linkedin")}}">Linkedin</a></li>
                    </ul>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-12">
                    <h5 class="text-white">{{e2("Linkler")}}</h5>
                    <ul class="list-unstyled mb-0 pl-0">
                        <?php foreach(contents("linkler") AS $link)  { 
                         ?>
                         <li><a href="{{$link->slug}}" >{{e2($link->title)}}</a></li> 
                         <?php } ?>
                       
                    </ul>
                </div>
                <div class="d-none col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
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
            <div class="copyrights text-center blue-light  fw-500">@<span id="autodate">{{date("Y")}}</span> - {{e2("Her hakkı saklıdır ")}}Created By <a target="_blank" href="https://truncgil.com.tr" class="blue-light text-decoration-none">Trunçgil Teknoloji</a></div>
        </div>
    </footer>
    <!------------------------------>
    <!-------Footer End------------->
    <!------------------------------>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K8WCC37H15"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{{env('GOOGLE_ANALYTICS')}}');
</script>
    
    <script src="template/dist/js/jquery.min.js"></script>
    <script src="template/dist/js/bootstrap.min.js"></script>
    <script src="template/assets/libs/OwlCarousel-2/dist/owl.carousel.min.js"></script>
    <script src="template/dist/js/custom.js"></script>

</body>
</html>
