<div class="modal fade" id="edit-admin-{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Edit Currency</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('admin.currencies.update',$admin) }}" method="post" id="edit-admin-form-{{$admin->id}}" class="forms-sample">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="exampleInputUsername1">Currency Name</label>
                            <input name="full_name" value="{{$admin->cur_name}}" type="text" class="form-control" id="exampleInputUsername1" placeholder="Currency Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ISO Code</label>
                            <input name="iso_code" type="text" value="{{$admin->iso_code}}" class="form-control" id="exampleInputEmail1" placeholder="ISO Code">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sign</label>
                            <input name="sign" type="text" value="{{$admin->sign}}" class="form-control" id="exampleInputPassword1" placeholder="Sign">
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
