@extends('layouts.website')
@section('title','QEESS')
@section('content')
    <!-- banner -->
	@include('website.indexIncludes._banner')
	<!-- //banner -->
     <!-- about -->
	@include('website.indexIncludes._about')
	<!-- //about -->

	<!-- Stats-->
	@include('website.indexIncludes._stats')
	<!-- //Stats -->

	<!-- course-->
	@include('website.indexIncludes._course')
	<!-- //course -->

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