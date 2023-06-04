<div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('admin.categories.add') }}" method="post" id="add-admin-form" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Category Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputUsername1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Category Description</label>
                            <textarea name="desc"  class="form-control" id="exampleInputUsername1" placeholder="Description"></textarea>
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
