"use strict"
$(function() {
    $('#modal-btn').click(function () {
        $('#modal').modal('show').find('#modal-content').load($(this).attr('value'));
    });
});


$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
