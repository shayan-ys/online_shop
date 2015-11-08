persian = {0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹', ',': ','}

function num2fa(text) {
    arr = text.toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ",").split("");
    out = '';
    for (x in arr) {
        out += persian[arr[x]];
    }
    return  out;
}

function putComma(price) {
    return price.toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
}
function roundto1000(price) {
    if (price >= 1000)
        return num2fa(Math.round(price / 1000) * 1000);
    else {
        return num2fa(price);
    }
}

my_target = "#target";

(function(e) {
    e.fn.addScore = function(t) {
        var n = {
            data: "",
            show_result: function() {
            }
        };
        var r = e.extend(n, t);
        return this.each(function() {
            elm = this;
            e.ajax({
                type: "post",
                url: "" + site_url + "ajax.php?score",
                dataType: "json",
                data: r.data,
                success: function(data) {
                    if (data != null) {
                        n.show_result(data, elm);
                    }
                }
            })
        })
    }
})(jQuery);

$(function() {
    default_content = $(my_target).html();
});
function go_in(e) {
    setInterval(function() {
        window.location = e
    }, 2e3)
}
function show_load() {
    if (site_dir == "rtl") {
        rol = "right"
    } else if (site_dir == "ltr") {
        rol = "left"
    }
    if (typeof $("#loader")[0] == "undefined") {
        if ($("#my_basket_inner").length > 0) {
            d = $('<div id="loader">' + lang_wait + '<img src="' + template_dir + 'img/724.gif"/></div>').appendTo("body");
        } else {
            d = $('<div id="loader"><img src="' + template_dir + 'img/724.gif"/></div>').appendTo("body");
        }
    } else {
        d = $("#loader");
    }

    d.attr("class", "load").css("position", "fixed").css("top", "40%").css(rol, "45%").fadeIn(500);
    if ($("#my_basket_inner").length > 0) {
        $("#my_basket_inner").css({opacity: '0.3'});
    }

}
function hide_load() {
    d = $("#loader");
    if (site_dir == "rtl") {
        rol = "right"
    } else if (site_dir == "ltr") {
        rol = "left"
    }

    d.attr("class", "load").css("position", "fixed").css("top", "40%").css(rol, "45%").fadeOut(500, function() {
        $(this).remove()
    });
    if ($("#my_basket_inner").length > 0) {
        $("#my_basket_inner").css({opacity: '1'});
    }
}

(function(e) {
    e.fn.addScore = function(t) {
        var n = {
            data: "",
            show_result: function() {
            }
        };
        var r = e.extend(n, t);
        return this.each(function() {
            elm = this;
            e.ajax({
                type: "post",
                url: "" + site_url + "ajax.php?score",
                dataType: "json",
                data: r.data,
                success: function(data) {
                    n.show_result(data, elm);
                }
            })
        })
    }
})(jQuery);

function start_load_page() {
    if ($("#link_load").size() > 0) {
        return false;
    }
    $('<div id="link_load"></div>').appendTo("body")
    $("#link_load").css("top", "0").fadeIn(500);

    $(".bg").fadeTo(500, 0.6);

    if (!$.browser.msie) {
        var t = new Sonic({
            width: 10,
            height: 10,
            padding: 15,
            strokeColor: "#5BCCD5",
            pointDistance: .01,
            stepsPerFrame: 3,
            trailLength: .7,
            step: "fader",
            setup: function() {
                this._.lineWidth = 5
            },
            path: [
                ["arc", 10, 10, 10, 0, 360]
            ]
        });
        t.play();
        $("#link_load").prepend(t.canvas);
    }

}

function end_load_page() {
    $("#link_load").fadeOut(function() {
        $(this).remove();
    });

    $(".bg").fadeOut(function() {
        $(this).remove();
    });
}


function pRslt(e, t) {
    $("#" + t).show(500).html(e)
}

close_form = 'ok';
function ajax_done(e) {
    if (typeof now_form != "undefined") {
        $(now_form).prev().removeClass("error").addClass("success");

        if (close_form == 'ok') {
            $(now_form).slideUp();
        }

    } else {
        $("#" + e).removeClass("error_error").addClass("error_success")
    }
}

function gcu(u) {
    window.location.href = u;
}
///////////////////////////////////new-js//////////////////////////////////////
if ($('#target').length) {
    $(document).ready(function() {
        ref_search();
    });
}
var lasturl = '';

