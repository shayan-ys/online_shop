<!DOCTYPE html>
<html>
  <head>
    <title>Barad | Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    {!! HTML::style('assets/bootstrap/css/bootstrap.min.css') !!}
    <!-- styles -->
    {!! HTML::style('assets/css/styles.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Login</h6>
			                {{--<div class="social">--}}
	                            {{--<a class="face_login" href="#">--}}
	                                {{--<span class="face_icon">--}}
	                                    {{--<img src="images/facebook.png" alt="fb">--}}
	                                {{--</span>--}}
	                                {{--<span class="text">Sign in with Facebook</span>--}}
	                            {{--</a>--}}
	                            {{--<div class="division">--}}
	                                {{--<hr class="left">--}}
	                                {{--<span>or</span>--}}
	                                {{--<hr class="right">--}}
	                            {{--</div>--}}
	                        {{--</div>--}}
                            <form method="POST" action="/online_shop/laravel/public/admin/login">
                                {!! csrf_field() !!}
                                <input class="form-control" type="email" name="email" placeholder="E-mail address" value="{{ old('email') }}">
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                                <div>
                                    <input class="form-control" type="checkbox" name="remember"> Remember Me
                                </div>
                                <div class="action">
                                    <button class="btn btn-primary signup" type="submit">Login</button>
                                </div>
                            </form>
			            </div>
			        </div>

			        <div class="already">
			            <p>Don't have an account yet?</p>
                        </br>
			            <a href="mailto:shayan.yousefian1372@gmail.com?subject=admin access request">contact: shayan.yousefian1372@gmail.com</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {!! HTML::script('assets/bootstrap/js/jquery.min.js') !!}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!! HTML::script('assets/bootstrap/js/bootstrap.min.js') !!}
    {!! HTML::script('assets/js/custom.js') !!}
  </body>
</html>