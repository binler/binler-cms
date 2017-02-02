"use strict";

$(window).on("load", function() {
    // Loader
    $("#loading-status").delay(300).fadeOut();
    $("#loader").delay(700).fadeOut("slow");
});

$(document).ready(function(e) {
    // submit form
    $("body").on("click", ".submit_form", function(e) {
        e.preventDefault();
        var btn = $(this),
            form = btn.closest('form'),
            token = $('[name="b_csrf_token"]');

        token.val(fuel_csrf_token());
        // save tinymce editor
        tinymce.triggerSave();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            dataType: 'JSON',
            data: form.serialize(),
            success: function(result) {
                if (result.status) {
                    $(location).attr("href", result.back);
                } else {
                    show_error(result.error);
                }
            }
        });
    });

    // button select all.
    $("body").on("click", ".btn-select-all", function(e) {
        e.preventDefault();
        var btn = $(this),
            table = btn.closest('.card').find('.datatable'),
            btn_title = btn.find('span.title'),
            page_select = table.find('.page_id');
        btn.toggleClass('btn-primary btn-warning');
        // toggle check all checkbox
        for (var i = 0; i < page_select.length; i++) {
            if (btn.hasClass('btn-warning')) {
                $(page_select[i]).prop('checked', true);
            } else {
                $(page_select[i]).prop('checked', false);
            }
        }
        // toggle text button
        $(btn_title).text(function(i, text) {
            return text === "Chọn tất cả" ? "Hủy chọn tất cả" : "Chọn tất cả";
        });
    });

    // delete record
    $("body").on("click", ".btn-delete", function(e) {
        e.preventDefault();
        var btn = $(this),
            form = btn.closest('.card').find('form'),
            page_select = $(form).find('input[class="page_id"]');
        var confirm = check_select_record(page_select);
        if (confirm) {
            delete_record(form);
        }

    });

    /**
     * Delete record
     * @param  {[type]} form form data and form action
     * @return {[type]}      [description]
     */
    function delete_record(form) {
        // confirm delete page
        bootbox.confirm({
            title: "Thông báo",
            message: "Bạn có chắc chắn muốn xóa không ?",
            buttons: {
                confirm: {
                    label: '<i class="fa fa-check"></i> Xóa'
                },
                cancel: {
                    label: '<i class="fa fa-times"></i> Hủy'
                }
            },
            callback: function(result) {
                if (result) {
                    $.ajax({
                        type: 'POST',
                        url: form.attr('action'),
                        dataType: 'JSON',
                        data: form.serialize(),
                        success: function(res) {
                            if (res.status) {
                                location.reload();
                            }
                        }
                    });
                }
            }
        });
    }

    /**
     * Check selected record
     * @param  {[type]} page_select array input checkbox
     * @return Bool
     */
    function check_select_record(page_select) {
        for (var i = 0; i < page_select.length; i++) {
            if ($(page_select[i]).is(':checked')) {
                return true;
                break;
            }
        }
        return false;
    }

    function show_error(errors) {
        var form = $('body').find('form.form-curd');
        for (var key in errors) {
            var el = form.find('[name="' + key + '"]').parent();
            if (!el.hasClass('has-error')) {
                el.addClass('has-error');
                el.append('<span class="help-block">' + errors[key] + '</span>');
            }
        }
    }

});
