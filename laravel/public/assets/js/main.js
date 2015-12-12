$(document.body).on('click', ".close", function() {
    $("input[name='login']").remove();
});
$(document.body).on('click', ".user-login", function() {
    $("input[name='login']").remove();
});




function resizeStuff() {
    pageManager();
    typeof detailPageManager == "function" && detailPageManager();
    typeof comparePageManager == "function" && comparePageManager()
}
function pageManager() {
    width = $(window).width();
    var n;
    width >= 1240 ? (n = 5, $("body").attr("class", "wmax")) : (n = 4, $("body").attr("class", "wmin"));
    initializeScroller(n)
}


function initializeScroller(n) {
    var i = [], t;
    location.pathname.indexOf("Main") != -1 && (t = location.pathname.replace(new RegExp("[/]+$"), ""), i = t.substring(0, location.pathname.length).split("/"));
    $(".horizontalbox .prev").unbind("click");
    $(".horizontalbox .next").unbind("click");
    $(".horizontalbox").dkScroller({height: 210, containerHeight: 250, displayButtons: !0, sortable: !0, margin: [2.5, 2.5], borderWidth: 2, itemsCount: n, ajaxCall: !0, buttonsHeight: 25, startIndex: 0, markup: "", afterScrollerLoad: function () {
    }})
}



function showIncredible() {
    var n = $("#amazingoffer");
  
        n != null ? ($("#amazingoffer").html(n.m_Item1).each(function (t) {

        }),

        $("#amazingoffer").dkSlider({autoplay: !0, interval: 7e3})) : $("#amazingoffer").hide()
   
}

