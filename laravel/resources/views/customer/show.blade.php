<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/10/15
 * Time: 7:45 PM
 */
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Customer {{ $customer->name }}</title>
    {!! HTML::style('assets/bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/bootstrap/css/bootstrap-theme.min.css') !!}
  </head>
  <body>
    <h1>Hello {{ $customer->name }}</h1>
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>

    {!! HTML::script('assets/bootstrap/js/jquery.min.js') !!}
    {!! HTML::script('assets/bootstrap/js/npm.js') !!}
    {!! HTML::script('assets/bootstrap/js/bootstrap.min.js') !!}
  </body>
</html>