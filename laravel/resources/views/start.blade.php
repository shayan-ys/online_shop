<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/12/15
 * Time: 5:02 PM
 */
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<META NAME="Author" CONTENT="shayan-negar">
<META NAME="creator" CONTENT="negar-shayan">
<meta name="description" content="فروشگاه اینترنتی لپتاپ و کتاپ">
<meta name="application-name" content="باراد">
<meta name="theme-color" content="#ffffff">

<meta name="keywords" content="فروشگاه , لپ تاپ">

<title>فروشگاه اینترنتی باراد | {{ $title }}</title>
    {{--<script>--}}
        {{--var site_place = 'user';--}}
        {{--var site_dir = "rtl";--}}
        {{--var site_lang = "fa";--}}
        {{--var site_url = "localhost/";--}}
        {{--var template_dir = "assets/";--}}
    {{--</script>--}}

    <!-- start template css -->
{!! HTML::style('assets/css/cyber.css') !!}
{!! HTML::style('assets/css/responsive.css') !!}
{!! HTML::style('assets/css/bootstrap.css') !!}
{!! HTML::style('assets/css/owl.carousel.css') !!}
{!! HTML::style('assets/css/owl.theme.css') !!}
{!! HTML::style('assets/css/popModal.css') !!}
{!! HTML::style('assets/css/lightbox.css') !!}
{!! HTML::style('assets/css/style.css') !!}
{!! HTML::style('assets/js/plugin/raty/jquery.raty.css') !!}

{!! HTML::script('assets/js/jquery.min.js') !!}
{!! HTML::script('assets/js/owl.carousel.min.js') !!}
{!! HTML::script('assets/js/lang/fa.js') !!}
{!! HTML::script('assets/js/jquery.ham3dModalbox.js') !!}
{!! HTML::script('assets/js/sonic.js') !!}
{!! HTML::script('assets/js/main2.js') !!}
{!! HTML::script('assets/js/lib2.js') !!}
{!! HTML::script('assets/js/basket2.js') !!}
{!! HTML::script('assets/js/scriptoffer.js') !!}
{!! HTML::script('assets/js/plugin/raty/jquery.raty.js') !!}
{!! HTML::script('assets/js/plugin/raty/javascripts/labs.js') !!}
<script>
    var site_url = "{{ asset('/') }}";
    getBasket();
</script>