function quickViewTruePosition(n, t) {
    var i = n.offset().top + 25, r = n.closest("article"), f = $("body").width() - n.offset().left, u = n.width() / 2 - 10.5;
    f < t.width() ? (r.attr("id") == "items" && (i += 37), t.css({top: i, right: 5}), t.children(".info_arrow_top, .info_arrow_top_border").css("left", n.offset().left - t.offset().left + 7.5), n.is(".wiki") && t.children(".info_arrow_top, .info_arrow_top_border").css("left", n.offset().left - t.offset().left + u)) : r.hasClass("verticalbox") ? (t.css({top: i + 2, left: n.offset().left - 20}), t.children(".info_arrow_top, .info_arrow_top_border").css("left", 22)) : r.hasClass("horizontalbox") || r.attr("id") == "relatedproducts" ? (t.css({top: i, left: n.offset().left - 7}), t.children(".info_arrow_top, .info_arrow_top_border").css("left", 14)) : r.attr("id") == "items" ? (t.css({top: i + 37, left: n.offset().left - 7}), t.children(".info_arrow_top, .info_arrow_top_border").css("left", 15.5)) : n.is(".wiki") && (t.css({top: i + 5, left: n.offset().left - 7}), t.children(".info_arrow_top, .info_arrow_top_border").css("left", n.offset().left - t.offset().left + u))
}
function showPictureDialog() {
    return!1
}
var page, width, menu, root, cookie, TO = !1, flag;
$(window).resize(function () {
    TO !== !1 && clearTimeout(TO);
    TO = setTimeout(resizeStuff, 100);
    $("#quickInfo").hide()
});
$(document).ready(function () {
    function p() {
        $(this).addClass("current").find(".sl").addClass("nav-hover")
    }

    function w() {
        $(this).removeClass("current").find(".sl").removeClass("nav-hover")
    }

    var l, a, n, t, r, i, y;
    if (width = $(window).width(), menu = $("#menu"), pageManager(), showIncredible(), (
            $("#SearchBox").val() == "") 
            && 
            window.location.hash.toLowerCase().indexOf("keyword") != -1)
    {
        parametersString = window.location.hash;
        stringKeyword = "";
        var o = parametersString.toLowerCase().indexOf("keyword"), h = 0, c = "";
        o != -1 && (h = parametersString.toLowerCase().indexOf("/", o), c = parametersString.substring(o + 8, h));
        $("#SearchBox").val(decodeURIComponent(c))
    }
    if ($(".profile .tabs p:eq(1)").click(function () {
        showNotifications(!0)
    }), $(".profile .tabs p:eq(2)").click(function () {
        showOrder()
    }), $(".profile .tabs p:eq(3)").click(function () {
        showFavorites()
    }), $(".profile .tabs p:eq(4)").click(function () {
        showReviews()
    }), $(".profile .tabs p:eq(5)").click(function () {
        showComments()
    }), $(".profile .tabs p:eq(6)").click(function () {
        showDigibons()
    }), $(".profile .tabs p:eq(7)").click(function () {
        showGiftCards()
    }), $(".profile .tabs p:eq(8)").click(function () {
        showNotifiers()
    }),
    l = $(".navigation .l_one"),
    a = $(".navigation .l_one .l_two"),
    //l.hoverIntent({over: p, timeout: 500, interval: 200, out: w}),
    a.mouseenter(function () {
        $(this).parent(".sl").find("li.current").removeClass("current");
        $(this).addClass("current")
    }).mouseleave(function () {
        var n = $(this);
        setTimeout(function () {
            n.removeClass("current")
        }, 200)
    }), /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Windows Phone/i.test(navigator.userAgent) && $(".navigation .l_two > a").click(function (n) {
        n.preventDefault()
    }), n = $(".group .mscroll"), n.length && (n.length == 2 ? (t = n.eq(1), n.eq(0).css({overflow: "hidden", height: "475", "margin-top": "0"}), n.eq(1).css({height: "450"})) : n.length == 3 ? (t = n.eq(2), n.eq(0).css({overflow: "hidden", height: "475", "margin-top": "0"}), n.eq(1).css({overflow: "hidden", height: "450", "margin-top": "0"}), n.eq(2).css({height: "425"})) : n.length == 4 ? (t = n.eq(3), n.eq(0).css({overflow: "hidden", height: "475", "margin-top": "0"}), n.eq(1).css({overflow: "hidden", height: "450", "margin-top": "0"}), n.eq(2).css({overflow: "hidden", height: "425", "margin-top": "0"}), n.eq(3).css({height: "400"})) : n.length == 5 ? (t = n.eq(4), n.eq(0).css({overflow: "hidden", height: "475", "margin-top": "0"}), n.eq(1).css({overflow: "hidden", height: "450", "margin-top": "0"}), n.eq(2).css({overflow: "hidden", height: "425", "margin-top": "0"}), n.eq(3).css({overflow: "hidden", height: "400", "margin-top": "0"}), n.eq(4).css({height: "375"})) : (t = n.eq(0), n.eq(0).css({overflow: "hidden", height: "500", "margin-top": "0"})), t.mCustomScrollbar({autoDraggerLength: !1, scrollButtons: {enable: !0, scrollType: "pixels", scrollAmount: 160}})), r = $("#menu .basedon"), r.length) {
        var u, e, f = !0, b = $("#menu").height(!0), v = $("#menu .basedon").length, s = $("#menu .searchincategory").height() + v * r.outerHeight(!0);
        r.each(function () {
            var n = $(this).next(".items").children(".scroll");
            b - s > $(this).next(".items").height() ? (u = $(this).next(".items").height(), e = u) : (u = $("#menu").height(), e = v == 1 ? u - s - 2 : u - s);
            n.height(e);
            n.mCustomScrollbar({autoDraggerLength: !1, scrollButtons: {enable: !0, scrollType: "pixels", scrollAmount: 160}});
            $(this).next(".items").hide()
        });
        $("#menu .items").eq(0).show();
        r.click(function () {
            var n = $(this).next(".items");
            f && (n.is(":hidden") ? (f = !1, $("#menu .items").each(function () {
                $(this).is(":visible") && $(this).animate({height: "toggle"}, 300).prev(".basedon").removeClass("opened")
            }), $(this).addClass("opened"), n.animate({height: "toggle"}, 300, function () {
                f = !0
            })) : (f = !1, $(this).removeClass("opened"), n.animate({height: "toggle"}, 300, function () {
                f = !0
            })))
        })
    }
    $(".account").click(function () {
        $.cookie("dk-guid") != null && ($(this).toggleClass("active"), $(".profile").toggleClass("hidden"))
    });
    $(".profile").dkSlider({speed: 0, onTabClick: function () {
        var n = $(".profile .tabs p.current");
        n.hasClass("first") ? n.parent(".tabs").css({"border-left": "", "border-right": "1px solid #666"}) : n.hasClass("last") ? n.parent(".tabs").css({"border-left": "1px solid #666", "border-right": ""}) : n.parent(".tabs").removeAttr("style")
    }});
    $("#btnSearch").click(function () {
        var t = "All", n = $("#SearchBox").val().trim();
        n = CheckForPotentiallyDangerous(n);
        n != "جستجوی مدل یا گروه کالا ..." && n.length >= 2 && (window.location.href = t == "All" ? "/Search/#/Keyword-" + n.toLowerCase() + "/" : "/Search/Category-" + t + "/#/Keyword-" + n.toLowerCase() + "/", $("#lookup").hide())
    });
//    searchIn();
//    $("#ddrMainCategory").change(function () {
//        searchIn()
//    });
    //setOverLay();
    //setWiki();
    i = $("#toppanel-container").attr("data-value");
    //y = $.cookie("dkNotification_" + i);
    y == null && setTimeout(function () {
        $("#toppanel-container").length && ($("#toppanel-wrapper").animate({height: 140}, 400), $("#toppanel").animate({"margin-top": 0}, 400))
    }, 1500);
    $(".closepanel").click(function () {
        $("#toppanel-wrapper").animate({height: 0}, 400);
        $.cookie("dkNotification_" + i, i, {expires: 30, path: "/"})
    });
    $(".trigger-m").toggle(function () {
        $("#toppanel-wrapper").animate({height: 140}, 400);
        $("#toppanel").animate({"margin-top": 0}, 400)
    }, function () {
        $("#toppanel-wrapper").animate({height: 0}, 400);
        $("#toppanel").animate({"margin-top": -140}, 400);
        $.cookie("dkNotification_" + i, i, {expires: 30, path: "/"})
    });
    $(function () {
        $(".color").tooltip({position: {my: "center bottom-5", at: "center top"}})
    });
    $(".parallax").length && ($("#content #pageRegion .title").remove(), loadParallaxResources("css_parallax"), loadParallaxResources("js_parallax"))
});
String.prototype.trim = function (n) {
    return this.trimLeft(n).trimRight(n)
};
String.prototype.format = String.prototype.f = function () {
    for (var n = this, t = arguments.length; t--;)n = n.replace(new RegExp("\\{" + t + "\\}", "gm"), arguments[t]);
    return n
};
flag = !1;

