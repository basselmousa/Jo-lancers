<div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
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
                    <form action="{{ route('user.post.create') }}" method="post" id="add-admin-form" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Title</label>
                            <input name="title" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Description</label>
                            <input name="description" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Min Bud</label>
                            <input name="min_bud" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            @error('min_bud')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Max Bud</label>
                            <input name="max_bud" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            @error('max_bud')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Currency</label>
                            <select name="currency" class="js-example-basic-single " style="width: 405px">
                               @foreach($currencies as $currency)
                                    <option value="{{ $currency->id }}">{{ $currency->cur_name }}</option>
                               @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Skills</label>
                            <select name="skills[]" class="js-example-basic-multiple" multiple="multiple" style="width: 405px">
                                @foreach($skills as $skill)
                                    <option value="{{$skill->id}}">{{ $skill->name }}</option>
                                @endforeach
                            </select>
                            @error('skills')
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
                        onclick="event.preventDefault(); document.getElementById('add-admin-form').submit(); "
                >Submit</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
