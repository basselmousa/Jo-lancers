<div class="modal fade" id="rate-provider-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Add Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('user.rate.create',$post->bid->provider->id) }}" method="post"
                          id="rate-provider-form-{{$post->id}}" class="forms-sample" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <h4 class="card-title">Rate</h4>
                            <select id="example-css" name="rate" autocomplete="off">
                                <option value="1" {{ old("rate") == "1" ? "selected" : '' }}>1</option>
                                <option value="2" {{ old("rate") == "2" ? "selected" : '' }}>2</option>
                                <option value="3" {{ old("rate") == "3" ? "selected" : '' }}>3</option>
                                <option value="4" {{ old("rate") == "4" ? "selected" : '' }}>4</option>
                                <option value="5" {{ old("rate") == "5" ? "selected" : '' }}>5</option>
                            </select>
                            @error('rate')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Description</label>
                            <input name="comment" type="text"
                                   class="form-control" value="{{old("comment")}}"
                                   id="exampleInputUsername1" placeholder="comment">
                            @error('comment')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"
                        onclick="event.preventDefault(); document.getElementById('rate-provider-form-{{$post->id}}').submit(); "
                >Submit</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
