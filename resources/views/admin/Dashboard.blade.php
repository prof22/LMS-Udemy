@extends('layouts.admin-layout')
@section('title')Admin Dashboard @endsection
@section('content')

		{{-- <div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>User</h3>
								<h4> 24,420  </h4>

							</div>

						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Clients</h3>
								<h4>15,520</h4>

							</div>

						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Projects</h3>
								<h4>12,430</h4>

							</div>

						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Old Projects</h3>
								<h4>14,430</h4>

							</div>

						</div>
					</div>
					<div class="clearfix"></div>
				</div> --}}
<!--//four-grids here-->
<!--agileinfo-grap-->

<div class="agileits-box"  style="margin-top:0px">
<header class="agileits-box-header clearfix">
</header>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/table-style.css')}}" />
<div class="agile-tables" style="margin-top:0px; padding-top:0px">
<div class="w3l-table-info" >

					  <h2>Offline Application</h2>

					  <table id="table">
						<thead>
						  <tr>
							<th>S/N</th>
							<th>Full Name</th>
							<th>Course Title</th>
                            <th>Address</th>
                            <th>State</th>
                            <th>Phone</th>
                            <th>Email</th>
                         </tr>
						</thead>


					<tbody>
                        @foreach($offline as $offline)
						  <tr>

                                <td>{{$offline->id}}</td>
                                <td>{{$offline->fullname}}</td>
                                <td>{{$offline->course_title}}</td>
                                <td>{{$offline->address}}</td>
                                <td>{{$offline->state}}</td>
                                <td>{{$offline->phone}}</td>
                                <td>{{$offline->email}}</td>
                          </tr>
                        @endforeach
						</tbody>

</table>
		</div>
	</div>


<div class="w3-agileits-pane">
		<div class="col-md-12 wthree-pan">
			<div class="panel panel-default">
			  <div class="panel-heading"> <i class="fa fa-bell fa-fw"></i> Users Online </div>
			  <!-- /.panel-heading -->
			  <div class="panel-body">
				<div class="list-group">

				<table id="table">
						<thead>
						  <tr>
							<th>S/N</th>
							<th>First Name</th>
							<th>Last Name</th>
                            <th>Email</th>
                         </tr>
						</thead>


					<tbody>
                            @foreach($users as $user)
                            <tr>
                              <td>{{$user->id}}</td>
                              <td>{{$user->first_name}}</td>
                              <td>{{$user->last_name}}</td>
                              <td>{{$user->email}}</td>
                      </tr>
                      @endforeach
						</tbody>

</table>


				</div>
				<!-- /.list-group -->

			  </div>
			  <!-- /.panel-body -->
			</div>
		  </div>

		  <div class="clearfix"></div>
	  </div>
	  <!--//w3-agileits-pane-->
<!-- script-for sticky-nav -->

    </div>
</div>
 @endsection