$(document.body).on('click', '.mega-dropdown-menu > ul > li > ul > li a,li.first-menu a', function(e) {
    var href = $(this).attr('href');
    href = href.replace(site_url, '');
    if (href == 'fa/#' || href == 'fa/#/' || href == 'fa/' || href == 'fa' || href == 'javascript:void(0);') {
        var href = $(this).attr('href', 'javascript:void(0);');
        return false;
    } else {
        $(window).on('hashchange', function(e) {
            window.location = e.target;
            location.reload();
        });

    }
});

/*
 if (!$('.isproduct').length) {
 $(document.body).on('click', '.mega-dropdown-menu > ul > li > ul > li a', function(e) {
 e.preventDefault();
 //console.log($(this).attr('href'));
 var href = $(this).attr('href');
 href = href.replace(site_url, '');
 if (href == 'fa/#' || href == 'fa/#/' || href == 'fa/' || href == 'fa' || href == 'javascript:void(0);') {
 var href = $(this).attr('href', 'javascript:void(0);');
 //eval(href);
 return false;
 } else {
 window.location = site_url + href;
 }
 });
 } else {
 $(document.body).on('click', '.mega-dropdown-menu > ul > li > ul > li a', function(e) {
 e.preventDefault();
 var href = $(this).attr('href');
 href = href.replace(site_url, '');
 if (href == 'fa/#' || href == 'fa/#/' || href == 'fa/' || href == 'fa' || href == 'javascript:void(0);') {
 var href = $(this).attr('href', 'javascript:void(0);');
 return false;
 } else {
 var href = $(this).attr('href');
 window.location = href;
 setTimeout(function() {
 location.reload();
 }, 100);
 }
 });
 }
 */

if ($('#slider-range').length > 0) {
    min = parseInt($('#minprice').attr('data-min'));
    max = parseInt($('#maxprice').attr('data-max'));
    rand = $('#randprice').attr('data-rand');
    var values = rand.split(',');
}

function ref_search(url) {
    var e = window.location.hash;
    var e1 = window.location.href;
    if (e1.match(new RegExp('.html/')))
        return false;
    if (e1.match(new RegExp('&')))
        return false;
    if (!e1.match(new RegExp('#')))
        return false;
    if (typeof e == 'undefined' || e == site_url + "#")
        return false;
    if (e1 != lasturl) {
        lasturl = e1;
        url = e.replace('#/', '');
        urlorg = e1.split('#');
        urlorg = urlorg[0];
        urlArr = url.split('/');
        lenurl = urlArr.length;

        var hashurl = [];
        var newurlitem1 = [];
        var newurlitem2 = [];
        for (var i = 0; i < lenurl; i++) {
            if (urlArr[i].length > 0) {
                var item = urlArr[i].split('-');
                if (item[1]) {
                    if (item[1].length > 0) {
                        if (item[0] == 'answer') {
                            var itemanswer = item[1].split('_');
                            hashurl.push(item[0] + '[' + itemanswer[0] + '][' + itemanswer[1] + '][' + itemanswer[2] + ']=' + itemanswer[2]);
                        } else {
                            hashurl.push(item[0] + '[]=' + item[1]);
                        }
                    } else {
                        $("#target").css('opacity', '1').css('min-height', '40px').html('<div class="error" dir="rtl">نتیجه ای یافت نشد !</div>');
                        return false;
                    }
                } else {
                    $("#target").css('opacity', '1').css('min-height', '40px').html('<div class="error" dir="rtl">نتیجه ای یافت نشد !</div>');
                    return false;
                }
            } else {
                $("#target").css('opacity', '1').css('min-height', '40px').html('<div class="error" dir="rtl">نتیجه ای یافت نشد !</div>');
                return false;
            }
        }

        if (!e1.match(new RegExp(site_url))) {
            e = lasturl;
        } else {
            e = urlorg + '&' + hashurl.join("&") + '&ajax=ok';
        }
        var i = 0;
        var URL = e;

        $("#target").css('opacity', '0');
        $.ajax({
            type: 'GET',
            dataType: 'text',
            contentType: 'text/html',
            url: URL,
            cache: false,
            error: function(xhr, ajaxOptions, thrownError) {
                //alert(xhr.responseText);
                //alert(thrownError);
            },
            beforeSend: function() {
                //$("html, body").animate({scrollTop: 140}, 600);
                //$("#target").css('min-height', '330px').css('opacity', '0.08');
                $('#loadercir').html('<img src="' + template_dir + 'img/724.gif"/>').fadeIn('fast');
            },
            complete: function() {
                $("#target").css('opacity', '1');
            },
            success: function(data) {
                $('#loadercir').fadeOut('slow');
                $("#target").css('opacity', '1').html(data);
                ajax_success(urlArr);
                $(document).unbind("scroll");
            }
        });
    }
}
;

