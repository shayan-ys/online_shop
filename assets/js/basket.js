(function($, document, undefined) {
  var pluses = /\+/g;
  function raw(s) {
    return s;
  }

  function decoded(s) {
    return decodeURIComponent(s.replace(pluses, ' '));
  }

  var config = $.cookie = function(key, value, options) {

    if (value !== undefined) {
      options = $.extend({}, config.defaults, options);

      if (value === null) {
        options.expires = -1;
      }

      if (typeof options.expires === 'number') {
        var days = options.expires, t = options.expires = new Date();
        t.setDate(t.getDate() + days);
      }

      value = config.json ? JSON.stringify(value) : String(value);

      return (document.cookie = [
        encodeURIComponent(key), '=', config.raw ? value : encodeURIComponent(value),
        options.expires ? '; expires=' + options.expires.toUTCString() : '',
        options.path ? '; path=' + options.path : '',
        options.domain ? '; domain=' + options.domain : '',
        options.secure ? '; secure' : ''
      ].join(''));
    }

    var decode = config.raw ? raw : decoded;
    var cookies = document.cookie.split('; ');
    for (var i = 0, parts; (parts = cookies[i] && cookies[i].split('=')); i++) {
      if (decode(parts.shift()) === key) {
        var cookie = decode(parts.join('='));
        return config.json ? JSON.parse(cookie) : cookie;
      }
    }

    return null;
  };

  config.defaults = {};

  $.removeCookie = function(key, options) {
    if ($.cookie(key, options) !== null) {
      $.cookie(key, null, options);
      return true;
    }
    return false;
  };
})(jQuery, document);

function update_basket() {

  $.ajax({
    type: 'get',
    url: site_url + 'ajax.php?basket',
    dataType: 'json',
    success: function(response) {
      html = '';
      html2 = '';
      total_price = 0;
      total_price_pro = 0;
      total_discount = 0;
      total_count = 0;
      i = 1;
      for (x in response) {
        html += '<li>';
        html += '<div class="wall">';
        if (response[x].pic) {
          html += '<a href="' + site_lang + '/product/' + response[x].id + '.html" class = "pro-img fr"><img src="' + site_url + 'upload/thumb4/' + response[x].pic + '" alt="" width="80" height="80" /></a>';
        } else {
          html += '<a href="' + site_lang + '/product/' + response[x].id + '.html" class = "pro-img fr"><img src="' + template_dir + '/images/no_image.jpg" width="80" height="80" alt="" title="" /></a>';
        }
        html += '</div>';
        html += '<div class="info">';
        html += '<a class="de" href="javascript:void(0);" onclick="$.ham3dBasket({id : \'' + response[x].id + '|' + response[x].price_id + '\',kind : \'remove\'});$(\'.bp_delete\').attr(\'attr_id\',' + response[x].id + '|' + response[x].price_id + ').trigger(\'click\');$(\'#modalbox-wrap\').fadeOut(2000);return false;">&times;</a>';
        html += '<a class="name" href="' + site_lang + '/product/' + response[x].id + '.html">' + response[x].title + '</a>';
        html += '<div class="count">تعداد :<span>' + response[x].count + '</span></div>';
        html += '<div class="price"><span>' + putComma(response[x].price) + '</span>تومان</div>';
        html += '</div>';
        html += '</li>';

        if (response[x].special_discount_percent > 0 && response[x].ch==1) {
          discount = response[x].special_discount_percent;
          total_price += (response[x].price * response[x].count) - (((discount / 100) * response[x].price) * response[x].count);
          total_discount += (((discount / 100) * response[x].price) * response[x].count);
        } else if (response[x].discount_percent > 0) {
          discount = response[x].discount_percent;
          total_price += (response[x].price * response[x].count) - (((discount / 100) * response[x].price) * response[x].count);
          total_discount += (((discount / 100) * response[x].price) * response[x].count);
        } else {
          total_price += (response[x].price * response[x].count);
          total_discount += 0;
        }
        total_price_pro += (response[x].price * response[x].count);
        total_count += response[x].count;
        i++;
      }

      if (total_count <= 0) {
        html += '<div class="error">سبد خرید شما خالی می باشد.</div>';
      } else {
        html2 += '<div class="fine">جمع کل خرید شما :<span>' + num2fa(total_price_pro) + ' تومان</span></div>';
        html2 += '<div class="ok">';
        //                if ($('#islogin').attr('data-login') == 1) {
        html2 += '<a href="' + site_lang + '/order.html" title="تسویه حساب">تسویه حساب</a>';
        //                } else {
        //                    html2 += '<a href="' + site_lang + '/login.html" title="تسویه حساب">تسویه حساب</a>';
        //                }

        html2 += '</div>';
        $("#content ul.list-cart").slimScroll({
          width: '100%',
          height: '210px',
          size: '6px',
          opacity: 1,
          position: 'right',
          borderRadius: 0,
          color: '#000',
          alwaysVisible: true,
          distance: '0px',
          railVisible: true,
          railColor: '#c5c5c5',
          railOpacity: 1,
          wheelStep: 1,
          railBorderRadius: 0,
          allowPageScroll: false,
          disableFadeOut: false
        });
      }

      $('#content ul.list-cart').html(html);
      $('#content div.bottom').html(html2);
      $('.shop_num').html('' + num2fa(total_count) + '');

    }
  });
}

