@include('layouts.Pusersincludes._head')

<body>
	<!-- header -->
	@include('layouts.Pusersincludes._header')
	<!-- //header -->
	@yield('content')
	<!-- footer -->
	@include('layouts.Pusersincludes._footer')
	
	@include('layouts.Pusersincludes._scripts')
</body>

</html>