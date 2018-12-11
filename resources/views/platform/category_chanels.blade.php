@extends('layouts.teaching')
@section('content')
  <!--======= header =======-->
     @include('platform.includes._header')
     <!-- // header -->
      <!-- //main-category starts -->
      @include('platform.includes._navtop')
      <!-- // main-category -->
<div class="site-output">
        @include('platform.includes._sidenav')
        <!-- // col-md-2 -->
    <div id="all-output" class="col-md-10">
            <!-- Category Cover Image -->
            <div id="category-cover-image">
                <div class="image-in">
                    <img src="{{asset ('platformPublic/demo_img/category-img.jpg')}}" alt="">
                </div>
                <h1 class="title"><i class="fa fa-music"></i> Music</h1>
                <ul class="category-info">
                    <li>97,174,199 subscribers </li>
                    <li>255,525,456 Views</li>
                    <li>45,23,65 Channel No</li>
                    <li class="subscribe"><a href="#">Subscribe</a></li>
                </ul>
            </div>
            <!-- // Category Cover Image -->

            <!-- category -->
            <div id="category">
                <div class="row">
                    <div class="col-md-2">
                        <ul class="category-menu">
                            <li><a href="02-category.html">Home</a></li>
                            <li><a href="03-category_videos.html">videos</a></li>
                            <li class="active"><a href="04-category_chanels.html">Chanels</a></li>
                            <li><a href="05-category_playlists.html">playlists</a></li>
                            <li><a href="06-category_about.html">about</a></li>
                        </ul>

                        <div class="share-in">
                            <h1 class="title">Share in</h1>
                            <ul class="social-link">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i> 11200 </a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i> 514 </a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i> 514 </a></li>
                                <li class="vimeo"><a href="#"><i class="fa fa-vimeo"></i> 155 </a></li>
                            </ul>
                        </div>

                        <div class="advertising-block">
                            <h1 class="title">Advertising</h1>
                            <div class="advertising-code">
                                <a href="#"><img src="{{asset ('platformPublic/demo_img/adv.jpg')}}" alt=""></a>
                            </div>
                        </div>

                    </div><!-- // col-md-2 -->

                    <div class="col-md-10">

                        <div class="row">

                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->



                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-2.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->


                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-3.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->


                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-4.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->


                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-5.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->


                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-6.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->


                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-7.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->


                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-8.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->



                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->

                            <!-- Chanels Item -->
                            <div class="col-md-6">
                                <div class="chanel-item">
                                    <div class="chanel-thumb">
                                        <a href="#"><img src="{{asset ('platformPublic/demo_img/ch-2.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="chanel-info">
                                        <a class="title" href="#">Rabie Elkheir</a>
                                        <span class="subscribers">436,414 subscribers</span>
                                    </div>
                                    <a href="#" class="subscribe">Subscribe</a>
                                </div>
                             </div>
                            <!-- // Chanels Item -->


                        </div><!-- // row -->


                        <!-- Loading More Videos -->
                        <div id="loading-more">
                            <i class="fa fa-refresh faa-spin animated"></i> <span>Loading more</span>
                        </div>
                        <!-- // Loading More Videos -->

                    </div>


                </div><!-- // row -->
            </div>
            <!-- // category -->
        </div>
</div>
@endsection