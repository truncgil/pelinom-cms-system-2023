<?php 
$title = $c->title ?>
@extends('layouts.app')
@section("title",$title)
@section('content')

    @include("sections.banner-title")


    @include("inc.iletisim")
    @include("inc.powered")
@endsection