jQuery(function (n) {
    n(document).bind("mouseup", function (t) {
        var i = n(t.target);
        i.closest("#lookup").is("#lookup") || n("#lookup").fadeOut();
        i.closest("#quickInfo").is("#quickInfo") || n("#quickInfo:visible") && n("#quickInfo").hide();
        page != "Profile" && (i.closest(".profile").is(".profile") || (n(".profile").addClass("hidden"), n(".account").removeClass("active")));
        i.closest(".minicart").is(".minicart") || (n(".minicart").addClass("hidden"), n(".cart").removeClass("active"));
        page == "Compare" ? i.closest("#comparelookup").is("#comparelookup") || n("#comparelookup").fadeOut() : page == "ImageCompare" && (i.closest(".comparelookup").is(".comparelookup") || n(".comparelookup").fadeOut())
    })
});

///////////////new-js-order/////////////////////////////////////////////////////

$(function() {
    if ($('.cart').length) {
        //pluss
        $(document.body).on('click', ".order-num .pluss", function() {
            var elm = $(this);
            var valnum = parseInt(elm.parent().find("input").val());
            elm.parent().find("input").val(valnum + 1);
            var num = parseInt(elm.parent().find("input#number").val());
            $.ham3dBasket({id: elm.parent().find("input#number").attr("attr_id"), kind: 'number', number: num});
            update_basket();
            ref_basket();
            //return false;
        });
        //minuss
        $(document.body).on('click', ".order-num .minuss", function() {
            var elm = $(this);            
            var valnum = parseInt(elm.parent().find("input").val());            
            if (valnum - 1 > 0) {
                elm.parent().find("input").val(valnum - 1);
                var num = parseInt(elm.parent().find("input#number").val());
                $.ham3dBasket({id: elm.parent().find("input#number").attr("attr_id"), kind: 'number', number: num});
                update_basket();
                ref_basket();
                //return false;
            }
            
        });
        //Delete Basket
        $(document.body).on('click', ".bp_delete", function() {
            $.ham3dBasket({id: $(this).attr("attr_id"), kind: 'remove'});
            $('#modalbox-wrap').fadeOut(2000);
            ref_basket();
        });
        //Bank Account Id
        $("select[name='bankaccountid']").change(function() {
            $("#bankacount_info").html($(this).find("option:selected").attr("attr_info")).parent().show();
        });
        //Finish Basket Submit
        $(document.body).on('click', ".finish_total_price", function() {
            $("html, body").animate({scrollTop: 0}, 600);
        });
        //bank checked
          $(document.body).on('change', "input[name='kind']", function() {
            elmval = $(this).val();
            if(elmval != '2'){
                $('input[name="bank"]').prop('checked', false);
                //$.uniform.update($('input[name="bank"]'));
            }else{
                $('input[name="bank"]').prop('checked', true);
                //$.uniform.update($('input[name="bank"]'));
            }
        });
        //Post
        $(document.body).on('change', "input[name='post']", function() {
            elm = this;
            if (elm.checked) {
                $("span#end_totalpost").html(num2fa($("input[name='post']:checked").attr('attr_post')));
                $("#end_totalpost2").val($("input[name='post']:checked").attr('attr_post'));
                code();
                event();
            }
        });
        //Code Takhfif
        $(document.body).on('blur', "input[name='code']", function() {
            elm = $('#code');
            $.ajax({
                type: "post",
                url: "" + site_url + "ajax.php?prize_ajax",
                dataType: "json",
                data: "&code=" + $(elm).val(),
                success: function(t) {

                    if (typeof t.kind != 'undefined') {

                        if (t.kind == 1) {
                            p = 'تومان';
                        } else {
                            p = 'درصد';
                        }

                        if (t.type == 3) {
                            var total_pricee = parseInt($("input#inner").attr('attr_price'));
                            var total_min_price = parseInt(t.min_price);
                        } else if (t.type == 2) {
                            var total_pricee = parseInt(t.product_price);
                            var total_min_price = parseInt(t.min_price);
                        } else if (t.type == 1) {
                            var total_pricee = parseInt(t.product_price);
                            var total_min_price = parseInt(t.min_price);
                        } else {
                            var total_pricee = parseInt($("input#inner").attr('attr_price'));
                            var total_min_price = parseInt(t.min_price);
                        }

                        if (total_pricee > total_min_price) {
                            html22 = 'مبلغ کارت تخفیف : ' + t.kind_value + ' ' + p + ' <br />';
                            $("input[name='code']").attr('readonly', 'readonly');
                            $("#code2").val(t.kind_value);
                            event();
                        } else {
                            html22 = 'حداقل خرید شما باید ' + total_min_price + ' تومان باشد ';
                        }

                    } else {
                        html22 = 'کد نامعتبر میباشد.';
                    }

                    $("#result").fadeIn(1000).html(html22);
                    var input = $("input[name='code']").val();
                    if (input === '') {
                        $("#result").fadeOut("1000", function() {
                        });
                    }
                }
            });
        });
        //Error
        $(".kind_show").find("input[error]").each(function() {
            $(this).attr("error1", $(this).attr("error")).removeAttr("error");
        });
        //kind show
        $(document.body).on('click', "input[name='kind']", function() {
            $(".kind_show").slideUp();
            $(".kind_show").eq($("input[name='kind']").index(this)).slideDown();


            $(".kind_show").find("input[error]").each(function() {
                $(this).attr("error1", $(this).attr("error")).removeAttr("error");
            });

            $(".kind_show").eq($("input[name='kind']").index(this)).find("input[error1]").each(function() {
                $(this).attr("error", $(this).attr("error1")).removeAttr("error1");
            });
        });
        //Finish Basket Submit
        $(document.body).on('click', ".finish_total_price", function() {
            $("html, body").animate({scrollTop: 0}, 600);
        });
        //bank checked
        $(document.body).on('change', "input[name='kind']", function() {
            elmval = $(this).val();
            if(elmval != '2'){
                $('input[name="bank"]').prop('checked', false);
            }else{
                $('input[name="bank"]').prop('checked', true);
            }
        });
    }
});
//City & Ostan For User
$(document).ready(function() {
    if ($('.cart').length) {
        var U_Ostan_Id = $('#user_ostan').attr('data-ostan');
        var U_City_Id = $('#user_cityid').attr('data-city');
        //console.log(U_Ostan_Id);
        //console.log(U_City_Id);
        if (U_Ostan_Id != '') {
            $("select[name='ostan']").val(U_Ostan_Id).change(function() {
                //$('#enable_inplace').hide();
                elm = this;
                $.ajax({
                    type: 'post',
                    url: '' + site_url + 'ajax.php?city_ajax',
                    dataType: 'json',
                    data: {'ostan': $(this).val()},
                    success: function(data) {
                        html = '';
                        for (x in data.id) {
                            html += '<option value="' + data.id[x] + '">' + data.title[x] + '</option>';
                            //if (data.id[x] == "296") {
                            //    $('#enable_inplace').show();
                            //}
                        }
                        $("select[name='cityid']").html('<option value="">لطفا شهر را انتخاب کنيد</option>' + html).val(U_City_Id).prev().html($("select[name='cityid'] option:selected").html());
                    }
                });
                //return false;
            }).eq(0).trigger("change");
        } else {
            $(document.body).on('change', "select[name='ostan']", function() {
                //$('#enable_inplace').hide();
                elm = this;
                $.ajax({
                    type: 'post',
                    url: '' + site_url + 'ajax.php?city_ajax',
                    dataType: 'json',
                    data: {'ostan': $(elm).val()},
                    success: function(data) {
                        if (data == null)
                            return false;
                        html = '';
                        for (x in data.id) {
                            html += '<option value="' + data.id[x] + '">' + data.title[x] + '</option>';
                            //if (data.id[x] == "296") {
                            //    $('#enable_inplace').show();
                            //}
                        }
                        $("select[name='cityid']").html('<option value="">لطفا شهر را انتخاب کنيد</option>' + html);
                    }
                });
                //return false;
            });
        }
//        $('#enable_inplace').hide();
//        var os = U_Ostan_Id;
//        var ci = U_City_Id;
//        if (os == '7' && ci == '296') {
//            $('#enable_inplace').show();
//        }
//
//        $(document.body).on('change', ".cityid_new", function() {
//            elm = this;
//            if ($(this).val() == "296") {
//                $('#enable_inplace').show();
//            } else {
//                $('#enable_inplace').hide();
//            }
//        });
    }
});

