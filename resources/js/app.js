require('./bootstrap');

$('#fullName').change(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    jQuery.ajax({
        url: 'checkSlug',
        method: 'GET',
        data: {
            fullName: $(this).val(),
            userId: $(this).data('userid')
        },
        dataType: 'JSON',
        success: function (data) {
            $('#slug').val(data.slug);
        }
    })
});
