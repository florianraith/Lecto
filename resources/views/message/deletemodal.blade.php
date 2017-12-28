<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-top-left-radius: .6rem; border-top-right-radius: .6rem;">
            <form action="{{ route('deleteMessage') }}" method="post">
                {{ csrf_field() }}
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-light" id="exampleModalLabel">@lang('profile.delete_post')</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>@lang('profile.sure_delete_post')</strong></p>
                    <p id="delete-model-message"></p>
                    <input type="hidden" value="" name="message_id" id="delete-model-id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('profile.close_modal')</button>
                    <input type="submit" class="btn btn-dark" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>