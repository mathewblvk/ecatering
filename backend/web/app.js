$(function () {
    'use strict';
    $('#upload-product-image').change(function (e) {
        $(e.target).closest('form').trigger('submit');
    });

});

