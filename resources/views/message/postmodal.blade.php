<div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-top-left-radius: .6rem; border-top-right-radius: .6rem;">
            <form action="{{ route('postMessage') }}" method="post">
                {{ csrf_field() }}
                <div class="modal-header bg-dark" id="post-modal-header" data-suffix="dark">
                    <h5 class="modal-title text-light" id="exampleModalLabel">Post a message</h5>
                    <button id="post-close-button" type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="select-color">Color:</label>
                        <select class="form-control" id="select-color" name="color_id">
                            @foreach(\App\Lecto\MessageColor::getValues() as $color)
                                <option value="{{ $color->getId() }}" {{ ($color->getId() == 7 ? 'selected="selected"' : '') }} data-suffix="{{ $color->getBSuffix() }}">{{$color->getName()}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" name="message" id="message" placeholder="Your message..." maxlength="255" rows="5"  style="resize: none;" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" id="post-button" class="btn btn-dark" value="Post">
                </div>
            </form>
        </div>
    </div>
</div>