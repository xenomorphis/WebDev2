@extends('base')

@section('styles')
	#login-form {
		text-align: center;	
	}

	.page-content {
		background-color: rgba(242,249,135,0);
	}
	
	.blank-hdl {
		padding-top: 70px;
		padding-bottom: 20px;
		color: rgb(255,255,127);
		font-size: 80px;
		text-align: center;
	}
	
	.btn-primary {
		margin-top: 20px;
		background-color: rgb(242,249,135);
		border-color: rgb(217,224,120);
		border-radius: 5px;
		color: rgb(46,42,136);
	}
	
	.login-field {
		margin-top: 20px;
	}
	
	.login-gui {
		margin-right: 10px;
		color: #FFFF7F;
		font-size: 14pt;
		text-shadow: 1px 1px #555;
	}
@endsection

@section('maincontent')
	<h2 class="highlight-text blank-hdl"> Login </h2>
	<form id="login-form" action="#" method="post">
		<label class="login-gui">Username:</label>
		<input class="login-field" type="text" name="auth_user"> <br>
		<label class="login-gui">Password:</label>
		<input class="login-field" type="password" name="auth_passwd"> <br>
		<input class="btn-md btn-primary" type="submit" value="Submit">
	</form>
@endsection