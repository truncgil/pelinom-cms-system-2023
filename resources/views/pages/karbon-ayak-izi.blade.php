<?php 
$title = $c->title ?>
@extends('layouts.app')
@section("title",$title)
@section('content')

    @include("sections.banner-title")
    <section id="pricing" class="pricing section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="single-pricing wow fadeInUp  text-center" data-wow-delay="0.2s" data-wow-duration="1.5s">
                        <h1 class="sub-title">{{e2("Ormana ne kadar ağaç dikmek istiyorsunuz?")}}</h1>
                        
                        <div class="btn-group tab-btn">
                            <div class="white-btn active" data-tab="slider">{{e2("Slider")}}</div>
                            <div class="white-btn" data-tab="co2-oran">{{e2("CO<sub>2</sub> Oranı")}}</div>
                            <div class="white-btn" data-tab="ornekler">{{e2("Örneklere Göre")}}</div>
                        </div>
                        <div class="pricing-header text-center">
                            
                            
                            <div class="custom-tab slider">
                                <input type="range" class="form-range form-control" min="1" max="100" id="count">
                                <div id="h4-container" class="d-none"><div id="h4-subcontainer"><h4>0<span></span></h4></div></div>
                            </div>
                            <div class="custom-tab  d-none co2-oran">
                                <div class="row ornekler">
                                <?php $karbonlar = contents("CO2 Oranları");
                                foreach($karbonlar AS $karbon) {
                                    $data = explode(" / ", $karbon->title);

                                     ?>
                                     <div class="col-md-4">
                                        <div class="white-btn " data-indirim="{{@trim($data[2])}}" data-carpan="{{@trim($data[1])}}">
                                            <img src="{{picture($karbon->cover)}}" width="64" class="img-fluid" alt="{{e2(@$data[0])}}">
                                            <div>{{e2(@$data[0])}}</div>
                                            
                                        </div>
                                     </div>
                                     <?php 
                                }
                                ?>
                                </div>
                            </div>
                            <div class="custom-tab  d-none ornekler">
                                <div class="row ornekler">
                                <?php $karbonlar = contents("Örnek Karbonlar");
                                foreach($karbonlar AS $karbon) {
                                    $data = explode(" / ", $karbon->title);

                                     ?>
                                     <div class="col-md-4">
                                        <div class="white-btn" data-indirim="{{@trim($data[2])}}" data-carpan="{{@trim($data[1])}}">
                                            <img src="{{picture($karbon->cover)}}" width="64" class="img-fluid" alt="{{e2(@$data[0])}}">
                                            <div>{{e2(@$data[0])}}</div>
                                            
                                        </div>
                                     </div>
                                     <?php 
                                }
                                ?>
                                </div>
                                
                            </div>
                        </div>
                        <img src="images/tree-icon.png" style="    filter: hue-rotate(45deg);" width="128" alt=""> 
                            
                            <div class=" meter sub-title" style="font-size: 59px;
                            line-height: initial;">
                            </div>
                        <div class="pricing-list mt-4 text-center"  style="font-size:20px">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/tree-icon.png" style="    filter: hue-rotate(45deg);" width="128" alt=""> 
                                            <h1>
                                            <span class="price">€<span class="amount"></span></span>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="images/co2.png" width="128" alt=""> 
                                            <div class="co2 sub-title"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="mb-4">
                              <small>
                                {{e2("Rakamlar, ağaçların bağlama potansiyeline dayanan ortalama değerlerdir. En son bilimsel bulgulara göre, ağaçların ortalama ömrü 30 ile 50 yıl arasında olmakta ve yılda 150 kg'a kadar CO2 bağlayabilmektedir. Hesaplamalar ortalama verilere göre yapılmış olup, ağaç cinsine ve yaşına göre değişiklik gösterebilir")}}
                              </small> 
                           </div>
                        </div>
                        <div class="mt-4 text-center">
                        <br>
                            <a class="white-btn price-btn" href="hemen-nefes-ol?adet=50"><i class="lni lni-arrow-right-circle"></i> {{e2("Hemen Nefes Ol")}}</a>
                        </div>

                    </div>
                </div>

               
                
            </div>
        </div>
    </section> 
    @include("inc.powered")
    <style>
        .sub-title {
            font-size:30px;
        }

html input[type=range] {
  outline: 0;
  border: 0;
  border-radius: 500px;
  width:600px;
  max-width: 100%;
  margin: 24px auto;
  padding: 0px;
  transition: box-shadow 0.2s ease-in-out;

}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  html input[type=range] {
    overflow: hidden;
    height: 40px;
    -webkit-appearance: none;
    background-color: #ddd;
  }
  html input[type=range]::-webkit-slider-runnable-track {
    height: 40px;
    -webkit-appearance: none;
    color: #444;
    width:100%;
    border-radius:50px;
    -webkit-transition: box-shadow 0.2s ease-in-out;
    transition: box-shadow 0.2s ease-in-out;
  }
  html input[type=range]::-webkit-slider-thumb {
    width: 40px;
    -webkit-appearance: none;
    height: 40px;
    cursor: ew-resize;
    background: #fff;
    box-shadow: -340px 0 0 320px #1597ff, inset 0 0 0 40px #1597ff;
    border-radius: 50%;
    -webkit-transition: box-shadow 0.2s ease-in-out;
    transition: box-shadow 0.2s ease-in-out;
    position: relative;
  }
  html input[type=range]::-webkit-slider-thumb {
    background: #fff;
    box-shadow: -340px 0 0 320px #1597ff, inset 0 0 0 3px #1597ff;
  }
}
html input[type=range]::-moz-range-progress {
  background-color: #43e5f7;
  width: 100%;;
}
html input[type=range]::-moz-range-track {
  background-color: #00f71f;
}
html input[type=range]::-ms-fill-lower {
  background-color: #43e5f7;
}
html input[type=range]::-ms-fill-upper {
  background-color: #00f71f;
}

#h4-container {
  width: 400px;
  max-width: 100%;
  padding: 0 20px;
  box-sizing: border-box;
  position: relative;
  z-index: 10000;
}
#h4-container #h4-subcontainer {
  width: 100%;
  position: relative;
}
#h4-container #h4-subcontainer h4 {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 0;
  width: 40px;
  height: 40px;
  color: #fff !important;
  font-size: 12px;
  transform-origin: center -10px;
  transform: translateX(-50%);
  transition: margin-top 0.15s ease-in-out, opacity 0.15s ease-in-out;
}
#h4-container #h4-subcontainer h4 span {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: #1597ff;
  border-radius: 0 50% 50% 50%;
  transform: rotate(45deg);
  z-index: -1;
}

input:not(:active) + #h4-container h4 {
  opacity: 0;
  margin-top: -50px;
  pointer-events: none;
}
    </style>
   
@endsection