<?php 
$title = $c->title ?>
@extends('layouts.app')
@section("title",$title)
@section('content')


<section class="pricing position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h1 class="fs-3 pricing-head text-black mb-4 position-relative">{{$c->title}}</h1>
                </div>
				<div class="col-md-6">
                  

                    <?php echo $c->html ?>
				</div>
                <div class="col-md-6"><?php echo setting("map-iframe") ?></div>


            </div>
            
        </div>
    </section>
@endsection