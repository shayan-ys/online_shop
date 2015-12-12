<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/12/15
 * Time: 7:44 PM
 */?>

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

<script>
    var price = '{{ $product['price'] }}';
    $(document).ready(function(){
        $("#price").html("<span>"+ num2fa(price) +"</span>&nbsp;تومان");
    });
</script>
<section id="one">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
                <div class="row">
                    <ol class="breadcrumb">
                        <li>
                            <a href="http://shayanys.com/">صفحه اصلی</a>
                        </li>

                        <li class="active">
                            <a href="http://shayanys.com/fa/product.html">
                                صفحه جزئیات محصول
                            </a>
                        </li>
                        <li>
                            <a href="http://shayanys.com/fa/product/cat/1.html">محصولات دیجیتال</a>
                        </li>
                        <li>
                            <a href="http://shayanys.com/fa/product/cat/21.html">گروه لپ تاپ</a>
                        </li>
                        <li class="active">
                            <a href="http://shayanys.com/fa/product/cat/22.html">دستگاه لپ تاپ</a>
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
    <div class="container" id="menu-fixed">
        <div class="box">
            <ul class="detail-menu">
                <li><a href="#sc-one" title="">مشخصات کلی</a></li>
                <li><a href="#sc-four" title="">مشخصات فنی</a></li>
            </ul>
        </div>
    </div>
</section>

