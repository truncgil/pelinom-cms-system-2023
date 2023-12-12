@extends('layouts.app')
@section("title","Blog")
@section('content')
<section class="service position-relative overflow-hidden">
        <div class="container position-relative">
            <img src="template/assets/images/service/dot-shape.png" class="shape position-absolute">
            <div class="row">
                <div class="col-12 " style="    margin-top: 100px;">
                    <h1 class="fs-2 text-black mb-0 text-center">Blog</h1>
                </div>
            </div>
            <div class="row d-flex flex-wrap justify-content-center step-row">
               <?php $blogs = contents("Blog Content");
               foreach($blogs AS $blog)  { 
                
                ?>
                 <div class="mt-4 col-md-6 col-sm-6 col-12 text-center">
                     <div class="card border-0 shadow">
                         <div class="card-body">
                           <a href="{{$blog->slug}}"  style="text-decoration:none">
                             <img src="{{picture2($blog->cover,512)}}" alt="">
                             <h3 class="fs-4">{{e2($blog->title)}}</h3>
                             <p class="fs-7 mb-0 fw-500">{{e2(short_text($blog->html))}}</p>
                             </a>
                         </div>
                     </div>
                 </div> 
                <?php } ?>
                
            </div>
        </div>
    </section>
@endsection