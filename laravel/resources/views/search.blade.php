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

<section id="two">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @foreach ($products as $product)
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
</section>

@include('footer')
@include('end')
</body>
</html>