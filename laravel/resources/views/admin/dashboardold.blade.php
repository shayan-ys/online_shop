<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/11/15
 * Time: 3:49 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin | Dashboard for {{ $admin['name'] }}</title>
    {!! HTML::style('assets/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/bootstrap/css/bootstrap-theme.min.css') !!}
</head>
<body>
<h1>Welcome back {{ $admin['name'] }}</h1>
<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
<a href='user/logout' >logout</a>

{!! HTML::script('assets/bootstrap/js/jquery.min.js') !!}
{!! HTML::script('assets/bootstrap/js/npm.js') !!}
{!! HTML::script('assets/bootstrap/js/bootstrap.min.js') !!}
</body>
</html>
