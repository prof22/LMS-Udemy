@extends('layouts.admin-layout')
@section('title')Admin Add New Instructor @endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/table-style.css')}}" />
<div class="agile-tables">
<div class="w3l-table-info">
	<div class="col-md-4 modal-grids">
		<button type="button" class="hvr-icon-float-away btn btn-primary" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">Add Cat</button>
	</div>
					  <h2>Instructor</h2>

					  <table id="table">
						<thead>
						  <tr>
							<th>S/N</th>
							<th>FIRST NAME</th>
							<th>LAST NAME</th>
							<th>POSITION</th>
							<th>PHONE</th>
							<th>COURSE</th>
							<th>EMAIL</th>
							<th>ACTION</th>
						 </tr>
						</thead>

					@foreach($instructor as $instructor)
					<tbody>
						  <tr>
							<td>{{$instructor->id}}</td>
							<td>{{$instructor->first_name}}</td>
							<td>{{$instructor->last_name}}</td>
							<td>{{$instructor->position}}</td>
							<td>{{$instructor->course}}</td>
							<td>{{$instructor->email}}</td>
							<td>

							<button type="button"
								class="btn btn-primary btn-sm fa fa-edit"
								 data-toggle="modal"
								data-target="#myModaledit{{$instructor->id}}">
							</button><i alert alert-info>Edit</i>

							 <form action="{{ route ('category.delete', $instructor->id)}}" method="post">
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
						<div class="modal fade" id="myModaledit{{$instructor->id}}" tabindex="-1" role="dialog" aria-labelledby="myModaledit">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModaledit">Edit Category</h4>
									</div>
									<div class="modal-body">
			<form role="form" class="form-horizontal" method="post" action="{{ route('instructor.managecategory',$instructor->id )}}">
				@method('PATCH')
                    {{csrf_field()}}
						<div class="form-group">
							<label class="col-md-2 control-label">Title</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="category" value="{{$instructor->title}}" placeholder="Programming, Business, IT & Software, Graphics etc">
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
										<h4 class="modal-title" id="myModal">Add Instructor</h4>
									</div>
									<div class="modal-body">
			<form role="form" class="form-horizontal" method="post" action="{{route('instructor.submit')}}">
                    {{csrf_field()}}
						<div class="form-group">
							<label class="col-md-2 control-label">First Name</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" class="form-control1" name="first_name" placeholder="First Name">
								</div>
							</div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-2 control-label">Last Name</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                        <input type="text" class="form-control1" name="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-2 control-label">Position</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-envelope-o"></i>
                                            </span>
                                            <input type="text" class="form-control1" name="position" placeholder="position">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-2 control-label">Address</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope-o"></i>
                                                </span>
                                                <input type="text" class="form-control1" name="address" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-md-2 control-label">Phone</label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </span>
                                                    <input type="text" class="form-control1" name="phone" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-md-2 control-label">Course</label>
                                                <div class="col-md-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                                        <input type="text" class="form-control1" name="course" placeholder="Course">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-2 control-label">Email</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope-o"></i>
                                                            </span>
                                                            <input type="email" class="form-control1" name="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Password</label>
                                                        <div class="col-md-8">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope-o"></i>
                                                                </span>
                                                                <input type="password" class="form-control1" name="password" placeholder="Password">
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
