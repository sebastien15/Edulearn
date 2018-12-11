@extends('layouts.website')
@section('title','QEESS')
@section('content')
    <!-- banner -->
	@include('website.indexIncludes._banner')
	<!-- breadcrumb -->
	@include('website.otherIncludes._breadcumb')
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- history -->
	@include('website.otherIncludes.about._history')
	<!-- //history -->

	<!-- mission -->
	@include('website.otherIncludes.about._mission')
	<!-- //mission -->

	<!-- team -->
	@include('website.otherIncludes.about._team')
	<!-- //team -->

	<!-- what we do -->
	@include('website.indexIncludes._whatWedo')
	<!-- //what we do -->

	<!-- video and events -->
	@include('website.indexIncludes._videoandEvents')
	<!-- //video and events -->

	<!-- testimonials -->
	@include('website.indexIncludes._testimonials')
	<!-- //testimonials -->

	<!-- news -->
	@include('website.indexIncludes._news')
	<!-- //news -->

    @include('website.indexIncludes._footer')
@endsection