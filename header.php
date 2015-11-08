<header>
  <div class="container">
    <div class="row">
      <div class="top">
        <div class="one">

          <div class="modal fade" id="login_success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">پروفایل کاربری</h4>
                </div>
                <div class="modal-body">
                  کاربرگرامی نگار٫
                  با موفقیت ورود یافتید.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="logout_success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">پروفایل کاربری</h4>
                </div>
                <div class="modal-body">
                  کاربرگرامی نگار٫
                  با موفقیت خروج یافتید
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                </div>
              </div>
            </div>
          </div>

          <ul>
            <li id="userOrLogOut"><a class="user-login" data-toggle="modal" data-target=".bs-example-modal-sm"><i></i>ورود اعضا</a></li>
            <li id="registerOrProfile"><a href="register.php"><i></i>عضویت</a></li>
            <!-- <li id="userOrLogOut"><a class="user-login" onclick="logout();"><i></i>خروج</a></li>
            <li id="registerOrProfile"><a href="pages/profile.php"><i></i>نگار بیاتی</a></li> -->

            <li><a id="popModal_ex1" class="pm">سبد خرید<span class="shop_num">0</span></a></li>
            <li>
              <a id="toggle"><span></span></a>
              <div id="menu">
                <ul>
                  <li>

                    <a href="<?php echo $path_to_root; ?>index.php" ajax="ok">صفحه اصلی</a>
                  </li>
                  <li>
                    <a href="<?php echo $path_to_root; ?>index.php" ajax="ok">تماس با ما</a>
                  </li>
                  <li>
                    <a href="<?php echo $path_to_root; ?>index.php" ajax="ok">درباره ما</a>
                  </li>
                  <li>
                    <a href="<?php echo $path_to_root; ?>index.php" ajax="ok">اخبار </a>
                  </li>
                  <li>
                    <a href="<?php echo $path_to_root; ?>index.php" ajax="ok">قوانین و مقررات</a>
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
                <a title="تسویه حساب" href="<?php echo $path_to_root; ?>pages/factor.php">تسویه حساب</a>
              </div>
            </div>
          </div>
        </div>
        <div class="two">
          <div class="logo">
            <h1><a href="<?php echo $path_to_root; ?>index.php">باراد</a></h1>
          </div>
          <div class="search">
            <form class="" id="formsearch" >
              <input type="text" placeholder="جستجو در کالاها ..." class="search_inp search_inp1" name="search" autocomplete="off" />
              <!-- <input type="submit" value="جستجو..." /> -->
              <a style="float: left;
width: 7%;
border:none;
background:#d00000 url(../img/ico/5.png);
background-position: center;
border-radius: 3px 0 0 3px;
text-indent:-9999px;
background-repeat: no-repeat;
height: 30px;" href="found.php" >جستجو</a>
            </form>
            <div id="ajax_result25"></div>
          </div>
          <script>
          function logout() {
            html1 = '<a class="user-login" data-toggle="modal" data-target=".bs-example-modal-sm"><i></i>ورود اعضا</a>';
            $("#userOrLogOut").html(html1);
            html2 = '<a href="register.php"><i></i>عضویت</a>';
            $("#registerOrProfile").html(html2);
            $("#logout_success").modal('toggle');
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
            html2 = '<a href="pages/profile.php"><i></i>نگار بیاتی</a>';
            $("#registerOrProfile").html(html2);
          }
          $("#formsearch").on('submit', function() {
            action = $(this).attr('action');
            value = $('#formsearch .search_inp1').val();
            if ($("#formsearch .search_inp1").val() !== 'جستجو...' && $("#formsearch .search_inp1").val().length > 1) {
              window.location = action + '.html#/keyword-' + value;
            }
            return false;
          });
          $(document).ready(function() {
            $(":input[name='search']").keyup(function() {
              var count = $(":input[name='search']").val().length;
              var tit = $(":input[name='search']").val();
              if (count > 1) {
                $.ajax({
                  type: "POST",
                  url: site_lang + '/search.html&title=' + encodeURIComponent(tit) + '&ajax=ok',
                  success: function(data) {
                    $('#ajax_result25').html(data);
                    $(document).bind('click.close',function(e){
                      if (e.which == 1){
                        $(".advanced-search").slideUp(1000);
                        $(document).unbind('click.close');
                      }
                    });
                  }
                });
                return false;
              } else {
                $('.advanced-search').slideUp(1000);
              }
            });
          });
          $("#ajax_result25,.advanced-search").click(function(e) {
            e.stopPropagation(e);
          });
          $(".search").click(function(e) {
            e.stopPropagation(e);
          });
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
        <form id="formloginlink">
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
              <a onclick="login(this);" class="btn btn-danger" >ورود</a>
            </div>
            <div class="col-xs-12">
              <a href="pages/forgotpass.html">رمز عبور خود را فراموش کرده اید ؟</a>
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
                <a href="pages/product/cat/22.html#/pagesize-20/brand-33" ajax="ok" class="dropdown-toggle" data-toggle="dropdown">لنوو<span class="dp"></span></a>
                <div class="dropdown-menu mega-dropdown-menu row">
                  <ul>
                    <li class="col-xs-12 col-sm-4">
                      <ul>
                        <li class="dropdown-header"><a href="index.php#" ajax="ok" >بر اساس نوع</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/answer-3_112_273" ajax="ok" >نوت بوک (لپ تاپ)</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/answer-3_112_274" ajax="ok" >آلترا بوک</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/answer-3_112_275" ajax="ok" >نت بوک</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/answer-3_112_276" ajax="ok" >کروم بوک</a></li>
                      </ul>
                    </li>
                    <li class="col-xs-12 col-sm-4">
                      <ul>
                        <li class="dropdown-header"><a href="pages/index.php#" ajax="ok" >براساس نوع کاربری</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/answer-4_113_277" ajax="ok" >عمومی و خانگی</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/answer-4_113_278" ajax="ok" >مخصوص بازی</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/answer-4_113_279" ajax="ok" >تبدیل پذیر</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/answer-4_113_280" ajax="ok" >با صفحه نمایش لمسی</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/answer-4_113_281" ajax="ok" >کاربری صنعتی</a></li>
                      </ul>
                    </li>
                    <li class="col-xs-12 col-sm-4">
                      <ul>
                        <li class="dropdown-header"><a href="pages/index.php#" ajax="ok" >بر اساس سری</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/keyword-Y%20series" ajax="ok" >سری Y</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/keyword-b%20series" ajax="ok" >سری B</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/keyword-E%20series" ajax="ok" >سری E</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/keyword-Flex%20series" ajax="ok" >سری Flex</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/keyword-G%20series" ajax="ok" >سری G</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/keyword-s%20series" ajax="ok" >سری S</a></li>
                        <li><a href="pages/product/cat/22.html#/pagesize-20/brand-33/keyword-z%20series" ajax="ok" >سری Z</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="img-menu" style="height: 335px;">
                    <div class="wall">
                      <a href="pages/product/cat/22.html#/pagesize-20/brand-33" target="_blank">
                        <img src="upload/thumb1/menu/1425734088.jpg" alt="لنوو" title="لنوو" width="400" height="335" />
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li style="float:left;">
                <a class="btn btn-danger" style="color:white;" href="<?php echo $path_to_root; ?>pages/searchPro.php">جستجوی پیشرفته محصولات</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
