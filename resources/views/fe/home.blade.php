@extends('fe.layout')
@section('content_web')
    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    {{--                <div class="row">--}}
                    {{--                    <div class="col-lg-12">--}}
                    {{--                        <div class="trending-tittle">--}}
                    {{--                            <strong>Trending now</strong>--}}
                    {{--                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->--}}
                    {{--                            <div class="trending-animated">--}}
                    {{--                                <ul id="js-news" class="js-hidden">--}}
                    {{--                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>--}}
                    {{--                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>--}}
                    {{--                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}

                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="assets/img/trending/trending_top1.jpg" alt="">
                                    <div class="trend-top-cap">
                                        <span>Appetizers</span>
                                        <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/trending_bottom1.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1">Lifestyple</span>
                                                <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/trending_bottom2.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color2">Sports</span>
                                                <h4><h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="assets/img/trending/trending_bottom3.jpg" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color3">Travels</span>
                                                <h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Riht content -->
                        <div class="col-lg-4">
                            @foreach($newList as $new)
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img  width="100px" src="{{asset($new->images[0]->path)}}" alt="">
                                    </div>
                                    <div class="trand-right-cap">
                                    <span @if($new->category->id == 1)
                                              class="color1"
                                          @elseif($new->category->id == 2)
                                              class="color2"
                                          @elseif($new->category->id == 3)
                                              class="color3"
                                          @endif
                                        >{{$new->category->name}}</span>
                                        <h4><a href="{{route('post',['id'=>$new->id])}}">{{$new->title}}</a></h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!--   Weekly-News start -->
        <div class="weekly-news-area pt-50">
            <div class="container">
                <div class="weekly-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Tin hót</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly-news-active dot-style d-flex dot-style">
                                @foreach($listSpecial as $special)
                                    <div class="weekly-single">
                                        <div class="weekly-img">
                                            <img  height="300px" src="{{asset($special->images[0]->path)}}" alt="">
                                        </div>
                                        <div class="weekly-caption">
                                        <span @if($special->category->id == 1)
                                                  class="color1"
                                              @elseif($special->category->id == 2)
                                                  class="color2"
                                              @elseif($special->category->id == 3)
                                                  class="color3"
                                              @endif
                                        >{{$special->category->name}}</span>
                                            <h4><a href="{{route('post',['id'=>$special->id])}}">{{$special->title}}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                                {{--                                <div class="weekly-single active">--}}
                                {{--                                    <div class="weekly-img">--}}
                                {{--                                        <img src="assets/img/news/weeklyNews1.jpg" alt="">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="weekly-caption">--}}
                                {{--                                        <span class="color1">Strike</span>--}}
                                {{--                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="weekly-single">--}}
                                {{--                                    <div class="weekly-img">--}}
                                {{--                                        <img src="assets/img/news/weeklyNews3.jpg" alt="">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="weekly-caption">--}}
                                {{--                                        <span class="color1">Strike</span>--}}
                                {{--                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="weekly-single">--}}
                                {{--                                    <div class="weekly-img">--}}
                                {{--                                        <img src="assets/img/news/weeklyNews1.jpg" alt="">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="weekly-caption">--}}
                                {{--                                        <span class="color1">Strike</span>--}}
                                {{--                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Tin mới </h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                            @foreach($categories as $category)
                                                <a class="nav-item nav-link" id="nav-{{$category->name}}-tab" data-toggle="tab" href="#nav-{{$category->name}}" role="tab" aria-controls="nav-{{$category->name}}" aria-selected="false">{{$category->name}}</a>
                                            @endforeach
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav" role="tabpanel" aria-labelledby="nav-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                @foreach($listPost as $post)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img  height="300px" src="{{$post->images[0]->path}}" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                           <span @if($post->category->id == 1)
                                                                     class="color1"
                                                                 @elseif($post->category->id == 2)
                                                                     class="color2"
                                                                 @elseif($post->category->id == 3)
                                                                     class="color3"
                                                                 @endif
                                                            >{{$post->category->name}}</span>
                                                                <p>{{$post->created_at}}</p>
                                                                <h4><a href="{{route('post',['id'=>$post->id])}}">{{$post->title}}</a></h4>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div style=" display:flex; justify-content: center;">
                                        {{$listPost->links()}}
                                    </div>
                                    <!-- Card two -->
                                    @foreach($listSport as $sport)
                                        <div class="tab-pane fade" id="nav-{{$sport->category->name}}" role="tabpanel" aria-labelledby="nav-{{$sport->category->name}}-tab">
                                            <div class="whats-news-caption">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img height="300px" src="{{$sport->images[0]->path}}" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1">{{$sport->category->name}}</span>
                                                                <h4><a href="#">{{$sport->title}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="assets/img/news/whatNews2.jpg" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1">Night party</span>
                                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="assets/img/news/whatNews3.jpg" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1">Night party</span>
                                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img src="assets/img/news/whatNews4.jpg" alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <span class="color1">Night party</span>
                                                                <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="assets/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="assets/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->
        <!--   Weekly2-News start -->
        <div class="youtube-area video-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-items-active">
                            @foreach($listVideo as $video)
                                <div class="video-items text-center">
                                    <iframe src="{{$video->path}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="video-info">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="video-caption">
                                <div class="top-caption">
                                </div>
                                <div class="bottom-caption">
                                    <h2>Video mới nhất</h2>
                                    <p>Xu thế của các cơ quan báo chí, truyền thông nói chung và báo điện tử nói riêng ở nước ta cũng như trên thế giới hiện nay là giảm bớt lượng thông tin trình bày bằng văn bản, tăng cường sử dụng hình ảnh và video để chuyển tải thông tin. Tuy nhiên, thực tế cho thấy, nhiều tờ báo điện tử vẫn chưa khai thác video như một yếu tố truyền tải thông tin hữu ích. Vì thế, việc nhận thức đúng vai trò và tính chất, tầm quan trọng của việc sử dụng video trong tác phẩm báo chí đa phương tiện là hết sức cần thiết</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testmonial-nav text-center">
                                @foreach($listVideo as $video)
                                    <div class="single-video">
                                        <iframe  src="{{$video->path}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <div class="video-intro">
                                            <h4>{{$video->title}}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Tin nổi bật trong tuần</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                @foreach($posts as $post)
                                    <div class="weekly2-single">
                                        <div class="weekly2-img">
                                            <img  height="200px" src="{{asset($post->images[0]->path)}}" alt="">
                                        </div>
                                        <div class="weekly2-caption">
                                        <span @if($post->category->id == 1)
                                                  class="color1"
                                              @elseif($post->category->id == 2)
                                                  class="color2"
                                              @elseif($post->category->id == 3)
                                                  class="color3"
                                          @endif
                                        >{{$post->category->name}}</span>
                                            <p>{{$post->created_at}}</p>
                                            <h4><a href="{{route('post',['id'=>$post->id])}}">{{$post->title}}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- Start Youtube -->

        <!-- End Start youtube -->
        <!--  Recent Articles start -->
{{--        <div class="recent-articles">--}}
{{--            <div class="container">--}}
{{--                <div class="recent-wrapper">--}}
{{--                    <!-- section Tittle -->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="section-tittle mb-30">--}}
{{--                                <h3>Recent Articles</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="recent-active dot-style d-flex dot-style">--}}
{{--                                <div class="single-recent mb-100">--}}
{{--                                    <div class="what-img">--}}
{{--                                        <img src="assets/img/news/recent1.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="what-cap">--}}
{{--                                        <span class="color1">Night party</span>--}}
{{--                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-recent mb-100">--}}
{{--                                    <div class="what-img">--}}
{{--                                        <img src="assets/img/news/recent2.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="what-cap">--}}
{{--                                        <span class="color1">Night party</span>--}}
{{--                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-recent mb-100">--}}
{{--                                    <div class="what-img">--}}
{{--                                        <img src="assets/img/news/recent3.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="what-cap">--}}
{{--                                        <span class="color1">Night party</span>--}}
{{--                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="single-recent mb-100">--}}
{{--                                    <div class="what-img">--}}
{{--                                        <img src="assets/img/news/recent2.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="what-cap">--}}
{{--                                        <span class="color1">Night party</span>--}}
{{--                                        <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--Recent Articles End -->
        <!--Start pagination -->
        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End pagination  -->
    </main>
@endsection
