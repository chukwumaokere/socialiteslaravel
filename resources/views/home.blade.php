@extends('layouts.app')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="main-content-left">
				<img style="max-width:100%" src="{{ url('/') }}/img/smartphone.png" />
			</div>
			<div class="main-content-right">
				<h1>Socialites</h1>
				<h2 class="sub-header">All your social media in one place, finally.</h2>
				<h3 class="sub-header-two">Coming Soon...</h3>
				<form action="./register.php">
				<input type="email" class="form-control" name="email-address" placeholder="Sign up for Socialite updates!" >
				<button type="submit" class="btn btn-primary" style="margin-left:5% !important;">Sign me up!</button> 		
				</form>
			</div>
		</div>
	</div>	

	<!--
	<div class="main-footer">
        	<h4><a href="#">About</a></h4>
		<h4><a href="#">Contact Us</a></h4>
		<h4><a href="#">Careers</a></h4>
		<h4><a href="#">GitHub</a></h4>
		<h4><a href="#">Roadmap</a></h4>
        </div>
	-->
	<!--
	<div class="copyright-flex">
		<p>© 2018  Okere Studios, LLC. </p>
	</div>
	-->
	<!--
	<div class="secondary">
		<div class="secondary-content">
		</div>
	</div>
	<div class="tertiary">
		<div class="tertiary-content">
		
		</div>
	</div>
	-->
@endsection
