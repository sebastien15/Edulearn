@extends('layouts.publicUsers')
@section('content')

     <!-- about -->
	@include('publicUsers.indexIncludes._about')
	<!-- //about -->

	<!-- Stats-->
	@include('publicUsers.indexIncludes._stats')
	<!-- //Stats -->

	<!-- course-->
	@include('publicUsers.indexIncludes._stats')
	<!-- //course -->

	<!-- what we do -->
	@include('publicUsers.indexIncludes._stats')
	<!-- //what we do -->

	<!-- video and events -->
	@include('publicUsers.indexIncludes._stats')
	<!-- //video and events -->

	<!-- testimonials -->
	@include('publicUsers.indexIncludes._testimonials')
	<!-- //testimonials -->

	<!-- news -->
	@include('publicUsers.indexIncludes._news')
	<!-- //news -->

@endsection