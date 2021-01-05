@extends('layouts.instructor-layout')
@section('title')Instructor Dashboard @endsection
@section('content')

<div class="agileits-box" style="margin-top:0px">
<header class="agileits-box-header clearfix">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/table-style.css')}}" />
<div class="agile-tables">
<div class="w3l-table-info">

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

					@foreach($offline as $offline)
					<tbody>
						  <tr>
							<td>{{$offline->id}}</td>
							<td>{{$offline->fullname}}</td>
							<td>{{$offline->course_title}}</td>
							<td>{{$offline->address}}</td>
							<td>{{$offline->state}}</td>
							<td>{{$offline->phone}}</td>
							<td>{{$offline->email}}</td>

						  </tr>
						</tbody>
    @endforeach
</table>
		</div>
	</div>

</header>




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


 @endsection
