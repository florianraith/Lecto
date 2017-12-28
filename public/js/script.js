$('.delete-post').click(function(e) {
    var postid = parseInt(e.currentTarget.dataset.postid);
    $('#delete-model-message').html($('#post-message-' + postid).html());
    $('#delete-model-id').val(postid);
});