$(function() {
  update_basket();
});

(function($) {
  $.ham3dBasket = function(options) {
    var defaults = {
      id: '',
      kind: 'new',
      update: 'ok',
      number: 1,
      show_modal: 'ok',
      html: 'محصول جدید به سبد خرید شما افزوده شد'
    };

    var opts = $.extend(defaults, options);

    function add_basket(opts) {
      if ($.cookie('basket')) {
        basket = $.cookie('basket');
        var basket_array = basket.split(',');
        var index = jQuery.inArray(opts.id, basket_array);
        basket += ',' + opts.id;
        $.cookie('basket', basket, {expires: 7, path: '/'});
      } else {
        basket = opts.id;
        $.cookie('basket', basket, {expires: 7, path: '/'});
      }

      if (opts.update == 'ok') {
        update_basket();
      }
    }


    if (opts.kind == 'new') {
      if (opts.update == "no") {

        add_basket(opts);

        if (opts.show_modal == 'ok') {
          $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>' + opts.html + '</span></div><a class="add_popup_more" href="#" onclick="$(\'#modalbox-wrap\').fadeOut(); return false;">ادامه خرید</a><a class="add_popup_tasviye" href="' + site_lang + '/order.html">تسویه حساب</a></div>', auto: 'ok'}).trigger('click');
        }


      } else {
        if ($.cookie('basket')) {
          basket2 = $.cookie('basket');
          var basket_array2 = basket2.split(',');
          var counts = {};
          for (var i = 0; i < basket_array2.length; i++)
          {
            var key = basket_array2[i];
            counts[key] = (counts[key]) ? counts[key] + 1 : 1;
          }
          var key22 = parseInt(counts[opts.id]);
        }
        if (key22) {
          $.ajax({
            type: 'post',
            url: site_url + 'ajax.php?product_number',
            dataType: 'json',
            data: {id: opts.id},
            success: function(data) {
              var c = parseInt(counts[opts.id]);
              var p = parseInt(data[0]);
              if (c < p) {
                add_basket(opts);
                if (opts.show_modal == 'ok') {
                  //                                    if ($('#islogin').attr('data-login') == 1) {
                  $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>' + opts.html + '</span></div><a class="add_popup_more" href="#" onclick="$(\'#modalbox-wrap\').fadeOut(); return false;">ادامه خرید</a><a class="add_popup_tasviye" href="' + site_lang + '/order.html">تسویه حساب</a></div>', auto: 'ok'}).trigger('click');
                  //                                    } else {
                  //                                        $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>' + opts.html + '</span></div><a class="add_popup_more" href="#" onclick="$(\'#modalbox-wrap\').fadeOut(); return false;">ادامه خرید</a><a class="add_popup_tasviye" href="' + site_lang + '/login.html">تسویه حساب</a></div>', auto: 'ok'}).trigger('click');
                  //                                    }
                }
              } else {
                if (opts.show_modal == 'ok') {
                  //                                    if ($('#islogin').attr('data-login') == 1) {
                  $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>موجودی  محصول مورد نظر به اندازه کافی نیست !</span></div><a class="add_popup_more" href="#" onclick="$(\'#modalbox-wrap\').fadeOut(); return false;">ادامه خرید</a><a class="add_popup_tasviye" href="' + site_lang + '/order.html">تسویه حساب</a></div>', auto: 'ok'}).trigger('click');
                  //                                    } else {
                  //                                        $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>موجودی  محصول مورد نظر به اندازه کافی نیست !</span></div><a class="add_popup_more" href="#" onclick="$(\'#modalbox-wrap\').fadeOut(); return false;">ادامه خرید</a><a class="add_popup_tasviye" href="' + site_lang + '/login.html">تسویه حساب</a></div>', auto: 'ok'}).trigger('click');
                  //                                    }
                }
              }
            }
          });
        } else {
          $.ajax({
            type: 'post',
            url: site_url + 'ajax.php?product_number',
            dataType: 'json',
            data: {id: opts.id},
            success: function(data) {
              if (data[0] > 0) {
                add_basket(opts);
                if (opts.show_modal == 'ok') {
                  //                                    if ($('#islogin').attr('data-login') == 1) {
                  $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>' + opts.html + '</span></div><a class="add_popup_more" href="#" onclick="$(\'#modalbox-wrap\').fadeOut(); return false;">ادامه خرید</a><a class="add_popup_tasviye" href="' + site_lang + '/order.html">تسویه حساب</a></div>', auto: 'ok'}).trigger('click');
                  //                                    } else {
                  //                                        $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>' + opts.html + '</span></div><a class="add_popup_more" href="#" onclick="$(\'#modalbox-wrap\').fadeOut(); return false;">ادامه خرید</a><a class="add_popup_tasviye" href="' + site_lang + '/login.html">تسویه حساب</a></div>', auto: 'ok'}).trigger('click');
                  //                                    }
                }
              } else {
                if (opts.show_modal == 'ok') {
                  //                                    if ($('#islogin').attr('data-login') == 1) {
                  $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>این محصول موجود نمیباشد! </span></div><a class="add_popup_more" href="#" onclick="$(\'#modalbox-wrap\').fadeOut(); return false;">ادامه خرید</a><a class="add_popup_tasviye" href="' + site_lang + '/order.html">تسویه حساب</a></div>', auto: 'ok'}).trigger('click');
                  //                                    } else {
                  //                                        $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>این محصول موجود نمیباشد! </span></div><a class="add_popup_more" href="#" onclick="$(\'#modalbox-wrap\').fadeOut(); return false;">ادامه خرید</a><a class="add_popup_tasviye" href="' + site_lang + '/login.html">تسویه حساب</a></div>', auto: 'ok'}).trigger('click');
                  //                                    }
                }
              }
            }
          });
        }
      }
    } else if (opts.kind == 'remove') {
      basket = $.cookie("basket");
      var t = basket.split(",");
      new_result = new Array;
      i = 0;
      for (x in t) {
        value = $.trim(String(t[x]));
        if (value != "") {
          if (value != String(opts.id)) {
            new_result[i] = value;
            i++
          }
        }
      }
      $.cookie("basket", new_result.join(","), {
        expires: 7,
        path: "/"
      });
      if (opts.update == 'ok') {
        update_basket();
      }

      if (opts.show_modal == 'ok') {
        $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content_remove"><span>محصول از سبد خرید شما حذف شد.</span></div></div>', auto: 'ok'}).trigger('click');
      }

    } else if (opts.kind == 'number') {
      $.ham3dBasket({kind: 'remove', id: opts.id, update: 'no'});

      for (i = 1; i <= parseInt(opts.number); i++) {
        $.ham3dBasket({kind: 'new', id: opts.id, update: 'no'});
      }
      update_basket();
      if (opts.show_modal == 'ok') {
        $('body').ham3dModalbox({html: '<br /><div class="add_popup"><div class="add_popup_content"><span>تعداد محصول شما با موفقیت تغییر کرد </span></div></div><script>$(\'#modalbox-wrap\').fadeOut(1000);</script>', auto: 'ok'}).trigger('click');
      }
    }
  }
})(jQuery);
