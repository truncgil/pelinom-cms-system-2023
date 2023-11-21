<?php 
$title = $c->title ?>
@extends('layouts.app')
@section("title",$title)
@section('content')


<section class="pricing position-relative overflow-hidden mt-5">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h1 class="fs-3 pricing-head text-black mb-0 position-relative">{{$c->title}}</h1>
                </div>
				<div class="col-md-6">
                    <strong>{{e2("Adres")}}:</strong> {{setting("address")}} 
                    <br>
                    <br>
                    <strong>{{e2("E-Mail")}}:</strong> <a href="mailto:{{setting("e-mail")}}">{{setting("e-mail")}} </a><br>
				</div>
                <div class="col-md-6"><?php echo setting("map-iframe") ?></div>

            </div>
            
        </div>
    </section>
@endsection