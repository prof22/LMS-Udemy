@extends('layouts.app')
@section('content')
<br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.436428942188!2d7.063436914282826!3d6.20602059550736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104382c4071f132d%3A0xae4bd2bc78d75376!2sDike+and+Ariolu+Street%2C+Awka!5e0!3m2!1sen!2sng!4v1518702744266" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>		</div>
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-4">
                    <h5 class="alert alert-success text-center">ADDRESS</h5>
                    <div class="alert alert-info">
                       <p>87 Ziks Avenue Opp. Dike park, Awka (OR) <br>
                        N0 1 Dike Street Awka Anambra State</p><br>
                    </div>
                    {{-- <h5 class="alert alert-success text-center">WORKING HOURS</h5>
                    <div class="alert alert-info">
                    <span>Week Days: 07:30-18:00</span><br>
                    <span> Saturday: 09:00-18:00</span><br>
                    <span> Sunday: Closed</span><br><br>
                    </div> --}}
                    <h5 class="alert alert-success text-center">PHONE</h5>
                    <div class="alert alert-info text-center">
                    <span style="font-size:2em">(+234) 806 438 0018 <br> (+234) 809 587 4950</span>
                    </div>

                    <h5 class="alert alert-success text-center">EMAIL</h5>
                    <span class="alert alert-info">info@infintytechworld.com</span>
       </div>
    <div class="col-md-8">
   <div>
        <form action="{{ route('send.contact')}}" method="post">
        @csrf
        <div class="form-group">
			<label class="col-md-8 control-label">First Name</label>
				<div class="col-md-12">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-envelope-o"></i>
						</span>
					<input type="text" class="form-control" name="first_name" placeholder="First Name">
				</div>
			</div>
        </div>

        <div class="form-group">
			<label class="col-md-8 control-label">Last Name</label>
				<div class="col-md-12">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-envelope-o"></i>
						</span>
					<input type="text" class="form-control" name="last_name" placeholder="Last Name">
				</div>
			</div>
        </div>


        <div class="form-group">
			<label class="col-md-8 control-label">Email</label>
				<div class="col-md-12">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-envelope-o"></i>
						</span>
					<input type="text" class="form-control" name="email" placeholder="Email">
				</div>
			</div>
        </div>

        <div class="form-group">
			<label class="col-md-8 control-label">Phone</label>
				<div class="col-md-12">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-envelope-o"></i>
						</span>
					<input type="text" class="form-control" name="phone" placeholder="Phone">
				</div>
			</div>
        </div>

        <div class="form-group">
			<label class="col-md-8 control-label">Subject</label>
				<div class="col-md-12">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-envelope-o"></i>
						</span>
					<input type="text" class="form-control" name="subject" placeholder="Subject">
				</div>
			</div>
        </div>
        <div class="form-group">
			<label class="col-md-8 control-label">Message</label>
				<div class="col-md-12">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-envelope-o"></i>
						</span>
					<textarea cols="5" rows="10" class="form-control" name="message" placeholder="Message"> </textarea>
				</div>
			</div>
        </div>
		<button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
    </div>
    </div>


    </div>
    </div>
    <br><br>
@endsection
