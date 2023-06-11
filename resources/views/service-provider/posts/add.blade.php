<div class="modal fade" id="add-admin-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Create Bid</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('provider.post.create',$post->id) }}" method="post" id="create-bid-form-{{$post->id}}" class="forms-sample">
                        @csrf


                        <div class="form-group">
                            <label for="exampleInputUsername1">Bid</label>
                            <input name="bid" type="text" class="form-control" value="{{ old("bid") }}" id="exampleInputUsername1" placeholder="Bid">
                            @error('bid')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Proposal</label>
                            <input name="proposal" type="text" class="form-control" value="{{ old("proposal") }}" id="exampleInputUsername1" placeholder="Proposal">
                            @error('proposal')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Deliver In Days</label>
                            <input name="deliver_in_days" value="{{ old("deliver_in_days") }}" type="text" class="form-control" id="exampleInputUsername1" placeholder="Deliver In Days">
                            @error('deliver_in_days')
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
                        onclick="event.preventDefault(); document.getElementById('create-bid-form-{{$post->id}}').submit(); "
                >Submit</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
