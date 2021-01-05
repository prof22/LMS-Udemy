@extends('layouts.instructor-layout')
@section('title')Lessons @endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/table-style.css')}}" />
<div class="agile-tables">
<div class="w3l-table-info">
	<div class="col-md-4 modal-grids">
		<button type="button" class="hvr-icon-float-away btn btn-primary" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">Add Cat</button>
	</div>
					  <h2>Lesson</h2>

					  <table id="table">
						<thead>
						  <tr>
							<th>S/N</th>
							<th>TITLE</th>
							<th>NAME</th>
							<th>ACTION</th>
						 </tr>
						</thead>

					@foreach($lessons as $lesson)
					<tbody>
						  <tr>
							<td>{{$lesson->id}}</td>
							<td>{{$lesson->offlinecourse->title}}</td>
							<td>{{$lesson->title}}</td>
							<td>

							<button type="button"
								class="btn btn-primary btn-sm fa fa-edit"
								 data-toggle="modal"
								data-target="#myModaledit{{$lesson->id}}">
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
						<div class="modal fade" id="myModaledit{{$lesson->id}}" tabindex="-1" role="dialog" aria-labelledby="myModaledit">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModaledit">Edit Category</h4>
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
									<input type="text" class="form-control1" name="lesson" value="{{$lesson->title}}" placeholder="Programming, Business, IT & Software, Graphics etc">
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
<!-- Add category -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModal">Add lesson</h4>
									</div>
									<div class="modal-body">
                                    <form role="form" class="form-horizontal" method="post" action="{{ route('lesson.submit')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-8">
                                <div class="input-group">
                                     <input type="hidden" class="form-control1" name="instructors_id" value="{{ Auth::guard('instructor')->user()->id }}">
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
							<label class="col-md-2 control-label">Course</label>
							<div class="col-md-8">
								<div class="input-group">
									<select class="form-control" name="course_id">
                                        @foreach($courses as $course)
                                        <option value="{{$course->id}}"> {{$course->title}} </option>
                                        @endforeach
                                    </select>
								</div>
							</div>
                        </div>
                    <div class="form-group">
							<label class="col-md-2 control-label">Enter Lesson</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="lesson[]" placeholder="Course outline">
								</div>
							</div>
                        </div>
                        <div class="form-group">
							<label class="col-md-2 control-label">Enter Lesson</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="lesson[]" placeholder="Course outline">
								</div>
							</div>
                        </div>

                        <div class="form-group">
							<label class="col-md-2 control-label">Enter Lesson</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="lesson[]" placeholder="Course outline">
								</div>
							</div>
                        </div>

                        <div class="form-group">
							<label class="col-md-2 control-label">Enter Lesson</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="lesson[]" placeholder="Course outline">
								</div>
							</div>
                        </div>

                        <div class="form-group">
							<label class="col-md-2 control-label">Enter Lesson</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="lesson[]" placeholder="Course outline">
								</div>
							</div>
                        </div>

                        <div class="form-group">
							<label class="col-md-2 control-label">Enter Lesson</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="lesson[]" placeholder="Course outline">
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
 @endsection
