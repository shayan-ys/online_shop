function do_run() {

    $(document.body).on('click', ".likeuserclick", function() {
        $(this).attr('disabled', 'disabled');
        module = 'product';
        id = $(this).attr("attr_id");
        kind = 3;
        $(this).find("span:eq(0)").addScore({
            data: {
                id: id,
                kind: kind,
                module: module,
                add: "ok"
            },
            show_result: function(data, elm) {
                if (data == null) {
                    $('body').ham3dModalbox({html: '<br /><a href="javascript:void(0)" onclick="$(\'javascript:void(0)modalbox-wrap\').fadeOut(); return false;"><div class="add_popup"><div class="add_popup_content"><span>قبلاً رای شما ثبت شده است!</span></div></div></a>', auto: 'ok'}).trigger('click');
                    $('#modalbox-wrap').fadeOut(5000);
                } else {
                    $('body').ham3dModalbox({html: '<br /><a href="javascript:void(0)" onclick="$(\'javascript:void(0)modalbox-wrap\').fadeOut(); return false;"><div class="add_popup"><div class="add_popup_content"><span>رای شما با موفقیت ثبت شد .</span></div></div></a>', auto: 'ok'}).trigger('click');
                    $('#modalbox-wrap').fadeOut(5000);
                    $(elm).html(data.score);
                }
            }
        });
        return false;
    });
    
    $(function() {
        $.fn.raty.defaults.path = template_dir + 'img';
        $('.score-callback').raty({
            readOnly   : true,
            score: function() {
              return $(this).attr('data-score');
            }
        });
    });



    $(function() {

        $("form[ajax_method='get']").unbind("submit").on("submit", function() {
            data = $(this).serialize();
            window.location.href = ($(this).attr("action") + "&" + data);
            return false
        });

        $("form[ajax_method!='get']").not(".not_ajax").ham3dform({
            start_form_validate: function(e, t) {
                $(t).each(function() {
                    if ($(this).val() == $(this).attr("error") || $(this).val() == $(this).attr("check")) {
                        $(t).val("")
                    }
                })
            },
            start_load: function(e) {
                $(e).css("position", "relative");
                show_load();
                //if (!$.browser.msie) {
//                var t = new Sonic({
//                    width: 10,
//                    height: 10,
//                    padding: 15,
//                    strokeColor: "#000",
//                    pointDistance: .01,
//                    stepsPerFrame: 3,
//                    trailLength: .7,
//                    step: "fader",
//                    setup: function() {
//                        this._.lineWidth = 5
//                    },
//                    path: [
//                        ["arc", 10, 10, 10, 0, 360]
//                    ]
//                });
//                t.play();
//                if ($(e).find(".loader").length == 0) {
//                    $('<div class="loader"><span class="cloader"></span></div>').css({
//                        position: "absolute",
//                        right: "40%",
//                        top: "40%"
//                    }).appendTo(e);
//                    $("form").find(".cloader").append(t.canvas)
//                }
                    //pos1 = $(e).position();
                    //$("html, body").animate({
                    //    scrollTop: pos1.top - 60
                    //}, 600)
//                }
            },
            elements_no: function(e, t) {
//                if (!t)
//                    t = "";
                $(".alert").removeClass("alert");

                if ($(e).parents(".selector:first").length > 0) {
                    $(".selector").removeClass("alert1");
                    $(e).parents(".selector:first").addClass("alert1");
                }

                $(e).focus().addClass("alert").val(t).bind("keydown click", function() {
                    if ($(this).val() == t) {
                        $(this).val("").unbind("keydown").unbind("click")
                    }
                })
            },
            elements_ok: function(e) {
            },
            response: function(e, t) {
                now_form = e;
                if ($(e).prev().hasClass("error") || $(e).prev().hasClass("success")) {
                    $(e).prev().removeClass("success").addClass("error").html(t)
                } else {
                    $('<div class="error">' + t + "</div>").insertBefore(e)
                }
                $(".loader").fadeOut(function() {
                    $(this).remove()
                });
                hide_load();
                if (typeof $(e).attr("noscroll") == "undefined") {
                    pos = $(e).position();
                    $("html, body").animate({
                        scrollTop: pos.top - 60
                    }, 600)
                }
            },
            check: function(e, t, n) {
                return $(e).attr("check_error")
            }
        });

        /*$("test").each(function () {
         $(this).unbind("click").click(function () {
         load_page($(this).attr("href"));
         return false
         })
         });*/

        //check_hash();

        /*setInterval(function () {
         check_hash()
         }, 500)*/

    });

    $(function() {
        $("select").each(function() {
            $(this).val($(this).attr("myvalue"));
        });
    });
}
do_run();