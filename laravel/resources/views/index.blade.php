<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/12/15
 * Time: 5:19 PM
 */?>

<!doctype html>
<html>
<head>
    @include('start', $head)
</head>
<body>
    @include('header')

    <section id="one">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="wr">
                            <div class="slider-one">
                                <div id="owl-demo-slider" class="owl-carousel owl-theme">

                                    <div class="item">
                                        <a href="http://orchardaz.com/wp-content/uploads/2015/04/refurb-apple-laptop-new2.jpg" target="_blank">

                                            <img src="http://orchardaz.com/wp-content/uploads/2015/04/refurb-apple-laptop-new2.jpg" width="870" height="330" alt="متفاوت باشید و متفاوت بمانید " title="متفاوت باشید و متفاوت بمانید " />

                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="http://dailycapital.pk/wp-content/uploads/2015/02/Apple-Macbook-Air-laptop.jpg" target="_blank">

                                            <img src="http://dailycapital.pk/wp-content/uploads/2015/02/Apple-Macbook-Air-laptop.jpg" width="870" height="330" alt="lenovo5170" title="lenovo5170" />

                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="http://g04.s.alicdn.com/kf/HT1eWqNFOJaXXagOFbXO/1903038/HT1eWqNFOJaXXagOFbXO.jpg" target="_blank">

                                            <img src="http://g04.s.alicdn.com/kf/HT1eWqNFOJaXXagOFbXO/1903038/HT1eWqNFOJaXXagOFbXO.jpg" width="870" height="330" alt="حراجی سری جی " title="حراجی سری جی " />

                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div id="content" class="neg">
                                <article id="amazingoffer" class="dkbox mrg-bottom">
                                    <div class="slides center">
                                        @foreach ($products['rand5'] as $product)
                                            <a style="display: none;" href="{{ asset('/product')."/".$product['id_product']}}" title="{{$product['name']}}" class="slideItem">
                                                <img class="incredible" src="http://static.bamilo.com/p/asus-4877-6933731-1-product.jpg" width="607" height="300" alt="لنوو زد 5170 گرافیک 4 گیگابایت" title="لنوو زد 5170 گرافیک 4 گیگابایت" />
                                            </a>
                                        @endforeach
                                    </div>

                                    <div class="ff">
                                        <ul class="tabs">
                                            @foreach ($products['rand5'] as $product)
                                                <li>
                                                    <a href="{{ asset('/product')."/".$product['id_product']}}" class="tabItem">
                                                        <span>{{$product['name']}}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </article>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="two">
        <div class="container">
            <div class="row">


                <div class="col-xs-12 col-sm-4 col-lg-3">
                    <div class="row">
                        <div class="wr">
                            <div class="box">
                                <div class="title bo1">
                                    <h2>پرفروش ترین محصولات</h2>
                                </div>
                                <div class="list">
                                    <ul>
                                        @foreach ($products['rand3'] as $product)
                                        <li>
                                            <div class="wall">
                                                <a href="{{ asset('/product')."/".$product['id_product']}}">
                                                    <img src="http://www.ofoqco.com/images/books/Thumb/345267.jpg" width="80" height="80" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
                                                </a>
                                            </div>
                                            <div class="text">
                                                <h3>
                                                    <a href="{{ asset('/product')."/".$product['id_product']}}">&nbsp; {{$product['name']}} </a>
                                                </h3>
                                                <span class="price"><span>{{$product['price']}}</span> تومان</span>
                                                <span class="rating score-callback" data-score="0"></span>
                                                <span class="existent wew1">{{ ($product['available'])? 'موجود' : 'تمام شده' }}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-9">
                    <div class="row">
                        <div class="wl">
                            <div class="box">
                                <div class="title bo2">
                                    <h2>جدیدترین محصولات</h2>
                                </div>
                                <div class="slider-product">
                                    <div id="owl-demo2">
                                        @foreach ($products['latest'] as $product)
                                            <div class="item">
                                                <div class="product">
                                                    <div class="wall">
                                                        <a href="{{ asset('/product')."/".$product['id_product']}}">
                                                            <img src="http://www.ofoqco.com/images/books/Thumb/345267.jpg" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h3>
                                                            <a href="{{ asset('/product')."/".$product['id_product']}}"> {{ $product['name'] }} </a>
                                                        </h3>
                                                        <ul>
                                                            <li class="wew1">{{ ($product['available'])? 'موجود' : 'تمام شده' }}</li>
                                                            <li>
                                                                <span class="rating score-callback" data-score="4"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="price"><span>{{ $product['price'] }}</span> تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>



                            <div class="box">
                                <div class="title bo3">
                                    <h2>محبوب ترین محصولات</h2>
                                </div>
                                <div class="slider-product">
                                    <div id="owl-demo3">
                                        @foreach ($products['rand1'] as $product)
                                            <div class="item">
                                                <div class="product">
                                                    <div class="wall">
                                                        <a href="{{ asset('/product')."/".$product['id_product']}}">
                                                            <img src="http://www.ofoqco.com/images/books/Thumb/345267.jpg" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h3>
                                                            <a href="{{ asset('/product')."/".$product['id_product']}}"> {{ $product['name'] }} </a>
                                                        </h3>
                                                        <ul>
                                                            <li class="wew1">{{ ($product['available'])? 'موجود' : 'تمام شده' }}</li>
                                                            <li>
                                                                <span class="rating score-callback" data-score="4"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="price"><span>{{ $product['price'] }}</span> تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>



                            <div class="box lb">
                                <div class="title bo4">
                                    <h2>پیشنهاد ما</h2>
                                </div>
                                <div class="slider-product">
                                    <div id="owl-demo4">
                                        @foreach ($products['rand2'] as $product)
                                            <div class="item">
                                                <div class="product">
                                                    <div class="wall">
                                                        <a href="{{ asset('/product')."/".$product['id_product']}}">
                                                            <img src="http://www.ofoqco.com/images/books/Thumb/345267.jpg" width="131" height="131" alt="امپراتور کوتوله ی سرزمین لی لی پوت " title="امپراتور کوتوله ی سرزمین لی لی پوت " />
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <h3>
                                                            <a href="{{ asset('/product')."/".$product['id_product']}}"> {{ $product['name'] }} </a>
                                                        </h3>
                                                        <ul>
                                                            <li class="wew1">{{ ($product['available'])? 'موجود' : 'تمام شده' }}</li>
                                                            <li>
                                                                <span class="rating score-callback" data-score="4"></span>
                                                            </li>
                                                        </ul>
                                                        <div class="price"><span>{{ $product['price'] }}</span> تومان</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
           $(".price span").each(function(){
               var price = $(this).text();
               $(this).html( num2fa(price) );
           })
        });
        $("#formtrack").on('submit', function() {
            action = $(this).attr('action');
            value = $('#trackOrder').val();
            valuelength = value.length;
            if (valuelength > 2) {
                $(this).attr('ajax_method', 'get');
                window.location = action + '&order&track=' + value;
            } else {
                $('body').ham3dModalbox({html: '<br /><a href="javascript:void(0);" onclick="$(\'javascript:void(0)modalbox-wrap\').fadeOut(); return false;"><div class="add_popup"><div class="add_popup_content"><span>ساختار کد پیگیری شما اشتباه می باشد !</span></div></div></a>', auto: 'ok'}).trigger('click');
                $('#modalbox-wrap').fadeOut(5000);
            }
            return false;
        });
    </script>

    @include('footer')
    @include('end')
</body>
</html>
