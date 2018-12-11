@extends('layouts.website')
@section('title','Apagie')
@section('content')
    <!-- banner -->
	@include('website.otherIncludes._banner')
	<!-- //banner -->
     <!-- about -->
	@include('website.otherIncludes.secondary._about')
	<!-- //about -->

	<!-- Stats-->
	@include('website.otherIncludes.secondary._stats')
	<!-- //Stats -->

	<!-- course-->
	@include('website.otherIncludes.secondary._course')
	<!-- //course -->

	<!-- what we do -->
	@include('website.otherIncludes.secondary._whatWedo')
	<!-- //what we do -->

	<!-- video and events -->
	@include('website.otherIncludes.secondary._videoandEvents')
	<!-- //video and events -->

	<!-- testimonials -->
	@include('website.otherIncludes.secondary._testimonials')
	<!-- //testimonials -->

	<!-- news -->
	@include('website.otherIncludes.secondary._news')
	<!-- //news -->
    @include('website.otherIncludes.secondary._footer')
@endsection