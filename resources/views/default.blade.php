<?php use App\Contents; 
$title = $c->title;

?>
@if(isset($c)) 
	
@extends('layouts.app')
@section("title",__($c->title))
@section('content')
<?php $slug = str_slug($c->type); ?>
<?php 

if($c->cover == "") {
	$pic = url('assets/images/banner-bg.jpg');
} else {
	$pic = url('cache/large/'.$c->cover);
} 
$bc = str_replace("Menü / ","",$c->breadcrumb);
$bc = explode(" / ",$bc);
$ust = Contents::where("slug",$c->kid)->first();
$j = j($c->json);


?>
@if(View::exists("types.$slug"))
	@include("types.$slug")
@elseif(View::exists("pages.".$c->slug))
	@include("pages.".$c->slug)
@else

<section class="pricing position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h1 class="fs-3 pricing-head text-black mb-0 position-relative">{{$c->title}}</h1>
                </div>
				<div class="col-12">
					<div class="text-left mb-5 mt-5">
						
						<?php e2($c->html) ?>
					</div>
					

					<?php $alt = contents($c->slug);
					if($alt) {
						 ?>
						 <div class="row">
						 @foreach($alt AS $a) 
						 <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 text-center">
							<div class="card border-0 shadow">
								<div class="card-body">
									<a href="{{$a->slug}}">
									<img src="{{picture2($a->cover,256)}}" width="256" alt="">
									<h3 class="fs-4">{{e2($a->title)}}</h3>
										<p class="fs-7 mb-0 fw-500">{{short_text(strip_tags($a->html), 100)}}</p>
									</a>
								</div>
							</div>
						</div>
						 @endforeach
						 </div>
						 <?php 
					}
					?>
				</div>
            </div>
            
        </div>
    </section>
@endif 
@endsection
@else 
	
@endif