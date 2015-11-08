(function(e) {
    e.fn.ham3dform = function(t) {
        var n = {
            start_load: function() {
            },
            elements_ok: function() {
            },
            elements_no: function() {
            },
            response: function() {
            },
            check: function() {
            },
            start_form_validate: function() {
            },
            send: true,
            all_elements_ok: function() {
            },
            bind: "submit"
        };
        var r = e.extend(n, t);
        return this.each(function() {
            submited = "";
            e(this).find("input[type='submit']").unbind("click").bind("click", function() {
                submited = "&" + e(this).attr("name") + "=ok";
            });
            e(this).unbind(r.bind).bind(r.bind, function() {

                pat_arr = new Array;
                pat_arr["email"] = /^[a-zA-Z0-9-._]+@[a-zA-Z0-9-._]+\.[a-zA-Z0-9-._]{2,4}$/i;
                pat_arr["url"] = /http\:\/\/[a-zA-Z0-9-._]+\.[a-zA-Z]{2,4}/i;
                pat_arr["user"] = /^[a-zA-Z0-9-._]{2,20}$/;
                pat_arr["pass"] = /^[a-zA-Z0-9-._]{5,20}$/;
                pat_arr["fish"] = /^[\u0600-\u06FF 0-9-._]{1,20}$/;
                pat_arr["cap"] = /^[0-9-]{5}$/;
                pat_arr["zip"] = /^[0-9-]{10}$/;
                pat_arr["mobile"] = /^09[0-9]{9}$/;
                pat_arr["tell"] = /^(0[0-9]{3})?[0-9]{7,8}$/;
                form = this;
                error = "";
                e(this).find("input, select, textarea").not("[type=submit]").each(function() {
                    r.start_form_validate(form, this);
                    val = e(this).val();
                    if (typeof e(this).attr("error") != "undefined" && e(this).attr("error") != "") {
                        if (val == "") {
                            error = e(this).attr("error")
                        }
                    }

                    if (typeof e(this).attr("check") != "undefined" && e(this).attr("check") != "" && e(this).val() != "") {
                        element = this;
                        for (key in pat_arr) {
                            value = pat_arr[key];
                            if (e(element).attr("check") == key) {
                                if (!val.match(new RegExp(value))) {
                                    error = r.check(element, key, pat_arr)
                                }
                            }
                        }
                    }
                    if (error != "") {
                        r.elements_no(this, error);
                        $(".submitBtn").attr("disabled",false);
                        return false
                    } else {
                        r.elements_ok(this, error)
                    }
                });
				
                if (error != "") {
                    $(".submitBtn").attr("disabled",false);
                    return false
                }

                r.all_elements_ok();
				
                if (r.send) {
                    data = e(this).serialize();
					
                    ajax_method = e(this).attr("ajax_method");
					
                    if (typeof e(this).attr("ajax_method") == "undefined") {
                        ajax_method = "post"
                    }
                    action = e(this).attr("action");
					
                    e.ajax({
                        type: ajax_method,
                        url: action,
                        data: data + submited,
                        beforeSend: function(e) {
                            r.start_load(form)
                        },
                        success: function(e) {
                            r.response(form, e)
                        }
                    });
                    return false
                }
            })
        })
    }
})(jQuery)