function ajax_success(redata) {
    //$(".compare input").uniform();
    $.fn.raty.defaults.path = template_dir + 'img';
    $('.score-callback').raty({
        readOnly: true,
        score: function() {
            return $(this).attr('data-score');
        }
    });
    reurl = redata.length;
    for (var i = 0; i < reurl; i++) {
        if (redata[i].length > 0) {
            reitem = redata[i].split('-');
            if (reitem[1]) {
                if (reitem[1].length > 0) {
                    if (reitem[0] == 'colors') {
                        colors = $('.filter_right input:checkbox[value="' + redata[i] + '"]');
                        if (colors.length > 0) {
                            colors.prop('checked', true);
                            //$.uniform.update(colors);
                            if (colors.hasClass("activecheckbox")) {

                            } else {
                                child = $('.your_select').find('a[data-title="' + colors.attr('data-title') + '"]').length;
                                if (child > 0) {
                                    $('.your_select a[data-title="' + colors.attr('data-title') + '"]').remove();
                                } else {
                                    $('.filter-right22 .filter-right').show();
                                    $('.your_select').append('<a data-main="' + colors.data('main') + '" data-title="' + colors.attr('data-title') + '">' + colors.attr('data-main') + ' : ' + colors.attr('data-title') + '<span>×</span></a>');
                                    colors.addClass("activecheckbox");
                                }
                            }
                        }
                    } else if (reitem[0] == 'brand') {
                        brand = $('.filter_right input:checkbox[value="' + redata[i] + '"]');
                        if (brand.length > 0) {
                            brand.prop('checked', true);
                            //$.uniform.update(brand);
                            if (brand.hasClass("activecheckbox")) {

                            } else {
                                child = $('.your_select').find('a[data-title="' + brand.attr('data-title') + '"]').length;
                                if (child > 0) {
                                    $('.your_select a[data-title="' + brand.attr('data-title') + '"]').remove();
                                } else {
                                    $('.filter-right22 .filter-right').show();
                                    $('.your_select').append('<a data-main="' + brand.data('main') + '" data-title="' + brand.attr('data-title') + '">' + brand.attr('data-main') + ' : ' + brand.attr('data-title') + '<span>×</span></a>');
                                    brand.addClass("activecheckbox");
                                }
                            }
                        }
                    } else if (reitem[0] == 'answer') {
                        answer = $('.filter_right input:checkbox[value="' + redata[i] + '"]');
                        if (answer.length > 0) {
                            answer.prop('checked', true);
                            //$.uniform.update(answer);
                            if (answer.hasClass("activecheckbox")) {

                            } else {
                                child = $('.your_select').find('a[data-idd="' + answer.attr('data-idd') + '"]').length;
                                child2 = $('.db_show').find('a[data-idd="' + answer.attr('data-idd') + '"]').length;

                                if (child > 0) {
                                    $('.your_select a[data-idd="' + answer.attr('data-idd') + '"]').remove();
                                } else {
                                    $('.your_select').append('<a class="tagquestion" data-main="' + answer.data('main') + '" data-title="' + answer.attr('data-title') + '" data-idd="' + answer.attr('data-idd') + '">' + answer.attr('data-main') + ' : ' + answer.attr('data-title') + '<span>×</span></a>');
                                    answer.addClass("activecheckbox");
                                }

                                if (child2 > 0) {
                                    $('.db_show[data-idd="' + answer.attr('data-idd') + '"]').remove();
                                } else {
                                    $('.div_bottom[data-id="' + answer.attr('data-id') + '"]').append('<div class="db_show clearfix" data-title="' + answer.attr('data-title') + '" data-idd="' + answer.attr('data-idd') + '"><span>' + answer.attr('data-title') + '</span><a class="filter-title" data-main="' + answer.data('main') + '" data-title="' + answer.attr('data-title') + '" data-idd="' + answer.attr('data-idd') + '">x</a></div>');
                                    answer.addClass("activecheckbox");
                                }
                            }
                        }
                    } else if (reitem[0] == 'page') {
                        page = $('#target .pagination').find('a[data-value="page-' + reitem[1] + '"]');
                        if (page.length > 0) {
                            $('#target .pagination a').removeAttr('data-active');
                            page.attr('data-active', 'true');
                        }
                    } else if (reitem[0] == 'state') {
                        state = $('.filter_option select[name="order"]').val(redata[i]);
                        state.prop('selected', true);
                    } else if (reitem[0] == 'order') {
                        order = $('.filter_option select[name="order"]').val(redata[i]);
                        order.prop('selected', true);
                        //$.uniform.update(order);
                    } else if (reitem[0] == 'sort') {
                        sort = $('.filter_option select[name="sort"]').val(redata[i]);
                        sort.prop('selected', true);
                        //$.uniform.update(sort);
                    } else if (reitem[0] == 'pagesize') {
                        pagesize = $('.show-num').find('a[data-val="pagesize-' + reitem[1] + '"]');
                        if (pagesize.length > 0) {
                            $('.show-num li.pageNumber').removeClass('active');
                            pagesize.addClass("active");
                        }
                        //$.uniform.update(pagesize);
                    } else if (reitem[0] == 'stock') {
                        stock = $('.filter_option_check input:checkbox[value="' + redata[i] + '"]');
                        if (stock.length > 0) {
                            stock.prop('checked', true);
                            //$.uniform.update(stock);
                        }
                    } else if (reitem[0] == 'keyword') {
                        child = $('.your_select_keyword').find('a[data-main="عبارت"]').length;
                        if (child > 0) {
                            $('.your_select_keyword a[data-main="عبارت"]').remove();
                        }
                        keyword = $(".search_inp#keyword");
                        if (keyword.length > 0) {
                            keyword.val(reitem[1]).attr('data-title', reitem[1]);
                            child = $('.your_select_keyword').find('a[data-title="' + keyword.attr('data-title') + '"]').length;
                            if (child > 0) {
                                $('.your_select_keyword a[data-title="' + keyword.attr('data-title') + '"]').remove();
                            } else {
                                $('.filter-right22 .filter-right').show();
                                $('.your_select_keyword').append('<a data-main="' + keyword.data('main') + '" data-title="' + keyword.attr('data-title') + '" data-search="keyword" ><img src="' + template_dir + 'img/remove2.png"/></a>');
                            }
                        }

                    } else if (reitem[0] == 'minprice' || reitem[0] == 'maxprice') {
                        if (reitem[0] == 'minprice') {
                            min1 = reitem[1];
                            $('#price_from').val(reitem[1]).attr('data-title', reitem[1]);
                            priceelm = $('#price_from');
                        } else {
                            max1 = reitem[1];
                            $('#price_to').val(reitem[1]).attr('data-title', reitem[1]);
                            priceelm = $('#price_to');
                        }
                        if (priceelm.hasClass("activeprice")) {

                        } else {
                            child = $('.your_select').find('a[data-title="' + priceelm.attr('data-title') + '"]').length;
                            if (child > 0) {
                                $('.your_select a[data-title="' + priceelm.attr('data-title') + '"]').remove();
                            } else {
                                $('.filter-right22 .filter-right').show();
                                $('.your_select').append('<a data-main="' + priceelm.data('main') + '" data-title="' + priceelm.attr('data-title') + '" data-price="' + priceelm.attr('id') + '">' + priceelm.attr('data-main') + ' : ' + putComma(priceelm.attr('data-title')) + ' تومان<span>×</span></a>');
                            }
                        }
                    } else {
                        $("#target").css('opacity', '1').css('min-height', '40px').html('<div class="error" dir="rtl">نتیجه ای یافت نشد !</div>');
                        return false;
                    }
                }
            }
        }
    }
    if ($('.filter_option_view').length > 0) {
        $('.filter_option_view > a:eq(' + $.cookie('filter') + ')').trigger('click');
    }
    if ($('.your_select').children('a').length <= 0) {
        $('.filter-right22 .filter-right').hide();
    }
    if ($('#slider-range').length > 0) {
        var newArray = new Array();
        len = redata.length;
        for (var i = 0; i < len; i++) {
            if (redata[i].length > 0) {
                temp = redata[i].split('-');
                if (temp[0].length > 0) {
                    newArray.push(temp[0]);
                }
            }
        }
        if (jQuery.inArray("minprice", newArray) == -1) {
            min1 = parseInt($('#minprice').attr('data-min'));
        }
        if (jQuery.inArray("maxprice", newArray) == -1) {
            max1 = parseInt($('#maxprice').attr('data-max'));
        }
        $("#slider-range").slider({values: [min1, max1]});

        $("#amountMin").val(putComma(min1) + " تومان ");
        $("#amountMax").val(putComma(max1) + " تومان ");

        //$("#amount").val(putComma(max1) + "  تومان تا   " + putComma(min1)+ "  تومان ");
    }
    if ($('.my_basket_compare a.my_basket_compare_delete').length > 0) {
        if ($('.my_basket_compare a.my_basket_compare_delete').attr('data-idcomparison').length > 0) {
            if ($.cookie("compare")) {
                compare2 = $.cookie("compare");
                var t2 = compare2.split(",");
                new_result2 = new Array;
                i = 0;
                for (x in t2) {
                    value = $.trim(String(t2[x]));
                    value2 = $.trim(String(value.split("|")));
                    value3 = value2.split(",");
                    if (value3 != "") {
                        $('.product-list input[data-idcomparison="' + value3[0] + '"]').prop('checked', true);
                    }
                    i++
                }
            }
        }
    }

}

