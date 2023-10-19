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
					<div class="text-center mb-5 mt-5">
						<img src="{{picture2($c->cover, 1024)}}" alt="">
					</div>
					<?php e2($c->html) ?>
				</div>
            </div>
            
        </div>
    </section>
@endif 
@endsection
@else 
	
@endif