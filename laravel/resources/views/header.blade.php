<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/12/15
 * Time: 5:12 PM
 */
?>
<header>
    <div class="container">
        <div class="row">
            <div class="top">
                <div class="one">

                    <div class="modal fade" id="logout_success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">پروفایل کاربری</h4>
                                </div>
                                <div class="modal-body">
                                    کاربر گرامی
                                    <br>
                                    با موفقیت خروج یافتید
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">بستن</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul>
                        @if(Auth::check())
                            <li id="userOrLogOut"><a class="user-login" onclick="logout();"><i></i>خروج</a></li>
                            <li id="registerOrProfile"><a href="{{ asset('/customers') }}"><i></i>{{ Auth::user()->name }}</a></li>
                        @else
                            <li id="userOrLogOut"><a class="user-login" data-toggle="modal" data-target=".bs-example-modal-sm"><i></i>ورود اعضا</a></li>
                            <li id="registerOrProfile"><a href="{{ asset('/user/register') }}"><i></i>عضویت</a></li>
                        @endif

                        <li><a id="popModal_ex1" class="pm">سبد خرید<span class="shop_num">0</span></a></li>
                        <li>
                            <a id="toggle"><span></span></a>
                            <div id="menu">
                                <ul>
                                    <li>

                                        <a href="<?php  ?>index.php" >صفحه اصلی</a>
                                    </li>
                                    <li>
                                        <a href="<?php  ?>index.php" >تماس با ما</a>
                                    </li>
                                    <li>
                                        <a href="<?php  ?>pages/about.php" >درباره ما</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div style="display:none">
                    <div id="content">
                        <ul class="list-cart">
                        </ul>
                        <div class="bottom">
                            <div class="fine">جمع کل خرید شما :<span class='amount' >۰</span><span>تومان</span>
                            </div>
                            <div class="ok">
                                <a title="تسویه حساب" href="<?php  ?>pages/factor.php">تسویه حساب</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="two">
                    <div class="logo">
                        <h1><a href="<?php  ?>index.php">باراد</a></h1>
                    </div>
                    <div class="search">
                        <form class="" id="formsearch" method="GET" action="{{ asset('/search') }}">
                            {!! csrf_field() !!}
                            <input type="text" placeholder="جستجو در کالاها ..." class="search_inp search_inp1" name="search" autocomplete="off" />
                            <!-- <input type="submit" value="جستجو..." /> -->
                            <button type="submit" style="float: left;
width: 7%;
border:none;
background:#d00000 url(../img/ico/5.png);
background-position: center;
color:#ffffff;
border-radius: 3px 0 0 3px;
text-indent:-9999px;
background-repeat: no-repeat;
height: 30px;" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </form>
                        <div id="ajax_result25"></div>
                    </div>
                    <script>
                        function logout() {
                            $.ajax({
                                url: '{{ asset('/user/logout') }}',
                                type: "get",
                                success: function (data) {
                                    html1 = '<a class="user-login" data-toggle="modal" data-target=".bs-example-modal-sm"><i></i>ورود اعضا</a>';
                                    $("#userOrLogOut").html(html1);
                                    html2 = '<a href="{{ asset('/user/register') }}"><i></i>عضویت</a>';
                                    $("#registerOrProfile").html(html2);
                                    $("#logout_success").modal('toggle');
                                }
                            });
                        }
                        function login(target) {
                            if($("#email").val() == 'negar@email.com'
                                    && $("#password").val() == '123') {
                                login_show();
                                $(target).closest('.modal').modal('toggle');
                                $("#login_success").modal('toggle');
                            }
                        }
                        function login_show() {
                            html1 = '<a class="user-login" onclick="logout();"><i></i>خروج</a>';
                            $("#userOrLogOut").html(html1);
                            html2 = '<a href="<?php  ?>pages/profile.php"><i></i>نگار بیاتی</a>';
                            $("#registerOrProfile").html(html2);
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-title"><h4><i></i>ورود اعضاء</h4></div>
                </div>
                <form id="formloginlink" method="POST" action="{{ asset('/user/login') }}">
                        {!! csrf_field() !!}
                    <div class="modal-body">
                        <div class="col-xs-12">
                            <label>نام کاربری ( ایمیل ) :</label>
                            <input type="text" name="email" id="email" error="لطفا ایمیل را وارد کنید" check="email" check_error="لطفا ایمیل را صحیح وارد کنید" />
                        </div>
                        <div class="col-xs-12">
                            <label>رمز عبور :</label>
                            <input type="password" name="password" id="password" error="لطفا رمزعبور را وارد کنید" check="password" check_error="لطفا رمزعبور را صحیح وارد کنید" />
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <label>مرا بخاطر بسپار</label>
                        <input type="checkbox" name="remember" id="remember" value="true" style="float: right; margin-right: 16px; margin-left: 10px;"/>
                    </div>
                    <div class="modal-footer">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-danger btn-lg" >ورود</button>
                        </div>
                        <div class="col-xs-12">
                            <a href="<?php  ?>pages/forgotpass.php">رمز عبور خود را فراموش کرده اید ؟</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul class="nav navbar-nav" style="width:100%;">
                            <li class="dropdown mega-dropdown first-menu">
                                <a href="<?php  ?>pages/searchPro.php"  class="dropdown-toggle" data-toggle="dropdown">لپتاپ<span class="dp"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu row">
                                    <ul>
                                        <li class="col-xs-12 col-sm-4">
                                            <ul>
                                                <li class="dropdown-header"><a href="<?php  ?>index.php"  >بر اساس نوع</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >نوت بوک (لپ تاپ)</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >آلترا بوک</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >نت بوک</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >کروم بوک</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-xs-12 col-sm-4">
                                            <ul>
                                                <li class="dropdown-header"><a href="<?php  ?>index.php"  >براساس نوع کاربری</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >عمومی و خانگی</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >مخصوص بازی</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >تبدیل پذیر</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >با صفحه نمایش لمسی</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >کاربری صنعتی</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="img-menu" style="height: 335px;">
                                        <div class="wall">
                                            <a href="<?php  ?>pages/searchPro.php" target="_blank">
                                                <img src="http://static.bamilo.com/p/asus-5161-4330111-1-product.jpg" alt="لپتاپ" title="لپتاپ" width="400" height="335" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown mega-dropdown first-menu">
                                <a href="<?php  ?>pages/searchPro.php"  class="dropdown-toggle" data-toggle="dropdown">کتاب<span class="dp"></span></a>
                                <div class="dropdown-menu mega-dropdown-menu row">
                                    <ul>
                                        <li class="col-xs-12 col-sm-4">
                                            <ul>
                                                <li class="dropdown-header"><a href="<?php  ?>index.php"  >بر اساس نوع</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >رمان</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >داستان کوتاه</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >ماجرایی</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >فکاهی</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-xs-12 col-sm-4">
                                            <ul>
                                                <li class="dropdown-header"><a href="<?php  ?>index.php"  >براساس نوع مخاطب</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >عمومی</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >مخصوص کودک</a></li>
                                                <li><a href="<?php  ?>pages/searchPro.php"  >زنان</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="img-menu" style="height: 335px;">
                                        <div class="wall">
                                            <a href="<?php  ?>pages/searchPro.php" target="_blank">
                                                <img src="http://www.ofoqco.com/images/books/344680.jpg" alt="کتاب" title="کتاب" width="400" height="335" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="float:left;">
                                <a class="btn-danger searchPro" style="color:white;" href="<?php  ?>pages/searchPro.php">جستجوی پیشرفته محصولات</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

