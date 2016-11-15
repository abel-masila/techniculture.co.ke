@extends('templates/default')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<h3>Connect with buyers and farmers around you to sell your produce.</h3>
			<br/>
			<div class="media">
			  <div class="media-left">
			    <a href="#">
			      <img src="{{URL::asset('/img/stat.png')}}" alt="profile Pic" class="media-objec" height="70" width="70">
			    </a>
			  </div>
			  <div class="media-body">
			    <h4 class="media-heading">Plan Ahead</h4>
			    <p>Know when to plant using our price trends.</p>
			  </div>
			</div>
			<br/>
			<div class="media">
			  <div class="media-left">
			    <a href="#">
			      <img src="{{URL::asset('/img/sell.png')}}" alt="profile Pic" class="media-objec" height="70" width="70">
			    </a>
			  </div>
			  <div class="media-body">
			    <h4 class="media-heading">Connect to sell</h4>
			    <p>Engage thousands of buyers directly when your produce is ready.</p>
			  </div>
			</div>
			<br/>
			<div class="media">
			  <div class="media-left">
			    <a href="#">
			      <img src="{{URL::asset('/img/user.png')}}" alt="profile Pic" class="media-objec" height="70" width="70">
			    </a>
			  </div>
			  <div class="media-body">
			    <h4 class="media-heading">Plant wisely</h4>
			    <p>Step by step guide on how to plant your crop and reach optimum production.</p>
			  </div>
			</div>
		</div>
		@if (Auth::check())
		<div class="col-md-6">
			<div class="panel panel-success">
			  <div class="panel-heading">
			    <h3 class="panel-title">Subscription needed</h3>
			  </div>
			  <div class="panel-body">
			    <p>AquaTech Daily Prices is a subscription based service offering the latest Aquaculture pricing information in all major cities and markets in Kenya.</p>
			    <br/>
			    <p>Subscription fee for 6 and 12months payment can be paid via. MPESA</p>
			    <br/>
			    
			    <p>To pay with Mpesa do the following:</p>
			    <ol>
			    	<li>Go to M-Pesa menu on your phone</li>
			    	<li>Select Pay Bill</li>
			    	<li>Enter 967701 as the business number</li>
			    	<li>Enter 24252 as the account no.</li>
			    	<li>Enter the amount to pay <select><option>For 6 Months@500</option><option>For 12 Months@800</option></select></li>
			    	<li>Enter your M-Pesa pin</li>
			    	<li>Then send the request</li>
			    </ol>
			    <p>Kindly note that it will take up to 1 hour from payment before you can access the prices</p>
			    <p>Any problems with this procedure then contact M-Farm on phone: 0707933993</p>
			  </div>
			</div>
		</div>
		@else
		<div class="col-md-6">
			<h3>Sign up</h3>
			<form class=" " method="post" action="{{ route('auth.signup') }}">						
						<div class="form-group{{ $errors->has('username') ? ' has-error' : ''}}" >							
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="name" value="{{ Request::old('username')?: ''}}"  placeholder="Enter your Name"/>
								</div>
								@if($errors->has('username'))
									<span class="help-block">{{ $errors->first('username') }}</span>
								@endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">							
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" value="{{ Request::old('email')?: ''}}"  placeholder="Enter your Email"/>
								</div>
								@if($errors->has('email'))
									<span class="help-block">{{ $errors->first('email') }}</span>
								@endif
							</div>
						</div>
						<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-flag fa" aria-hidden="true"></i></span>
								<select class="form-control" id="county" name="county">
								  <option>Choose County..</option>
								  <option value="Makueni">Makueni</option>
								  <option value="Nyeri">Nyeri</option>
								  <option value="Mombasa">Mombasa</option>
								  <option value="Kisumu">Kisumu</option>
								</select>
							</div>
						</div>
						</div>
						<div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">				
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>							
								</div>
								@if($errors->has('password'))
									<span class="help-block">{{ $errors->first('password') }}</span>
								@endif
							</div>
						</div>			
						<div class="form-group ">
							<input type="submit" name="submit" value="Register" class="btn btn-success btn-lg  login-button">
						</div>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
					</form>
		</div>
		@endif
	</div>
@stop
@section('footer')

@stop