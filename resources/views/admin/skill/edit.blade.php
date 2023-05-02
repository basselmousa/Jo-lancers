<div class="modal fade" id="edit-admin-{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Add Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('admin.skills.update',$admin) }}" method="post" id="edit-admin-form-{{$admin->id}}" class="forms-sample">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="exampleInputUsername1">Skill Name</label>
                            <input name="name" value="{{$admin->name}}" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Skill Code</label>
                            <input name="alt_code" type="text" value="{{$admin->alt_code}}"
                                   class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select class="js-example-basic-single " name="category_id" style="width: 400px">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $admin->category_id  ? 'selected' : ''  }}>{{ $category->name }}</option>

                                @endforeach

                            </select>
                            {{--                            <input name="alt_code" type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">--}}
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"
                        onclick="event.preventDefault(); document.getElementById('edit-admin-form-{{$admin->id}}').submit(); "
                >Submit</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