<section id="sc-one">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
                <div class="box">

                    <div class="pd">
                        <h3>
                            {{ $product['name'] }}
                            <small><?php
                                $body = $product['description'];
                                if(strlen($body)>40)
                                echo substr($body, 0, strpos($body, ' ', 40));
                                else
                                    echo $body;
                                ?></small>
                        </h3>
                        <div class="border-four"></div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="slider">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div id="sync1" class="owl-carousel">

                                            <div class="item">

                                                <img class="oxe" src="http://static.bamilo.com/p/asus-4877-6933731-1-product.jpg" width="350" height="350" alt="لنوو زد 5170 گرافیک 4 گیگابایت" title="لنوو زد 5170 گرافیک 4 گیگابایت" />

                                            </div>



                                            <img class="oxe" src="http://static.bamilo.com/p/asus-4960-6933731-2-product.jpg" width="350" height="350" alt="7" title="7" />



                                            <img class="oxe" src="" width="350" height="350" alt="5" title="5" />



                                            <img class="oxe" src="" width="350" height="350" alt="8" title="8" />



                                            <img class="oxe" src="" width="350" height="350" alt="4" title="4" />



                                            <img class="oxe" src="" width="350" height="350" alt="3" title="3" />



                                            <img class="oxe" src="http://shayanys.com/upload/thumb1/product_tab/1443963614.jpg" width="350" height="350" alt="2" title="2" />



                                            <img class="oxe" src="http://shayanys.com/upload/thumb1/product_tab/1443963596.jpg" width="350" height="350" alt="1" title="1" />




                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div id="sync2" class="owl-carousel">
                                            <div class="item">
                                                <div class="pic-small">

                                                    <ul class="thumbnails">
                                                        <li>
                                                            <a href="http://static.bamilo.com/p/asus-4877-6933731-1-product.jpg"></a>
                                                            <img src="http://static.bamilo.com/p/asus-4877-6933731-1-product.jpg" width="70" height="70" alt="لنوو زد 5170 گرافیک 4 گیگابایت" title="لنوو زد 5170 گرافیک 4 گیگابایت" />
                                                        </li>

                                                </div>
                                            </div>


                                            <div class="item">
                                                <div class="pic-small">

                                                    <ul class="thumbnails">
                                                        <li>
                                                            <a href="http://static.bamilo.com/p/asus-4960-6933731-2-product.jpg"></a>
                                                            <img src="http://static.bamilo.com/p/asus-4960-6933731-2-product.jpg" width="70" height="70" alt="7" title="7" />
                                                        </li>

                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="pic-small">

                                                    <ul class="thumbnails">
                                                        <li>
                                                            <a href="http://shayanys.com/upload/product_tab/1443963665.jpg"></a>
                                                            <img src="http://shayanys.com/upload/thumb2/product_tab/1443963665.jpg" width="70" height="70" alt="5" title="5" />
                                                        </li>

                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="pic-small">

                                                    <ul class="thumbnails">
                                                        <li>
                                                            <a href="http://shayanys.com/upload/product_tab/1443963693.jpg"></a>
                                                            <img src="http://shayanys.com/upload/thumb2/product_tab/1443963693.jpg" width="70" height="70" alt="8" title="8" />
                                                        </li>

                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="pic-small">

                                                    <ul class="thumbnails">
                                                        <li>
                                                            <a href="http://shayanys.com/upload/product_tab/1443963646.jpg"></a>
                                                            <img src="http://shayanys.com/upload/thumb2/product_tab/1443963646.jpg" width="70" height="70" alt="4" title="4" />
                                                        </li>

                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="pic-small">

                                                    <ul class="thumbnails">
                                                        <li>
                                                            <a href="http://shayanys.com/upload/product_tab/1443963634.jpg"></a>
                                                            <img src="http://shayanys.com/upload/thumb2/product_tab/1443963634.jpg" width="70" height="70" alt="3" title="3" />
                                                        </li>

                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="pic-small">

                                                    <ul class="thumbnails">
                                                        <li>
                                                            <a href="http://shayanys.com/upload/product_tab/1443963614.jpg"></a>
                                                            <img src="http://shayanys.com/upload/thumb2/product_tab/1443963614.jpg" width="70" height="70" alt="2" title="2" />
                                                        </li>

                                                </div>
                                            </div>

                                            <div class="item">
                                                <div class="pic-small">

                                                    <ul class="thumbnails">
                                                        <li>
                                                            <a href="http://shayanys.com/upload/product_tab/1443963596.jpg"></a>
                                                            <img src="http://shayanys.com/upload/thumb2/product_tab/1443963596.jpg" width="70" height="70" alt="1" title="1" />
                                                        </li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="info">
                                <div class="cod">کد محصول : <span class="product_info1_right_code">100010011100204</span></div>

                                <div class="choice-color">
                                    <div class="color-type"> رنگ </div>
                                    <ul class="color_check">

                                        <li class="dropup">
                                            <label>
                                                <input class="color_10" onchange="getOptionValue(10, 'color', 506);left_gallery('tab20');"  name="color"  type="radio" value="10"  checked  />
                                                <span style="background-color:{{ $product['color'] }};"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <ul class="one">
                                    <li>
                                        <strong>وضعیت : </strong>

                                        <span>{{ ($product['available'])? 'موجود' : 'تمام شده' }}</span>
                                    </li>


                                    <li>
                                        <div class="fr">
                                            <span class="fr num-t">تعداد : </span>
                                            <div class="order-num shop-num clearfix">
                                                <a class="down" href="#"></a>
                                                <span>
                                                    <input type="text" name="number" id="number" value="1" readonly="readonly" class="show-num" />
                                                </span>
                                                <a class="up" href="#"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="showgarantires"></li>
                                </ul>
                                <ul class="two hideprice">
                                    <input type="hidden" id="getprice" name="getprice" value="487">
                                    <li>قیمت برای شما : <span class="price_show_change orange-txt" id="price"></span></li>
                                </ul>
                                <div class="add-shop">
                                    @if (Auth::check())
                                        <a class="add-favorites poklick" data-toggle="modal" data-target=".bs-example-modal-sm" href="javascript:void(0);">
                                            <span style="display: none;"></span>
                                            <i></i>
                                        </a>
                                    @endif
                                    <a class="add-cart" title="">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="udp">
                                <div class="ru-list">
                                    <ul>
                                        <li>امتیاز کاربران به این محصول :
                                            <span id="score" attr_id="506" rate_kind="1" module="product" data-score="3"></span>
                                        </li>
                                        <li><span>۰</span>نظر ارسال شده</li>
                                        <li><a href="#" title="">مشخصات فیزیکی</a></li>
                                    </ul>
                                </div>
                                <div class="lu-list">
                                    <ul>
                                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#myModalsf">معرفی به دوستان</a></li>
                                        <li>
                                            <div class="btn-group">
                                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">اشتراک گذاری</button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="io j1"></i>فیس بوک</a></li>
                                                    <li><a href="https://plus.google.com/" target="_blank"><i class="io j2"></i>گوگل پلاس</a></li>
                                                    <li><a href="http://twitter.com/" target="_blank"><i class="io j3"></i>تویتر</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ldc">
                            <div class="col-xs-12 col-sm-7">
                                <h4 class="bhr">ویژگی های کالا</h4>
                                <ul class="cra">
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <h4 class="bhl">نقطه ضعف های کالا</h4>
                                <ul class="cla">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sc-four">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="td mp30">
                        <h2>مشخصات فنی</h2>
                    </div>
                    <div class="technical">
                        <div class="col-xs-12">
                            <ul class="mp30">
                                @if ($product['category']=='laptop')
                                    <li>
                                        <strong>
                                            سری پردازنده :
                                        </strong>
                                    <span>
                                        {{ $product['cpu_type'] }}
                                    </span>
                                    </li>
                                    <li>
                                        <strong>
                                            ظرفیت حافظه RAM :
                                        </strong>
                                    <span>
                                        {{ $product['ram_cap'] }}
                                        گیگابایت
                                    </span>
                                    </li>
                                    <li>
                                        <strong>
                                            نوع و نام حافظه
                                        </strong>
                                    <span>
                                        {{ $product['hard_desc'] }}
                                    </span>
                                    </li>
                                    <li>
                                        <strong>
                                            ظرفیت حافظه هارد :
                                        </strong>
                                    <span>
                                        {{ $product['hard_cap'] }}
                                        گیگابایت
                                    </span>
                                    </li>
                                @elseif ($product['category']=='book')
                                @endif
                            </ul>
                        </div>
                        @if ($product['category']=='laptop')
                        <div class="col-xs-12">
                            <div class="tth">
                                <h3>پردازنده مرکزی</h3>
                                <div class="bh3"></div>
                            </div>
                            <div class="ttd">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>نام و سری پردازنده</td>
                                        <td>
                                            {{$product['cpu_type']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>فرکانس</td>
                                        <td>
                                            {{$product['cpu_f']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>حافظه Cache</td>
                                        <td>

                                            4 مگابایت

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12">

                            <div class="tth">
                                <h3>حافظه RAM</h3>
                                <div class="bh3"></div>
                            </div>
                            <div class="ttd">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>ظرفیت حافظه RAM</td>
                                        <td>
                                            {{$product['ram_cap']}}
                                            گیگابایت
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>نوع حافظه RAM</td>
                                        <td>
                                            {{$product['ram_gen']}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="tth">
                                <h3>حافظه داخلی</h3>
                                <div class="bh3"></div>
                            </div>
                            <div class="ttd">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>ظرفیت حافظه هارد</td>
                                        <td>
                                            {{$product['hard_cap']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>نوع حافظه داخلی</td>
                                        <td>
                                            {{$product['hard_desc']}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-xs-12">

                            <div class="tth">
                                <h3>پردازنده گرافیکی </h3>
                                <div class="bh3"></div>
                            </div>
                            <div class="ttd">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>سازنده پردازنده گرافیکی</td>
                                        <td>
                                            AMD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>مدل پردازنده</td>
                                        <td>
                                            Radeon R9 M375X
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>مجموع حافظه گرافیکی</td>
                                        <td>
                                            6144 MB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>گرافیک</td>
                                        <td>
                                            4گیگابایت
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="col-xs-12">

                            <div class="tth">
                                <h3>سایر مشخصات</h3>
                                <div class="bh3"></div>
                            </div>
                            <div class="ttd">
                                {{$product['description']}}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(function() {
        $(".add-cart").unbind("click").click(function() {
            var num = $("#number").val();
            var name = $(".pd h3 small").text();
            var img_url = $("#sync1 img:first-child").attr("src");
            var product_id = $(".product_info1_right_code").text();
            addToBasket({
                id: '{{ $product['id_product'] }}',
                pid: product_id,
                num: num,
                img_url: img_url,
                name: "{{ $product['name'] }}",
                price: price
            },true);
            return false;
        });
    });
    $(document).ready(function() {
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        sync1.owlCarousel({
            singleItem: true,
            slideSpeed: 1000,
            navigation: false,
            pagination: false,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
        });
        sync2.owlCarousel({
            items: 5,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [768, 4],
            itemsMobile: [479, 1],
            pagination: false,
            navigation: true,
            navigationText: [" ", " "],
            responsiveRefreshRate: 100,
            afterInit: function(el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });
        function syncPosition(el) {
            var current = this.currentItem;
            $("#sync2")
                    .find(".owl-item")
                    .removeClass("synced")
                    .eq(current)
                    .addClass("synced")
            if ($("#sync2").data("owlCarousel") !== undefined) {
                center(current)
            }
        }
        $("#sync2").on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });
        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for (var i in sync2visible) {
                if (num === sync2visible[i]) {
                    var found = true;
                }
            }
            if (found === false) {
                if (num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                } else {
                    if (num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if (num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if (num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1)
            }
        }
    });
    $("#owl-demo5").owlCarousel({
        autoPlay: false,
        navigation: true,
        pagination: false,
        items: 5,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3]
    });
</script>



@include('footer')
@include('end')
</body>
</html>

