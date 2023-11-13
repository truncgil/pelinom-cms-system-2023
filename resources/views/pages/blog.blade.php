<?php 
$title = $c->title ?>
@extends('layouts.app')
@section("title",$title)
@section('content')

    @include("sections.banner-title")
    <section id="pricing" class="pricing section">
        <div class="container">
            <div class="row justify-content-center">
                <?php $blogs = contents("Blog");
                foreach($blogs AS $blog)  { 
                 
                 ?>
                 <div class="col-lg-4 col-sm-6 col-12">
                    <a class="services-btn" href="{{$blog->slug}}">
                        <div class="services wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <img src="{{picture($blog->cover)}}" class="img-fluid" alt=""> 
                            <div class="services-title-icon d-flex">
                                
                                <h4 class="services-title">{{e2($blog->title)}}</h4>
                            </div>
                            <div class="services-content">
                                <p class="text">{{e2(strip_tags(short_text($blog->html)))}}</p>
                                {{e2("Daha fazla bilgi")}}
                            </div>
                        </div>
                     </a>
                 </div> 
                 <?php } ?>
                
            </div>
        </div>
    </section>
    @include("inc.powered")
    <style>
        .sub-title {
            font-size:30px;
        }

    </style>
   
@endsection