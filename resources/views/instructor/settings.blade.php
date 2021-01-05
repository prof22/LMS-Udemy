@extends('layouts.instructor-layout')
@section('title')settings @endsection
@section('content')
<div class="col-md-12 agile-info-stat">
			<div class="stats-info stats-last widget-shadow">
           <div class="row">
                <div class="col">
                    <div class="user-dashboard-box">
                        <div class="user-dashboard-sidebar">
                            <div class="user-box">
                            <ul>
                                    <li class="active">
                                        <a href="#">Profile</a>
                                    </li>
                                    <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal" >Change Password</a>
                                    </li>
                                </ul>
                                <img src="" alt="" class="img-fluid">
                                <div class="alert alert-info">
                                    <div>{{ $instructor->first_name .' '. $instructor->last_name }}</div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="user-dashboard-content">
                            <div class="alert alert-success">
                                <div class="title">settings</div>
                                <div class="subtitle">Add information about yourself to share on your settings.
                                </div>
                            </div>
                            <form action="{{ route('update.settings',$instructor->id )}}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="content-box">
                                    <div class="basic-group">
                                        <div class="form-group">
                                            <label for="widget-shadow">Basics Information:</label>
                                            <input type="text" class="form-control" name="first_name" id="FristName"
                                                   placeholder="first name" value="{{ $instructor->first_name }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="last_name"
                                                   placeholder="last name" value="{{ $instructor->last_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="content-update-box">
                                    <button type="submit" class="btn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			</div>
		  <div class="clearfix"></div>
<br/><br/><br/>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModal">Add course</h4>
									</div>
									<div class="modal-body">
			<form role="form" class="form-horizontal" method="post" action="{{ route('changepassword.settings')}}">
                    {{csrf_field()}}
                    <!-- title -->
						<div class="form-group">
							<label class="col-md-2 control-label">Old Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
								
									</span>
									<input type="password" class="form-control" name="old_password">
								</div>
							</div>
                        </div>
                  
                        <div class="form-group">
							<label class="col-md-2 control-label">New Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										
									</span>
									<input type="password" class="form-control" name="new_password" >
								</div>
							</div>
                        </div>

                        <div class="form-group">
							<label class="col-md-2 control-label">Comfirm Password</label>
							<div class="col-md-8">
								<div class="input-group">
                                <span class="input-group-addon">
									<input type="password" class="form-control" name="password_confirmation">
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
