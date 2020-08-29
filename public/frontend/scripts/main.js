'use strict'
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function () {
    $('#course_id').change(function () {
        var url = $('#url').val();
        var course_id = $(this).val();

        // ajax setup

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // ajax setup request start

        $.ajax({
            type: 'GET',
            url: url,
            data: {
                course_id: course_id
            },
            success: function (data) {
                $("#course_price").val(data.price);
            }
        });

        // ajax setup request end

    });
});