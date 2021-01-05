@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}" type="text/css" media="all" />
<style>
@import url(https://fonts.googleapis.com/css?family=Istok+Web);
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}
* {
  box-sizing: border-box;
}
/* body, figure {
  margin: 0; background: #101010;
  font-family: Istok Web, sans-serif;
  font-weight: 100;
} */
div#captioned-gallery {
  width: 100%; overflow: hidden;
  margin-top:0%;
}
figure.slider {
  position: relative; width: 500%;
  font-size: 0; animation: 30s slidy infinite;
}
figure.slider figure {
  width: 20%; height: auto;
  display: inline-block;  position: inherit;
}
figure.slider img { width: 100%; height: 85%; }
figure.slider figure figcaption {
  position: absolute; bottom: 0;
  background: rgba(0,0,0,0.4);
  color: #fff; width: 100%;
  font-size: 1.5rem; padding: .4rem;
}
</style>
@section('content')
<section class="container-fluid">
            {{-- <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/"> --}}
            <div id="captioned-gallery">
                <figure class="slider">
                    <figure>
                        <img src="{{asset('frontend\img\banner1.jpg')}}" class="img-fluid" alt>
                        <figcaption>Advanced Computer training Section</figcaption>
                    </figure>
                    <figure>

                        <img src="{{asset('frontend\img\banner2.jpg')}}" class="img-fluid" alt>
                        <figcaption>Computer Sales & Accessories</figcaption>
                    </figure>
                    <figure>
                        <img src="{{asset('frontend\img\banner3.jpg')}}" class="img-fluid" alt>
                        <figcaption>Computer Repairs & Maintenance</figcaption>
                    </figure>
                    <figure>
                        <img src="{{asset('frontend\img\banner5.jpg')}}" class="img-fluid" alt>
                        <figcaption>Computer Basic Training Section</figcaption>
                    </figure>
                    <figure>
                        <img src="{{asset('frontend\img\banner4.jpg')}}" class="img-fluid" alt>
                        <figcaption>Profession Training Section</figcaption>
                    </figure>

                </figure>
            </div>

</section>
    <section  class="home-fact-area" >
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fas fa-bullseye float-left"></i>
                        <div class="text-box">
                            {{-- <h4>{{ $courses->count() }} online course(s)</h4> --}}
                            <h4>{{ $offlinecourse->count() }}  course(s)</h4>
                            <p>Explore A Variety Of Fresh Topics</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fa fa-check float-left"></i>
                        <div class="text-box">
                            <h4>Expert Instructors</h4>
                            <p>Find The Right Course For You</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4  d-flex">
                    <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                        <i class="fa fa-clock float-left"></i>
                        <div class="text-box">
                            <h4>Lifetime Access</h4>
                            <p>Learn On Your Schedule</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- offline course -->

<section class="course-carousel-area" style="overflow: hidden">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title">Top Offline courses</h2>
                    <div class="course-carousel">
                        @foreach($offlinecourse as $course)
                            <div class="course-box-wrap">
                                <a href="{{ route('offline_detail', $course) }}">
                                    <div class="course-box">
                                        <div class="course-image">
                                            <img src="{{ asset('/images/'.$course->thumbnail)}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-details">
                                            <h5 class="title">{{ $course->title }}</h5>
                                            <p class="instructors"> {{$course->instructor->last_name}} {{$course->instructor->first_name}}</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">5</span>
                                            </div>
                                            <p class="price text-right">
                                                <small>
                                                <!-- {{ $course->amount}} -->
                                                </small>
                                               N{{ $course->amount }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- end of offline course -->
    {{-- <section class="course-carousel-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title">Top Courses</h2>
                    <div class="course-carousel">
                        @foreach (\App\Course::inRandomOrder()->get() as $top_course)
                            <div class="course-box-wrap">
                                <a href="{{ route('course_detail', $top_course) }}"
                                   class="has-popover">
                                    <div class="course-box">
                                        <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                        <div class="course-image">
                                            <img src="" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-details">
                                            <h5 class="title">{{ $top_course->title }}</h5>
                                            <p class="instructors">{{ $top_course->short_description }}</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">5</span>
                                            </div>
                                            <p class="price text-right">
                                                ${{ $top_course->price }}
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <div class="webui-popover-content">
                                    <div class="course-popover-content">

                                        <div class="course-title">
                                            <a href="{{ route('course_detail', $top_course) }}">{{ $top_course->title }}</a>
                                        </div>
                                        <!-- <div class="course-category">
                                            <span class="course-badge best-seller">Best seller</span>
                                            in
                                            <a href="">PHP</a>
                                        </div> -->
                                        <div class="course-meta">
                                        <span class=""><i class="fas fa-play-circle"></i>
                                            {{ $top_course->lessons->count() }} Lessons
                                        </span>
                                            <span class=""><i class="far fa-clock"></i>
                                            2 Hours
                                        </span>
                                            <span class="">
                                            <i class="fas fa-closed-captioning"></i>English
                                        </span>
                                        </div>
                                        <div class="course-subtitle">{{ $top_course->short_description }}</div>
                                        <div class="what-will-learn">
                                            <ul>
                                                {{ $top_course->outcomes }}
                                            </ul>
                                        </div>
                                        <div class="popover-btns">
                                            @if(auth()->check() && \App\Enroll::whereCourseId($top_course->id)->first() !== null)
                                                <div class="purchased">
                                                    <a href="#">Already purchased</a>
                                                </div>
                                            @elseif(Cart::get($top_course->id) !== null)
                                                <button type="button"
                                                        class="btn add-to-cart-btn addedToCart big-cart-button-1"
                                                        id="1">
                                                    Added To Cart
                                                </button>
                                            @else
                                                <button type="button"
                                                        class="btn add-to-cart-btn addedToCart big-cart-button-1"
                                                        id="1">
                                                    Add To Cart
                                                </button>
                                            @endif
                                            <button type="button"
                                                    class="wishlist-btn"
                                                    title="Add to wishlist"
                                                    id="1"><i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="course-carousel-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title">Top 10 latest courses</h2>
                    <div class="course-carousel">
                        @foreach($courses as $course)
                            <div class="course-box-wrap">
                                <a href="{{ route('course_detail', $course) }}">
                                    <div class="course-box">
                                        <div class="course-image">
                                            <img src="" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-details">
                                            <h5 class="title">{{ $course->title }}</h5>
                                            <p class="instructors">first and last name of the instructor</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">5</span>
                                            </div>
                                            <p class="price text-right">
                                                <small>
                                                    $200
                                                </small>
                                                $100
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