if ($('.your_select').children('a').length > 0) {
    $('.filter-right22 .filter-right').show();
} else {
    $('.filter-right22 .filter-right').hide();
}

function showValues() {
    matches = '';
    if ($(".filter_option select[name='order'] option:selected").val() != '') {
        select = $(".filter_option select[name='order'] option:selected").map(function() {
            return this.value;
        }).get();
        matches += '/' + select.join("/");
    }
    if ($(".filter_option select[name='sort'] option:selected").val() != '') {
        select = $(".filter_option select[name='sort'] option:selected").map(function() {
            return this.value;
        }).get();
        matches += '/' + select.join("/");
    }
    if ($('.show-num li.active').length > 0) {
        matches += '/' + $('.show-num li.active').attr('data-val');
    }
    if (typeof $('.filter_right input:checkbox:checked').val() != 'undefined') {
        check = $('.filter_right input:checkbox:checked').map(function() {
            return this.value;
        }).get();
        matches += '/' + check.join("/");
    }
    if (typeof $('.filter_option_check input:checkbox:checked').val() != 'undefined') {
        checkstock = $('.filter_option_check input:checkbox:checked').map(function() {
            return this.value;
        }).get();
        matches += '/' + checkstock.join("/");
    }
    if ($('#keyword').val().length > 0) {
        matches += '/' + 'keyword-' + $('#keyword').val();
    }
    if ($('#target .pagination a[data-active="true"]').length > 0) {
        matches += '/' + $('#target .pagination a[data-active="true"]').attr('data-value');
    }
    if ($('#slider-range').length > 0) {
        price_min = parseInt($('#price_from').val());
        if (price_min != min) {
            matches += '/minprice-' + $('#price_from').val();
        }
        price_max = parseInt($('#price_to').val());
        if (price_max != max) {
            matches += '/maxprice-' + $('#price_to').val();
        }
    }
    //console.log(matches);
    window.location.hash = matches;
    ref_search();
    return false;
}
;

