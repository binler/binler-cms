"use strict";

$(document).ready(function(e) {
    // submit form
    $("body").on("click", ".submit_form", function(e) {
        e.preventDefault();
        var btn = this,
            form = $(btn).closest('form');
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

});
