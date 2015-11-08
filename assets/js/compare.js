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

function update_basket_compare() {
    $.ajax({
        type: 'get',
        url: site_url + 'ajax.php?compare',
        dataType: 'json',
        success: function(response) {

            html = '';
            total_price = 0;
            total_count = 0;
            i = 1;
            html += '<div style="text-align:center;"><ul>';
            for (x in response) {
                if ($.cookie('list')) {
                    cook = $.cookie("list");
                }
                catid = response[x].maincatid;
                if (catid === cook) {
                    html += '<li data-idcomparison="' + response[x].id + '">';
                    if (response[x].price_id) {
                        html += '<a class="my_basket_compare_delete my_basket_compare_delete2" data-idcomparison="' + response[x].id + '" href="' + site_url + '' + site_lang + '/product/' + response[x].id + '.html" onclick="$.ham3dBasket_compare({id : \'' + response[x].id + '|' + response[x].price_id + '\',kind : \'remove_compare\'});$(\'#modalbox-wrap\').fadeOut(2000);$(\'.my_basket_compare22\').hide();return false;"></a>';
                    } else {
                        html += '<a class="my_basket_compare_delete my_basket_compare_delete2" data-idcomparison="' + response[x].id + '" href="' + site_url + '' + site_lang + '/product/' + response[x].id + '.html" onclick="$.ham3dBasket_compare({id : \'' + response[x].id + '|' + response[x].id + '\',kind : \'remove_compare\'});$(\'#modalbox-wrap\').fadeOut(2000);$(\'.my_basket_compare22\').hide();return false;"></a>';
                    }

                    if (response[x].pic) {
                        html += '<a href="' + site_lang + '/product/' + response[x].id + '.html"><img src="' + site_url + 'upload/thumb2/' + response[x].pic + '" width="180" height="168" alt="" /></a>';
                    } else {
                        html += '<a href="' + site_lang + '/product/' + response[x].id + '.html"><img src="' + template_dir + '/img/no_image.jpg" width="180" height="168" alt="" title="" /></a>';
                    }

                    html += '<h3 class="product_name333">';
                    html += '<span class="persian_name333">' + response[x].title + '</span>';
                    html += '</h3>';
                    html += '</li>';

                    total_price += (response[x].price * response[x].count);
                    total_count += response[x].count;
                    catid = response[x].catid;
                    i++;
                }

            }
            html += '</ul></div>';

            $.cookie("count", i, {expires: 7, path: '/'});
            if (total_count != 0) {
                html22 = '';
                html22 += '<div style="float:left;"><div id="compare-btn"><a href="' + site_lang + '/compare/' + cook + '.html">مقایسه کن</a></div>';
                html22 += '<div id="delete-btn"><a href="javascript:void(0);">حذف همه</a></div></div>';
            }

            $('.my_basket_compare').html(html);

            if (total_count == 0) {
                $('.my_basket_compare22').hide();
                $('.compare-products').css('display', 'none');
            }

            if (total_count != 0) {
                $('.my_basket_compare22').html(html22).show();
                $('.compare-products').css('display', 'block');
            }
        }
    });

}

$(function() {
    update_basket_compare();
});

$(function() {
    $(document.body).on('click', "#delete-btn", function() {
        $.cookie('compare', '', {expires: 7, path: '/'});
        update_basket_compare();
    });
});

(function($) {
    $.ham3dBasket_compare = function(options) {
        var defaults = {
            id: '',
            kind: 'new',
            update: 'ok'
        };
        var opts = $.extend(defaults, options);

        function add_basket_compare(opts) {

            count = $.cookie("count");
            list = $.cookie("list");
            if (list != 'null') {
                if (count == '5') {
                    alert('شما مجاز به انتخاب بیشتر از 4 محصول برای مقایسه نیستید!');
                }
                if (count != '5') {
                    if ($.cookie('compare')) {
                        compare = $.cookie('compare');
                        var compare_array = compare.split(',');
                        var index = jQuery.inArray(opts.id, compare_array);
                        compare += ',' + opts.id;

                        $.cookie('compare', compare, {expires: 7, path: '/'});
                    } else {
                        compare = opts.id;
                        $.cookie('compare', compare, {expires: 7, path: '/'});
                    }
                }
            }

            if (opts.update == 'ok') {
                update_basket_compare();
            }

        }
        if (opts.kind == 'new') {
            if (opts.update == "no") {
                add_basket_compare(opts);
            } else {
                add_basket_compare(opts);
            }

        } else if (opts.kind == 'remove_compare') {
            compare = $.cookie("compare");
            var t = compare.split(",");
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
            $.cookie("compare", new_result.join(","), {
                expires: 7,
                path: "/"
            });
            if (opts.update == 'ok') {
                update_basket_compare();
            }
        }
    }
})(jQuery);	