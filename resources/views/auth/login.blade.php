@extends('base')

@section('styles')
	footer {
		visibility: visible;
		opacity: 1;
	}

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
	
	.btn-link {
		margin-left: 10px;
		color: rgb(46,42,136);	
	}
	
	.btn-primary {
		margin-top: 20px;
		background-color: rgb(242,249,135);
		border-color: rgb(217,224,120);
		border-radius: 5px;
		color: rgb(46,42,136);
	}
	
	.full-height {
		height: 75vh;	
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
                    <form id="login-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 login-gui text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 login-gui text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn-md btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
@endsection