$(document.body).on('change', ".filter_right > .flt input[type='checkbox']", function() {
    element = $(this);
    child = $('.your_select').find('a[data-title="' + element.attr('data-title') + '"]').length;
    if (child > 0) {
        $('.your_select a[data-title="' + element.attr('data-title') + '"]').remove();
    } else {
        $('.filter-right22 .filter-right').show();
        $('.your_select').append('<a data-main="' + element.data('main') + '" data-title="' + element.attr('data-title') + '">' + element.attr('data-main') + ' : ' + element.attr('data-title') + '<span>×</span></a>');
        element.addClass("activecheckbox");
    }
    showValues();
});
$(document.body).on('change', ".filter_right > .filter_blc input[type='checkbox']", function() {
    element = $(this);
    child = $('.your_select').find('a[data-idd="' + element.attr('data-idd') + '"]').length;
    child2 = $('.db_show').find('a[data-idd="' + element.attr('data-idd') + '"]').length;

    if (child > 0) {
        $('.your_select a[data-idd="' + element.attr('data-idd') + '"]').remove();
    } else {
        $('.your_select').append('<a class="tagquestion" data-main="' + element.data('main') + '" data-title="' + element.attr('data-title') + '" data-idd="' + element.attr('data-idd') + '">' + element.attr('data-main') + ' : ' + element.attr('data-title') + '<span>×</span></a>');
        element.addClass("activecheckbox");
    }

    if (child2 > 0) {
        $('.db_show[data-idd="' + element.attr('data-idd') + '"]').remove();
    } else {
        $('.div_bottom[data-id="' + element.attr('data-id') + '"]').append('<div class="db_show clearfix" data-title="' + element.attr('data-title') + '" data-idd="' + element.attr('data-idd') + '"><span>' + element.attr('data-title') + '</span><a class="filter-title" data-main="' + element.data('main') + '" data-title="' + element.attr('data-title') + '" data-idd="' + element.attr('data-idd') + '">x</a></div>');
        element.addClass("activecheckbox");
    }
    showValues();
});
$(document.body).on('change', ".filter_option_check input[type='checkbox']", function() {
    $('#target .pagination a').removeAttr('data-active');
    showValues();
    return false;
});
$(document.body).on('change', ".filter_option select", function() {
    $('#target .pagination a').removeAttr('data-active');
    showValues();
    return false;
});
$(document.body).on('click', '#target .pagination a', function() {
    $('#target .pagination a').removeAttr('data-active');
    $(this).attr('data-active', 'true');
    showValues();
    return false;
});

