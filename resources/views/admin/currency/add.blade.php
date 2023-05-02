<div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Add Currency</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('admin.currencies.add') }}" method="post" id="add-admin-form" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Currency Name</label>
                            <input name="cur_name" type="text" class="form-control" id="exampleInputUsername1" placeholder="Currency Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ISO Code</label>
                            <input name="iso_code" type="text" class="form-control" id="exampleInputEmail1" placeholder="ISO Code">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sign</label>
                            <input name="sign" type="text" class="form-control" id="exampleInputPassword1" placeholder="Sign">
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