//getOrder
function ref_basket() {
    $.ajax({
        type: "get",
        url: "" + site_lang + "/order.html&ajax",
        cache: false,
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.responseText);
            alert(thrownError);
        },
        success: function(t) {
            $("#my_basket_inner").html(t);
            run_order()
            code();
            event();
        }
    });
}


//Success_Get
function run_order() {
    //$("input[type=checkbox]").uniform();
    //$("input[type=radio]").uniform();
    //$("select").uniform();
//    $(function() {
//        $("select").each(function() {
//            $(this).val($(this).attr("myvalue"));
//            //$.uniform.update($(this));
//        });
//    });
    //$('#enable_inplace').hide();
    var U_Ostan_Id = $('#user_ostan').attr('data-ostan');
    var U_City_Id = $('#user_cityid').attr('data-city');
    if (U_Ostan_Id != '') {
        $(function() {
            $("select[name='ostan']").val(U_Ostan_Id).change(function() {
                elm = this;
                $.ajax({
                    type: 'post',
                    cache: false,
                    url: '' + site_url + 'ajax.php?city_ajax',
                    dataType: 'json',
                    data: {'ostan': $(this).val()},
                    success: function(data) {
                        html = '';
                        for (x in data.id) {
                            html += '<option value="' + data.id[x] + '">' + data.title[x] + '</option>';
                            //if (data.id[x] == "296") {
                            //    $('#enable_inplace').show();
                           // }
                        }
                        $("select[name='cityid']").html('<option value="">لطفا شهر را انتخاب کنيد</option>' + html).val(U_City_Id).prev().html($("select[name='cityid'] option:selected").html());
                    }
                });
                //return false;
            }).eq(0).trigger("change");
        });
    }
}



