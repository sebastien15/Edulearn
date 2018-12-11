@include('layouts.website._head')

<body>
	<!-- header -->
	@include('layouts.website._header')
	<!-- //header -->
	@yield('content')
	
	@include('layouts.website._scripts')
</body>

</html>