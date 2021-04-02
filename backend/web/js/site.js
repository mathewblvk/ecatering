"use strict"
$(function() {
    $('#modal-btn').click(function () {
        $('#modal').modal('show').find('#modal-content').load($(this).attr('value'));
    });
});