$(document.body).on('click', '.show-num li.pageNumber', function() {
    $('.show-num li.pageNumber').removeClass('active');
    $(this).addClass("active");
    showValues();
    return false;
});

$(function() {
    $(".search_inp#keyword").bind("enterKey", function(e) {
        $('#target .pagination a').removeAttr('data-active');
        showValues();
    });
});
$('.search_inp#keyword').keydown(function(e) {
    if (e.keyCode == 13) {
        if ($(this).val().length > 0) {
            $(this).trigger("enterKey");
            return false;
        }
    }
});
$(".filter_option_bottom .search_btn").unbind('click').bind("click", function(e) {
    if ($('.search_inp#keyword').val().length > 0) {
        $('.search_inp#keyword').trigger("enterKey");
        $('.search_inp#keyword').trigger("click");
        return false;
    }
});


$(document.body).on('click', '.your_select a', delTag);
$(document.body).on('click', '.your_select_keyword a', delTag);
$(document.body).on('click', '.db_show a', delTagquestion);

function delTag() {
    idd = $(this).attr('data-idd');
    price = $(this).attr('data-price');
    search = $(this).attr('data-title');
    state = $(this).val();
    if (typeof price !== 'undefined' && price !== false) {
        if (price == 'price_to') {
            $('#price_to').val(max);
            $('.your_select a[data-price="price_to"]').remove();
        }
        if (price == 'price_from') {
            $('#price_from').val(min);
            $('.your_select a[data-price="price_from"]').remove();
        }
    }
    if (typeof idd !== 'undefined' && idd !== false) {
        elementdel = $(this);
        idd = elementdel.attr('data-idd');
        $(this).remove();
        $('.db_show[data-idd="' + idd + '"]').remove();
        $('.filter_right > .filter_blc input[data-idd="' + idd + '"]').prop('checked', false);
        //$.uniform.update('.filter_right > .filter_blc input[data-idd="' + idd + '"]');
    } else {
        title = $(this).data('title');
        $(this).remove();
        $(':input[data-title="' + title + '"]').prop('checked', false);
        //$.uniform.update(':input[data-title="' + title + '"]');
    }
    if (typeof search !== 'undefined' && search !== false) {
        $('#keyword').val('');
        $('.your_select a[data-search="keyword"]').remove();
    }
    if (typeof state !== 'undefined' && state !== false) {
        $('#state').val('');
    }
    showValues();
}
;

function delTagquestion() {
    elementdel = $(this);
    idd = elementdel.attr('data-idd');
    $(this).remove();
    $('.your_select a[data-idd="' + idd + '"]').remove();
    $('.db_show[data-idd="' + idd + '"]').remove();
    $('.filter_right > .filter_blc input[data-idd="' + idd + '"]').prop('checked', false);
    //$.uniform.update('.filter_right > .filter_blc input[data-idd="' + idd + '"]');
    showValues();
}
;

