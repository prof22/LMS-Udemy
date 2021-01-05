@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
$(function() {
	var $a = $(".tabs li");
	$a.click(function() {
		$a.removeClass("active");
		$(this).addClass("active");
	});
});
</script>
<style>
.h2{
  color:#ff8b38;
  font-weight:bold;
}
.tabs{
  background-color:#f5f5f5;
  padding-top:30px;
  padding-bottom:30px;
}

.tabs .tab-pane{
  margin-left:20px;
}

.tabs h3{
  font-size:20px;
  margin-top:10px;
  margin-bottom:60px;
}

.tabs p{
  font-size:14px;
}

.tabs a{
  font-size:15px;
  font-family:OpenSans,sans-serif;
  font-weight:700;
  color:#fff;
  padding:30px;
  text-decoration:none;
}

.tabs li{
  background-color:#333;
  margin-top:1px;
  text-align:center;
  height:50px;
  width:200px;
  padding-top:10px;
  -webkit-border-radius:3px;
  border-radius:3px;
}
.tabs li.active{
  background-color:grey;
}
</style>
<br><br><br><br>

<div class="tabs">
		<div class="container">
			<div class="row">
				<div class="col-xl-3">
					<ul class="nav nav-pills nav-stacked flex-column">
                        <li><a href="#tab_a" data-toggle="pill">About Us</a></li>
                        <li><a href="#tab_e" data-toggle="pill">Our Vision</a></li>
						<li><a href="#tab_b" data-toggle="pill">CEO Message</a></li>
						<li><a href="#tab_c" data-toggle="pill">Our Courses</a></li>
						<li><a href="#tab_d" data-toggle="pill">Our Team</a></li>

					</ul>
<br> <br>
          {{-- <div class="text-center" style="border:1px solid grey; width:200px">

							<h4 class="text-center"  style="padding-bottom:2px">Worthwhile School</h4>
							<p>I called School Time and my husband
              and son came with me for the tour. We
               felt the magic immediately.<br>
               Alexa fon Tobel<br>
               CEO
</p>
				</div> --}}
				</div>

				<div class="col-xl-8">
					<div class="tab-content">
						<div class="tab-pane active" id="tab_a">
							<h2 class="h2">INFINITY TECH WORLD</h2>
							<p align="justify">INFINITY TECH-WORLD is an establishment found
                                on development and integrity. As an organization, we
                                specialize in ICT Training, Sales, Repairs and
                                 maintenance. Our purpose is to educate and improve literacy in
                                  the world of Information technology both on theoretical and
                                   practical aspect. Through our class-friendly interactive
                                   sessions and online forum, students can learn and share
                                   ideas and information from home or in class. We supply
                                   sales and services to universities and organizations
                                   throughout Nigeria, and have highly experienced standby
                                   and mobile ICT technicians readily available to handle
                                   different kinds of repairs and maintenance of ICT
                                    devices for our customers. We are
                                inspired to be the best in what we do and offer
                                 world-class services to our customers. </p>

						</div>
						<div class="tab-pane" id="tab_b">
          <div class="row">
          <div class="col-md-5">
          <img src="images/director.png" alt="director" width="90%"/><br>
          <strong> Aminu Lateef  Temitope</strong> <br>
          <strong class="text-center">   CEO</strong>
          </div>
          <div class="col-md-6">
							<h2 class="h2">INFINITY TECH-WORLD</h2>
							<p align="justify">Our approach to our customers is to create, modify,
               enhance, and protect the business of our
               clients through creating informed solutions to their
               technological needs based on the creative presentation
               of essential information. Adherence to stringent ethical
               standards, as well as the use of  communication
              tools makes INFINITY capable of optimally satisfying
              the needs of its clients.</p>
          </div>
              </div>
						</div>
						<div class="tab-pane" id="tab_c">
							<h3 class="alert alert-success text-center" style="margin-bottom:8px">Our Course</h3>

                            @foreach ($offlinecourse as $course)
                            <span style="width:200px">
                            <h4 style="padding-bottom:2px; color:chocolate">{{$course->title}}</h4>
                              <p> {{$course->short_description}}</p><br>
                            </span>
                        @endforeach

                        </div>


            <div class="tab-pane" id="tab_d">
							<h3>Nothing To display </h3>
							<p>Coming Soon go to Values</p>
						</div>
            <div class="tab-pane" id="tab_e">
            <div class="row">
              <div class="col-md-6">
              <h2 class="h2">Our Vision</h2>
							<p align="justify">Our vision is to be the leading
              organization in the ICT global market through
              providing world class ICT training,
               device repairs and maintenance, ICT products,
                software and web development.</p>
              </div>
              <div class="col-md-6">
              <h2 class="h2">Our Mission</h2>
							<p align="justify">Our mission is to bring ICT
               knowledge to all who seeks knowledge
               which is anchored on equity, quality, and
              national cohesion. Also to provide
              quality services to all our ICT users around us.</p>
              </div>
            </div>
            {{-- <div class="row"> --}}
            {{-- <div class="col-md-6">
            <h2 class="h2">Our Core</h2>
							<p align="justify">Note that the tours are
              booked well in advance and only a certain number
              of parents can be accommodated on each tour
               on first come first serve basis.
               Also it should be noted that the tour does not guarantee that the child will be accepted in
              the school as this depends on
              the availability and also the eligibility of the child.</p>
              </div> --}}
              {{-- <div class="col-md-6">
              <h2 class="h2">Goals and Objectives</h2>
							<p align="justify">INFINITY TECH WORLD is set out to train
               and give quality services to all our clients,
               fully exploiting our  best services  to make
               sure that  by the end of 2020, we will have
               trained countless number of our nation’s
                youths empowering them to self employment and self
              sustenance using  advance modern technology
              keeping them in pace with its evolvement.</p>
              </div> --}}

            {{-- </div> --}}

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<br><br>
@endsection
