@extends('layouts.publicUsers')
@section('content')
<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="navbar">
		<ul class="nav">
			<li class="nav-link "><a id="primary">Primary courses </a></li>			    
			<li class="nav-link"><a>Secondary courses <i class="fa fa-angle-down"></i></a></li>
		</ul>
	</div>
</div>
<div class=" col-lg-10 col-md-10 offset-1 col-sm-12 col-xs-12 " style="background-color: #fff">

	<div class="navbar" >
		<ul class="nav">
			<li class="nav-link "><a data-toggle="collapse" data-target="#demo" id="primary">Primary courses </a></li>	    
			<li class="nav-link"><a>Secondary courses <i class="fa fa-angle-down"></i></a></li>
			<li class="nav-link"><a>University courses <i class="fa fa-angle-down"></i></a></li>
			<li class="nav-link"><a>Particular courses <i class="fa fa-angle-down"></i></a></li>
			<li class="nav-link"><a>carrier updates <i class="fa fa-angle-down"></i></a></li>
		</ul>
	</div class="navbar">
	    <ul class="nav" style="display: none;">
	    	<li class="nav-link"><a href="">ues</a></li>
	    	<li class="nav-link"><a href="">ues</a></li>
	    </ul>
	<div>
		
	</div>
	<div class="container">
		<div class="row ">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
		    	<h5 class="row">Recommended</h5>
		    	<span class="row ">
		    		<img src="{{asset('images/dashboard/rwanda1.png')}}" class=" img-responsive" style="height: 6px; width: 150px;">
		    	</span>	    
		    </div>
	    </div>
	    <div class="row">
		    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mb-4 ">
		    	<div class="video-gallery">
		    		<div class="iframe">
		    			<img src="{{asset('images/dashboard/img_1.jpg')}}" alt="" class="img-responsive" />
		    		</div>
		    		<div class="overlay-icon">
		    			<i class="fa fa-play-circle-o"></i>
		    		</div>
		    		<p>CH5(Statistics):Binomial distribution</p>
		    		<h6 class="">Mathematics</h6>
		    		<h6>Level 2 |UNI</h6>
		    	</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mb-4 ">
		    	<div class="">
		    		<div class="iframe-img">
		    			<img src="{{asset('images/dashboard/img_4.jpg')}}" alt="" class="img-responsive" />
		    		</div>
		    		<div class="overlay-icon">
		    			<i class="fa fa-play-circle-o"></i>
		    		</div>
		    		<p>Chemistry</p>
		    		<h6>24 DEC 2014</h6>
		    	</div>    
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mb-4">
			    <div class="">
			    	<div class="iframe-img">
			    		<img src="{{asset('images/dashboard/img_2.jpg')}}" alt="" class="img-responsive" />
			    	</div>
			    	<div class="overlay-icon">
			    		<i class="fa fa-play-circle-o"></i>
			    	</div>
			    	<p>Chemistry</p>
			    	<h6>24 DEC 2014</h6>
			    </div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mb-4">
		    	<div class="">
		    		<div class="iframe-img">
		    			<img src="{{asset('images/dashboard/img_1.jpg')}}" alt="" class="img-responsive" />
		    		</div>
		    		<div class="overlay-icon">
		    			<i class="fa fa-play-circle-o"></i>
		    		</div>
		    		<p class="">Chemistry</p>
		    		<h6>24 DEC 2014</h6>
			</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mb-4">
			    <div class=" ">
			    	<div class="iframe">
			    		<img src="{{asset('images/dashboard/img_1.jpg')}}" alt="" class="img-responsive" />
			    	</div>
			    	<div class="overlay-icon">
			    		<i class="fa fa-play-circle-o"></i>
			    	</div>
			    	<p>Chemistry</p>
			    	<h6>24 DEC 2014</h6>
			    </div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mb-4">
		    	<div class="">
		    		<div class="iframe-img">
		    			<img src="{{asset('images/dashboard/img_4.jpg')}}" alt="" class="img-responsive" />
		    		</div>
		    		<div class="overlay-icon">
		    			<i class="fa fa-play-circle-o"></i>
		    		</div>
		    		<p>Chemistry</p>
		    		<h6>24 DEC 2014</h6>
		    	</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mb-4">
		    	<div class="">
		    		<div class="iframe-img">
		    			<img src="{{asset('images/dashboard/img_3.jpg')}}" alt="" class="img-responsive" />
		    		</div>
		    		<div class="overlay-icon">
		    			<i class="fa fa-play-circle-o"></i>
		    		</div>
		    		<p>Chemistry</p>
		    		<h6>24 DEC 2014</h6>
		    	</div>
		    </div>
		    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mb-4">
		    	<div class="">
		    		<div class="iframe-img">
		    			<img src="{{asset('images/dashboard/img_1.jpg')}}" alt="" class="img-responsive" />
		    		</div>
		    		<div class="overlay-icon">
		    			<i class="fa fa-play-circle-o"></i>
		    		</div>
		    		<p class="">Chemistry</p>
		    		<h6>24 DEC 2014</h6>
		    	</div>
		    </div>
	    </div>
	    <div class="row ">
		    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4 mt-4">
		    	<h5 class="row">All courses</h5>
		    	<span class="row ">
		    		<img src="{{asset('images/dashboard/rwanda1.png')}}" class=" img-responsive" style="height: 6px; width: 150px;">
		    	</span>
		    </div>
		    <div class="row">
		        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		        	<div class=" ">
		        		<div class="iframe">
		        			<img src="{{asset('images/dashboard/img_1.jpg')}}" alt="" class="img-responsive" />
		        		</div>
		        		<div class="overlay-icon">
		        			<i class="fa fa-play-circle-o"></i>
		        		</div>
		        		<p>Chemistry</p>
		        		<h6>24 DEC 2014</h6>
		        	</div>
		        </div>
		        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		        	<div class="">
		        		<div class="iframe-img">
		        			<img src="{{asset('images/dashboard/img_1.jpg')}}" alt="" class="img-responsive" />
		        		</div>
		        		<div class="overlay-icon">
		        			<i class="fa fa-play-circle-o"></i>
		        		</div>
		        		<p>Chemistry</p>
		        		<h6>24 DEC 2014</h6>
		        	</div>    
		        </div>
		        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		        	<div class=" ">
		        		<div class="iframe">
		        			<img src="{{asset('images/dashboard/img_2.jpg')}}" alt="" class="img-responsive" />
		        		</div>
		        		<div class="overlay-icon">
		        			<i class="fa fa-play-circle-o"></i>
		        		</div>
		        		<p>Chemistry</p>
		        		<h6>24 DEC 2014</h6>
		        	</div>
		        </div>
		        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
		        	<div class="">
		        		<div class="iframe-img">
		        			<img src="{{asset('images/dashboard/img_3.jpg')}}" alt="" class="img-responsive" />
		        		</div>
		        		<div class="overlay-icon">
		        			<i class="fa fa-play-circle-o"></i>
		        		</div>
		        		<p>Chemistry</p>
		        		<h6>24 DEC 2014</h6>
		        	</div>    
		        </div>
		    </div>
	    </div>
	</div>
</div>
<script>
	$(document).ready(function(){
        $("#primary").click(function(){
            $("#mydrop").toggle(1000);
        });
    });
</script>
@endsection