@extends('layouts.instructor-layout')
@section('title')Contact @endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/table-style.css')}}" />
<div class="agile-tables">
<div class="w3l-table-info">
	
					  <h2>CONTACT</h2>
					
					  <table id="table">
						<thead>
						  <tr>
							<th>S/N</th>
							<th>FIRST NAME</th>
							<th>LAST NAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>SUBJECT</th>
                            <th>MESSAGE</th>
                         </tr>
						</thead>
					
					@foreach($contact as $contact)
					<tbody>
						  <tr>
							<td>{{$contact->id}}</td>
							<td>{{$contact->first_name}}</td>
							<td>{{$contact->last_name}}</td>
							<td>{{$contact->email}}</td>
							<td>{{$contact->phone}}</td>
							<td>{{$contact->subject}}</td>
							<td>{{$contact->message}}</td>
							
						  </tr>
						</tbody>
    @endforeach
</table>
		</div>
	</div>
 @endsection
