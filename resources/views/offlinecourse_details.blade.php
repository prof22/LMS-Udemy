@extends('layouts.app')

@section('content')
   <section class="course-header-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="course-header-wrap">
                        <h1 class="title">{{ $offlinecourses->title }}</h1>
                        <p class="subtitle">{{ $offlinecourses->short_description }}</p>
                        <div class="rating-row">
                            {{--<span class="course-badge best-seller">Best seller</span>--}}
                            <?php
                            for($i = 1; $i < 6; $i++):?>
                            <?php if ($i <= 5): ?>
                            <i class="fas fa-star filled" style="color: #f5c85b;"></i>
                            <?php else: ?>
                            <i class="fas fa-star"></i>
                            <?php endif; ?>
                            <?php endfor; ?>
                            <span class="d-inline-block average-rating"><?php echo 5; ?></span>
                            <span>(20 ratings)</span>
                            <span class="enrolled-num">
                                100 students enrolled
                            </span>
                        </div>
                        <div class="created-row">
                            {{--<span class="created-by">--}}
                            {{--Created by--}}
                            {{--<a href="">first_name last_name</a>--}}
                            {{--</span>--}}
                            <span class="last-updated-date">Created on {{ $offlinecourses->created_at }}</span>
                            <span class="last-updated-date">Last updated on {{ $offlinecourses->updated_at }}</span>
                            <span class="comment">
                                <i class="fas fa-comment"></i>English
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>

    <section class="course-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="what-you-get-box">
                        <div class="what-you-get-title">What i will learn?</div>
                        <ul class="what-you-get__items">
                            <li>{{ $offlinecourses->outcomes }}</li>
                        </ul>
                    </div>
                    <br>
                    <div class="course-curriculum-box">
                        <div class="course-curriculum-title clearfix">
                            <div class="title float-left">Lessons for this course</div>
                            <div class="float-right">
                                <span class="total-lectures">

                                </span>
                                {{-- <span class="total-time">
                                    2 hours
                                </span> --}}
                            </div>
                        </div>
                        <div class="course-curriculum-accordion">

                            <div class="lecture-group-wrapper">
                                <div class="lecture-group-title clearfix" data-toggle="collapse"
                                     data-target="#collapse"
                                     aria-expanded="false">
                                    <div class="title float-left">
                                        Lessons
                                    </div>
                                    <div class="float-right">

                                            <span class="total-lectures">
                                                {{-- {{ $offlinecourses->lessons->count() }} lessons --}}
                                            </span>

                                        {{-- <span class="total-time">
                                            12: 30 minute
                                        </span> --}}
                                    </div>
                                </div>

                                <div id="collapse" class="lecture-list collapse">

                                    {!! $offlinecourses->lesson !!}


                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="requirements-box">
                        <div class="requirements-title">Requirements</div>
                        <div class="requirements-content">
                            <ul class="requirements__list">
                                <li>{{ $offlinecourses->requirements }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="description-box view-more-parent">
                        <div class="view-more" onclick="viewMore(this,'hide')">
                            + View More
                        </div>
                        <div class="description-title">Description</div>
                        <div class="description-content-wrap">
                            <div class="description-content">
                                {{ $offlinecourses->description }}
                            </div>
                        </div>
                    </div>


                    <div class="compare-box view-more-parent">
                        <div class="view-more" onclick="viewMore(this)">+ View More</div>
                        <div class="compare-title">Language or Programs Used</div>
                        <div class="compare-courses-wrap">
                        {{ $offlinecourses->language }}
                        </div>
                    </div>


                    <div class="compare-box view-more-parent">
                       <div class="compare-title">Price for this course</div>
                        <div class="compare-courses-wrap">
                               <strong> N{{$offlinecourses->amount}} </strong>
                        </div>
                    </div>

                    <div class="about-instructor-box">
                        <div class="about-instructor-title">
                            About the instructor
                        </div>
                        <div class="row">
                        <div class="col-lg-8">
                                <div class="about-instructor-details view-more-parent">
                                    <div class="view-more" onclick="viewMore(this)">+ View More</div>
                                    <div class="instructor-name">
                                        <a href=""></a>
                                    </div>
                                    <div class="instructor-title">
                                    {{$offlinecourses->instructor->last_name}} {{$offlinecourses->instructor->first_name}}
                                    </div>
                                    <div class="instructor-bio">
                                    {{$offlinecourses->instructor->position}} <br>
                                    {{$offlinecourses->instructor->course}} <br>
                                    {{$offlinecourses->instructor->phone}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>

                                    <ul>
                                         <li>
                                            <i class="fas fa-comment"></i><b>
                                                100
                                            </b> reviews
                                        </li>
                                        <li><i class="fas fa-user"></i><b>
                                                120
                                            </b> Students
                                        </li>
                                        <li>
                                            <i class="fas fa-play-circle"></i>
                                            <b>
                                                11
                                            </b> Courses
                                        </li>
                                    </ul>
                                </div>
                            </div>
                      </div>
                      <br/><br/>
                      <button type="button" class="hvr-icon-float-away btn btn-primary" data-toggle="modal" data-target="#myModal">Apply Now</button>
                    </div>

                </div>

            </div>
        </div>
    </section>

 <!-- modal for application -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
                                    <h4 class="modal-title" id="myModal">Application</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

									</div>
									<div class="modal-body">
			<form role="form" class="form-horizontal" method="post" action="{{ route ('apply_offline_detail')}}">
                    {{csrf_field()}}
						<div class="form-group">
							<label class="col-md-6 control-label">Course Title</label>
							<div class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control" readonly name="title" value="{{$offlinecourses->title}}">
								</div>
							</div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-6 control-label">Full Name</label>
							<div class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control" name="fullname" placeholder="Enter Full name">
								</div>
							</div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-6 control-label">Address</label>
							<div class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control" name="address" placeholder="Enter Address">
								</div>
							</div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-6 control-label">State of Resident</label>
							<div class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control" name="state" placeholder="State of Resident">
								</div>
							</div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-6 control-label">Email</label>
							<div class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="email" class="form-control" name="email" placeholder="Enter Email">
								</div>
							</div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-6 control-label">Phone</label>
							<div class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control" name="phone" placeholder="Enter Phone">
								</div>
							</div>
                        </div>

                        <div class="form-group">
							<label class="col-md-2 control-label">Message</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<textarea cols="33" rows="3" name="message" placeholder="Enter Message for us"></textarea>
								</div>
							</div>
                        </div>

					<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Apply Now</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

					</form>
					</div>
								</div>
	</div>
    </div>
</div>
@endsection
