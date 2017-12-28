$('.delete-post').click(function(e) {
    var postid = parseInt(e.currentTarget.dataset.postid);
    $('#delete-model-message').html($('#post-message-' + postid).html());
    $('#delete-model-id').val(postid);
});

$('#select-color').change(function() {
    var option = $('#select-color').find(':selected')[0];
    var suffix = option.dataset.suffix;

    $header = $("#post-modal-header");
    var currentSuffix = $header[0].dataset.suffix;
    $header.removeClass('bg-' + currentSuffix);
    $header.addClass('bg-' + suffix);

    $button = $('#post-button');
    $button.removeClass('btn-' + currentSuffix);
    $button.addClass('btn-' + suffix);

    $close = $('#post-close-button');

    if(currentSuffix === 'light' || currentSuffix === 'warning') {
        $header.find('h5').removeClass('text-dark');
        $button.removeClass('text-dark');
        $close.removeClass('text-dark')
    }
    if(suffix === 'light' || suffix === 'warning') {
        $header.find('h5').addClass('text-dark');
        $button.addClass('text-dark');
        $close.addClass('text-dark');
    }

    $header[0].dataset.suffix = suffix;
});

$('div.alert').not('.alert-important').delay(3000).fadeOut(350);