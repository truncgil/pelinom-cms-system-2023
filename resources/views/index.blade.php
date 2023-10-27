@extends('layouts.app')
@section("title", setting("title"))
@section('content')
<section class="hero-banner position-relative overflow-hidden">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative left-hero-color">
                        <h1 class="mb-0 fw-bold">
                            {{setting2("slogan")}}
                        </h1>
                        <p>{{setting2("alt-slogan")}}</p>
                        <a href="#" class="btn btn-warning btn-hover-secondery d-none"><span class="d-inline-block me-2"><i class="ti ti-playstation-triangle"></i></span> Discover this Video</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="position-relative right-hero-color">
                        <img src="template/assets/images/hero/right-image.svg" class="img-fluid"> 
                    </div>          
                </div>
            </div>
        </div>
    </section>
    <style>
        .hero-banner::after {

    background-image: url({{url(setting("header-bg"))}});
   
}
    </style>
    <!------------------------------>
    <!--- Hero Banner End--------->
    <!------------------------------>

    <!------------------------------>
    <!--- Service sectin Start------>
    <!------------------------------>
    <section class="service position-relative overflow-hidden">
        <div class="container position-relative">
            <img src="template/assets/images/service/dot-shape.png" class="shape position-absolute">
            <div class="row">
                    <div class="col-12"><small class="fs-7 d-block">{{setting("hizmetlerimiz-small")}}</small></div>
                <div class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center ">
                    <h2 class="fs-2 text-black mb-0">{{setting("hizmetlerimiz-big")}}</h2>
                    <a href="{{url("hizmetlerimiz")}}" class="d-none btn btn-warning btn-hover-secondery section-btn">All Services</a>
                </div>
            </div>
            <div class="row d-flex flex-wrap justify-content-center step-row">
                <?php $servisler = contents("hizmetlerimiz", 0, 3);
                foreach($servisler AS $servis)  { 
                 
                 ?>
                 <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                     <div class="card border-0 shadow">
                         <div class="card-body">
                            <a href="{{$servis->slug}}">
                             <img src="{{picture2($servis->cover, 256)}}" width="256" alt="">
                             <h3 class="fs-4">{{e2($servis->title)}}</h3>
                             <p class="fs-7 mb-0 fw-500">{{e2(short_text($servis->html,50))}}</p>
                             </a>
                         </div>
                     </div>
                 </div> 
                 <?php } ?>
                
            </div>
        </div>
    </section>
    <!------------------------------>
    <!--- Service sectin Start------>
    <!------------------------------>
    
    <!---------------------------------->
    <!--- Our Service sectin Start------>
    <!---------------------------------->
    <section class="our-service position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <img src="template/assets/images/our-service/our-service.svg" class="img-fluid"> 
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ps-xxl-0 ps-xl-0 ps-lg-3 ps-md-3 ps-sm-3 ps-3">
                    <small class="fs-7 d-block">Our Service</small>
                    <h2 class="fs-2 text-black mb-0">Our Featured Service that We Provide</h2>
                    <p class="mb-0 fw-500 fs-7">
                        Seamlessly see the tasks that need your attention, check when your next meeting is coming up, and keep up with your progress.
                    </p>
                    <ul class="list-unstyled mb-0 pl-0">
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-black">List of the tasks that require your attention.</span>
                        </li>
                        <li class="d-flex flex-wrap align-items-start">
                            <i class="ti ti-circle-check fs-4 pe-2"></i>
                            <span class="fs-7 text-black">Google Calendar integration to see when interruptions will happen</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> 
    <!------------------------------>
    <!--- Our Service sectin End---->
    <!------------------------------>
    
    <!------------------------------>
    <!-- Portfolio section Start---->
    <!------------------------------>
    <section class="portfolio position-relative bg-primary">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 d-none"><small class="fs-7 d-block text-warning">Product Docs</small></div>
                <div class="col-12 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-block d-block align-items-center justify-content-xxl-between justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-between justify-content-sm-center ">
                    <h2 class="fs-3 text-white mb-5">{{e2("Ürünümüzden Görüntüler")}}</h2>
                    <a href="#" class="btn btn-warning btn-hover-secondery section-btn d-none">Detaylar</a>
                </div>
            </div>
            <div class="row d-flex flex-wrap justify-content-center step-row d-none">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card bg-transparent">
                        <div class="card-body">
                            <div class="icon mx-auto rounded-circle d-flex justify-content-center align-items-center"><i class="ti ti-brand-github text-white"></i></div>
                            <h3 class="fs-4 text-white">Github Sync</h3>
                            <p class="fs-7 mb-0 fw-500">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card bg-transparent">
                        <div class="card-body">
                            <div class="icon  mx-auto rounded-circle d-flex justify-content-center align-items-center"><i class="ti ti-crown text-white"></i></div>
                            <h3 class="fs-4 text-white">Branding</h3>
                            <p class="fs-7 mb-0 fw-500">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="card bg-transparent">
                        <div class="card-body">
                            <div class="icon mx-auto rounded-circle d-flex justify-content-center align-items-center"><i class="ti ti-message-circle-2 text-white"></i></div>
                            <h3 class="fs-4 text-white">Comments</h3>
                            <p class="fs-7 mb-0 fw-500">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container position-relative" >
            <div class="portfolio-wrap">
                <div class="owl-carousel owl-theme portfolio-slider">
                    <?php $gorseller = contents('Görseller');
                    foreach($gorseller AS $gorsel)  { 
                     
                     ?>
                         <div class="item"><a href="{{$gorsel->slug}}"  target='_blank'><img style='width:auto;max-height:800px;' src="{{picture2($gorsel->cover, 256)}}" ></a></div>
                       
                     <?php } ?>
                </div>
            </div>    
        </div>    
    </section>
    <!------------------------------>
    <!-- Portfolio section End ----->
    <!------------------------------>

    <!------------------------------>
    <!-- Pricing section Start------>
    <!------------------------------>
    <section class="pricing position-relative overflow-hidden d-none">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <small class="fs-7 d-block">Pricing Plan</small>
                    <h2 class="fs-3 pricing-head text-black mb-0 position-relative">What’s About Our Pricing Subscription</h2>
                </div>
            </div>
            <div class="row plans">
                <div class="col-12 text-center">
                    <div class="form-check form-switch d-flex justify-content-center ps-0 align-items-center">
                        <label class="form-check-label text-black fs-7" for="flexSwitchCheckChecked">Monthly</label>
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label text-black fs-7" for="flexSwitchCheckChecked">Yearly</label>
                    </div>
                    <div class="save d-inline-block position-relative text-warning fw-500 fs-9 text-center">Save Up To 58%</div>
                </div>
            </div>
            <div class="row justify-content-center price-plan">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-warning text-center">Personal</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">0</sub><sup class="fs-6 position-absolute">$</sup></h2>
                            <small class="fs-7 d-block text-center">Free</small>
                            <p class="fs-7 text-center fw-500">For individuals looking for a simple CRM solution</p>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Basic CRM features</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Personal Pipelines</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Email Power Tools</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="#" class="btn btn-warning btn-hover-secondery text-capitalize">Set Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        <div class="position-absolute badge bg-warning d-inline-block mx-auto">
                            Most Popular
                        </div>
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-warning text-center">Professional</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">49</sub><sup class="fs-6 position-absolute">$</sup></h2>
                            <small class="fs-7 d-block text-center">Free</small>
                            <p class="fs-7 text-center fw-500">For individuals looking for a simple CRM solution</p>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Basic CRM features</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Personal Pipelines</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Email Power Tools</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Shared Pipelines</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="#" class="btn btn-warning btn-hover-secondery text-capitalize">Set Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card position-relative shadow border-0 h-100">
                        <div class="card-body pb-4">
                            <small class="fs-7 d-block text-warning text-center">Enterprise</small>
                            <h2 class="mb-4 text-center position-relative"><sub class="fs-2 text-black">99</sub><sup class="fs-6 position-absolute">$</sup></h2>
                            <small class="fs-7 d-block text-center">Free</small>
                            <p class="fs-7 text-center fw-500">For individuals looking for a simple CRM solution</p>
                            <ul class="list-unstyled mb-0 pl-0">
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Basic CRM features</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Personal Pipelines</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Email Power Tools</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black">Unlimited Shared Pipelines</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ti ti-circle-check fs-4 pe-2"></i>
                                    <span class="fs-7 text-black"> Full API Access</span>
                                </li>               
                            </ul>
                        </div>
                        <div class="card-action text-center pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-sm-4 pb-4">
                            <a href="#" class="btn btn-warning btn-hover-secondery text-capitalize">Set Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!-- Pricing section End-------->
    <!------------------------------>

    <!------------------------------>
    <!------ FAQ section Start------>
    <!------------------------------>
    <section class="faq position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <small class="fs-7 d-block">{{e2("Sık sorulan sorular")}}</small>
                    <h2 class="fs-3 text-black mb-0">{{e2("Bize bir şey mi sormak istiyorsunuz?")}}</h2>
                </div>
            </div>
            <div class="accordion-block">
                    <div class="accordion row" id="accordionPanelsStayOpenExample">
                        <div class="col-xxl-12 col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                            <?php foreach(contents('SSS') AS $sss)  { 
                              ?>
                             <div class="accordion-item mb-3">
                                 <h2 class="accordion-header" id="panelsStayOpen-headingOne{{$sss->id}}">
                                   <button class="accordion-button  collapsed text-black fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne{{$sss->id}}" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne{{$sss->id}}">
                                      {{$sss->title}}
                                   </button>
                                 </h2>
                                 <div id="panelsStayOpen-collapseOne{{$sss->id}}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne{{$sss->id}}">
                                   <div class="accordion-body fs-7 fw-500 pt-0">
                                     <?php echo strip_tags($sss->html) ?>
                                   </div>
                                 </div>
                             </div> 
                             <?php } ?>
                            
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!------------------------------>
    <!------ FAQ section End------>
    <!------------------------------>    
    
    <!------------------------------>
    <!-----Contact section Start---->
    <!------------------------------>
    <section class="contact bg-primary position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="dots-shape-left position-absolute"><img src="template/assets/images/icons/dot-shape.png"></div>
            <div class="dots-shape-right position-absolute"><img src="template/assets/images/icons/dot-shape.png"></div>
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <small class="fs-7 d-block text-warning">{{e2("Bizimle iletişime geçin")}}</small>
                    <h2 class="fs-3 text-white mb-0">{{e2("Herhangi bir sorununuzu ve teklifinizi bizimle paylaşmaktan çekinmeyiniz.")}}</h2>
                    <div class="owl-carousel owl-theme testimonial">
                        <?php foreach(contents('Testimonials') AS $t)  { 
                          ?>
                         <div class="item">
                             <div class="details position-relative">
                                 <p class="fs-5 fw-light blue-light mb-4">
                                    <?php echo strip_tags($t->html) ?>
                                 </p>
                                 <div class="d-flex align-items-center">
                                     <div class="avtar-img rounded-circle overflow-hidden"><img src="{{picture2($t->cover,128)}}" class="img-fluid"></div>
                                     <div class="name ps-3">
                                        <?php $name = explode('/', $t->title) ?>
                                         <h6 class="text-white">{{@$name[0]}}</h6>
                                         <small class="d-block blue-light fw-500 fs-10 pb-0">{{@$name[1]}}</small>
                                     </div>
                                 </div>
                             </div>
                         </div> 
                         <?php } ?>
                        
                    </div>                        
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <form class="position-relative">
                        <div class="row ps-xxl-5 ps-xl-5 ps-lg-3 ps-md-0 ps-sm-0 ps-0">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">{{e2("Adı Soyadı")}}</label>
                                    <input type="text" class="form-control border-0" placeholder="Enter your name">
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">{{e2("E-Posta Adresi")}}</label>
                                    <input type="email" class="form-control border-0" placeholder="Enter your email address">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label text-white fs-7 mb-3">{{e2("Mesajınız")}}</label>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control border-0"></textarea>
                                </div>
                            </div>
                      
                            <div class="col-12">
                                <button class="btn btn-warning btn-hover-secondery text-capitalize mt-2 w-auto contact-btn">{{e2("Gönder")}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="trusted-companies">
                <div class="row justify-content-center">
                    <div class="col-xx-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <h3 class="fs-7 mb-0 text-white text-center">Trusted by content creators across the world</h3>
                        <ul class="d-flex flex-wrap align-items-center list-unstyled mb-0 pl-0 owl-carousel owl-theme trusted-logos">
                            <li class="text-center item"><a href="#"><img src="template/assets/images/contact/google.svg"></a></li>
                            <li class="text-center item"><a href="#"><img src="template/assets/images/contact/microsoft.svg"></a></li>
                            <li class="text-center item"><a href="#"><img src="template/assets/images/contact/amazon.svg"></a></li>
                            <li class="text-center item"><a href="#"><img src="template/assets/images/contact/unique.svg"></a></li>
                            <li class="text-center item"><a href="#"><img src="template/assets/images/contact/google.svg"></a></li>
                            <li class="text-center item"><a href="#"><img src="template/assets/images/contact/microsoft.svg"></a></li>
                            <li class="text-center item"><a href="#"><img src="template/assets/images/contact/amazon.svg"></a></li>
                            <li class="text-center item"><a href="#"><img src="template/assets/images/contact/unique.svg"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>       
    <!------------------------------>
    <!-----Contact section End----->
    <!------------------------------>
@endsection