@include('layouts.Pusersincludes._head')

<body>
	<!-- header -->
	@include('layouts.Pusersincludes._header')
	<!-- //header -->

	@yield('content')

	<!-- brands -->
	@include('layouts.Pusersincludes._brands')
	<!-- //brands -->

	<!-- footer -->
	@include('layouts.Pusersincludes._footer')
	<!-- //footer -->


	@include('layouts.Pusersincludes._scripts')

</body>

</html>