function event() {
    var sum = 0;
//    $('.totalgiftval').each(function() {
//        if ($(this).val() != '') {
//            sum += Number($(this).val());
//            $("span#end_totalgift").html(num2fa(sum) + ' تومان ');
//            $("#end_totalgift2").val(sum);
//        }
//    });
    sum += parseInt($("input#inner").attr('attr_price'));
    if ($("#end_totalpost2").val() != '') {
        sum += parseInt($("#end_totalpost2").val());
    }
    
    if ($("#code2").val() != '') {
       var cd = parseInt($("#code2").val());
       if(sum > cd){
         $("span#end_totalfinal").html(num2fa(sum - cd) + ' تومان ');  
       }else{
         $("span#end_totalfinal").html(num2fa(sum) + ' تومان ');  
       } 
    }else{
        $("span#end_totalfinal").html(num2fa(sum) + ' تومان ');
    }

    
}


function code() {
    var codeval = $(":input[name='code']").val();
    if (codeval != '') {
        $.ajax({
            type: "post",
            cache: false,
            url: "" + site_url + "ajax.php?prize_ajax",
            dataType: "json",
            data: "&code=" + $(":input[name='code']").val(),
            success: function(t) {

                if (typeof t.kind != 'undefined') {

                    if (t.kind == 1) {
                        p = 'تومان';
                    } else {
                        p = 'درصد';
                    }

                    if (t.type == 3) {
                        var total_pricee = parseInt($("input#inner").attr('attr_price'));
                        var total_min_price = parseInt(t.min_price);
                    } else if (t.type == 2) {
                        var total_pricee = parseInt(t.product_price);
                        var total_min_price = parseInt(t.min_price);
                    } else if (t.type == 1) {
                        var total_pricee = parseInt(t.product_price);
                        var total_min_price = parseInt(t.min_price);
                    } else {
                        var total_pricee = parseInt($("input#inner").attr('attr_price'));
                        var total_min_price = parseInt(t.min_price);
                    }

                    if (total_pricee > total_min_price) {
                        html22 = 'مبلغ کارت تخفیف : ' + t.kind_value + ' ' + p + ' <br />';
                        $("input[name='code']").attr('readonly', 'readonly');
                        $("#code2").val(t.kind_value);
                        event();
                    } else {
                        html22 = 'حداقل خرید شما باید ' + total_min_price + ' تومان باشد ';
                        $("#code2").val('');
                        event();
                    }

                } else {
                    html22 = 'کد نامعتبر میباشد.';
                }

                $("#result").fadeIn(1000).html(html22);
                var input = $("input[name='code']").val();
                if (input === '') {
                    $("#result").fadeOut("1000", function() {
                    });
                }
            }
        });
    }
}
