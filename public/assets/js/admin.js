"use strict";

$(document).ready(function(e) {

    // submit form
    $("body").on("click", ".submit_form", function(e) {
        e.preventDefault();
        var btn = $(this),
            form = btn.closest('form');
        // save tinymce editor
        tinymce.triggerSave();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            dataType: 'JSON',
            data: form.serialize(),
            success: function(result) {
                console.log(result);
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
        if(confirm){
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
                // if (result) {
                //     $.ajax({
                //         type: 'POST',
                //         url: form.attr('action'),
                //         dataType: 'JSON',
                //         data: form.serialize(),
                //         success: function(re) {
                //             console.log(re);
                //         }
                //     });
                // }
            }
        });
    }

    /**
     * Check selected record
     * @param  {[type]} page_select array input checkbox
     * @return Bool
     */
    function check_select_record(page_select)
    {
        for (var i = 0; i < page_select.length; i++) {
            if ($(page_select[i]).is(':checked')){
                return true;
                break;
            }
        }
        return false;
    }

});