if ($('#slider-range').length > 0) {
    $(pricer = function() {
        var slider = $("#slider-range").slider({
            range: true,
            min: min,
            max: max,
            values: [min, max],
            slide: function(event, ui) {
                var includeLeft = event.keyCode != $.ui.keyCode.RIGHT;
                var includeRight = event.keyCode != $.ui.keyCode.LEFT;
                var value = findNearest(includeLeft, includeRight, ui.value);
                if (ui.value == ui.values[0]) {
                    slider.slider('values', 0, value);
                }
                else {
                    slider.slider('values', 1, value);
                }
                $("#amountMin").val(putComma(slider.slider('values', 0)) + " تومان ");
                $("#amountMax").val(putComma(slider.slider('values', 1)) + " تومان ");

                //$("#amount").val(putComma(slider.slider('values', 1)) + " تومان  تا  " + putComma(slider.slider('values', 0))+ "  تومان ");
                return false;
            },
            change: function(event, ui) {
                $("#price_to").val(ui.values[1]).attr('data-title', ui.values[1]);
                $("#price_from").val(ui.values[0]).attr('data-title', ui.values[0]);
                element = $('.my_price').find(':input[value="' + ui.value + '"]');
                size = $('.your_select a[data-main="' + element.attr('data-main') + '"]').length;
                if (size > 0) {
                    $('.your_select a[data-main="' + element.attr('data-main') + '"]').remove();
                }
                if (parseInt(ui.value) !== max && parseInt(ui.value) !== min) {
                    child = $('.your_select').find('a[data-title="' + element.attr('data-title') + '"]').length;
                    if (child > 0) {
                        $('.your_select a[data-title="' + element.attr('data-title') + '"]').remove();
                    } else {
                        $('.filter-right22 .filter-right').show();
                        $('.your_select').append('<a data-main="' + element.data('main') + '" data-title="' + element.attr('data-title') + '" data-price="' + element.attr('id') + '">' + element.attr('data-main') + ' : ' + putComma(element.attr('data-title')) + ' تومان<span>×</span></a>');
                        element.addClass("activeprice");
                    }
                }
                showValues();
            }
        });
        function findNearest(includeLeft, includeRight, value) {
            var nearest = null;
            var diff = null;
            for (var i = 0; i < values.length; i++) {
                if ((includeLeft && parseInt(values[i]) <= value) || (includeRight && parseInt(values[i]) >= value)) {
                    var newDiff = Math.abs(value - values[i]);
                    if (diff == null || newDiff < diff) {
                        nearest = parseInt(values[i]);
                        diff = newDiff;
                    }
                }
            }
            return nearest;
        }

        //$("#amount").val(putComma($("#slider-range").slider("values", 1)) + " تومان  تا  " + putComma($("#slider-range").slider("values", 0)) + "تومان  ");

        $("#amountMin").val(putComma($("#slider-range").slider("values", 0)) + " تومان ");
        $("#amountMax").val(putComma($("#slider-range").slider("values", 1)) + " تومان ");

        $("#price_from").val($("#slider-range").slider("values", 0));
        $("#price_to").val($("#slider-range").slider("values", 1));
    });
}

if ($.cookie("compare")) {
    compare2 = $.cookie("compare");
    var t2 = compare2.split(",");
    new_result2 = new Array;
    i = 0;
    for (x in t2) {
        value = $.trim(String(t2[x]));
        value2 = $.trim(String(value.split("|")));
        value3 = value2.split(",");
        if (value3 != "") {
            $('.product-list input[data-idcomparison="' + value3[0] + '"]').prop('checked', true);
        }
        i++
    }
}

$(function() {
    $(document.body).on('change', '.compare1', function(event) {
        event.preventDefault();
        child = $('.my_basket_compare').find('a[data-idcomparison="' + $(this).attr('data-idcomparison') + '"]').length;
        if (child > 0) {
            $.ham3dBasket_compare({id: '' + $(this).attr('data-idcomparison') + '|' + $(this).data('priceid') + '', kind: 'remove_compare'});
            return false;
        } else {
            $.ham3dBasket_compare({id: '' + $(this).attr('data-idcomparison') + '|' + $(this).data('priceid') + '', kind: 'new'});
            return false;
        }

    });

});

$(document.body).on('click', '.my_basket_compare_delete2', function() {
    iv = $(this).data('idcomparison');
    $('.product-list input[data-idcomparison="' + iv + '"]').prop('checked', false);
});

$(document.body).on('click', '#delete-btn', function() {
    $(".compare1").each(function() {
        $(".compare1").prop('checked', false);
        //$.uniform.update('.compare1');
    });
});