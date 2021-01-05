@extends('layouts.instructor-layout')
@section('title')Courses @endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/table-style.css')}}" />
<div class="agile-tables">
<div class="w3l-table-info">
	<div class="col-md-4 modal-grids">
		<button type="button" class="hvr-icon-float-away btn btn-primary" data-toggle="modal" data-target="#myModal" >Add Courses</button>
	</div>
					  <h2>Course</h2>
					
					  <table id="table">
						<thead>
						  <tr>
							<th>S/N</th>
							<th>TITLE</th>
							<th>SHORT DEC</th>
                            <th>DEC</th>
                            <th>OUTCOME</th>
                            <th>SECTION</th>
                            <th>REQUIREMENT</th>
                            <th>LANGUAGE</th>
                            <th>AMOUNT</th>
														<th>THUMBNAIL</th>
													
                            <th>ACTION</th>
						 </tr>
						</thead>
					
					@foreach($course as $course)
					<tbody>
						  <tr>
							<td>{{$course->id}}</td>
							<td>{{$course->title}}</td>
                            <td>{{$course->short_description}}</td>
                            <td>{{$course->description}}</td>
                            <td>{{$course->outcomes}}</td>
                            <td>{{$course->section}}</td>
                            <td>{{$course->requirements}}</td>
                            <td>{{$course->language}}</td>
                            <td>{{$course->price}}</td>
														<td><img src="{{ asset('/images/'.$course->thumbnail)}}"/></td>
													
							<td>
							
							<button type="button" 
								class="btn btn-primary btn-sm fa fa-edit"
								 data-toggle="modal" 
								data-target="#myModaledit{{$course->id}}">
							</button><i alert alert-info>Edit</i>
						
							 <form action="#" method="post">
								 @csrf 
								 @method('DELETE')
								<button type="submit" class="btn btn-danger fa fa-trash">
								</button>
								<i alert alert-info>Delete</i>
							</form>
							</td>
						  </tr>
						</tbody>

						@push('edit')
						<div class="modal fade" id="myModaledit{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="myModaledit">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModaledit">Edit course</h4>
									</div>
									<div class="modal-body">
			<form role="form" class="form-horizontal" method="post" action="#">
				@method('PATCH')
                    {{csrf_field()}}
						<div class="form-group">
							<label class="col-md-2 control-label">Title</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="course" value="{{$course->title}}" placeholder="Programming, Business, IT & Software, Graphics etc">
								</div>
							</div>
                        </div>
                        <!-- <input type="submit" class="btn btn-primary" value="Add"> -->
				
								
					<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
					</form>
					</div>
								</div>
							</div>
						</div>
						@endpush					
			@endforeach
			</table>
		</div>
</div>
@stack('edit')
<!-- Add course -->

	
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModal">Add course</h4>
									</div>
									<div class="modal-body">
			<form role="form" class="form-horizontal" method="post" action="{{ route('course.submit')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!-- title -->
						<div class="form-group">
							<label class="col-md-2 control-label">Title</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="title" placeholder="Programming, Business, IT & Software, Graphics etc">
								</div>
							</div>
                        </div>
                    <!-- short description -->
                    <div class="form-group">
							<label class="col-md-2 control-label">Short Description</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="short_desc" placeholder="Enter Short Description">
								</div>
							</div>
                        </div>
                
                        <!-- Description -->
                        <div class="form-group">
							<label class="col-md-2 control-label">Description</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<textarea cols="33" rows="3" class="form-control"  name="description" placeholder="Enter Description"></textarea>
								</div>
							</div>
                        </div>
                    
                        <!-- outcome -->
                        <div class="form-group">
							<label class="col-md-2 control-label">Outcome</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="outcome" placeholder="Enter outcome">
								</div>
							</div>
                        </div>
                        <!-- section -->
                        <div class="form-group">
							<label class="col-md-2 control-label">Session</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="section" placeholder="Enter Number of Sections">
								</div>
							</div>
                        </div>
                        <!-- requirement -->
                        <div class="form-group">
							<label class="col-md-2 control-label">Requirement</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="requirements" placeholder="Enter Requirement needed">
								</div>
							</div>
                        </div>
                        <!-- language -->
                        <div class="form-group">
							<label class="col-md-2 control-label">Language</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="language" placeholder="Enter Languages Used or Program Used">
								</div>
							</div>
                        </div>

                        <!-- Amount -->
                        <div class="form-group">
							<label class="col-md-2 control-label">Amount</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="amount" placeholder="Enter Amount">
								</div>
							</div>
                        </div>

                    <!-- level -->

                    <div class="form-group">
							<label class="col-md-2 control-label">Level</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="level" placeholder="Enter Level">
								</div>
							</div>
                        </div>

                <!-- thumbnail -->
                        <div class="form-group">
							<label class="col-md-2 control-label">Thumbnail</label>
							<div class="col-md-8">
								<div class="input-group">
									<input type="file" class="form-control1" name="thumbnail">
								</div>
							</div>
                        </div>

                    <!-- video Url -->
                        <div class="form-group">
							<label class="col-md-2 control-label">Video URL</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="video_url" placeholder="www.video.com">
								</div>
							</div>
                        </div>

                        <div class="form-group">
							<label class="col-md-2 control-label">Visibility</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="visibility" placeholder="Enter 1 or 0">
								</div>
							</div>
                        </div>

                        <!-- category -->
                        <div class="form-group">
							<label class="col-md-2 control-label">Category</label>
							<div class="col-md-8">
								<div class="input-group">
									<select class="form-control" name="category_id">
                                        @foreach($cat as $cat)
                                        <option value="{{$cat->id}}"> {{$cat->title}} </option>
                                        @endforeach
                                    </select>           
								</div>
							</div>
                        </div>
					<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
					</form>
					</div>
								</div>
							</div>
	</div>
 @endsection
