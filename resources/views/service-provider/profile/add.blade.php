<div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Add Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('provider.profile.addSkill') }}" method="post" id="add-admin-form" class="forms-sample">
                        @csrf
                        <div class="form-group ">

                            <select class="form-control" name="skill">
                                <option value="" selected disabled>Select Skill</option>

                                @foreach($serviceTypes as $type)
                                    <option value="{{ $type->id }}"
                                        {{ old("skill") == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                @endforeach

                            </select>
                            @error('skill')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputUsername1">Percentage</label>
                            <input name="percentage" value="{{ old("percentage") }}"
                                   type="text" class="form-control" id="exampleInputUsername1" placeholder="Percentage">
                            @error('percentage')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputUsername1">Experience Year</label>
                            <input name="experience_year" value="{{ old("experience_year") }}"
                                   type="text" class="form-control" id="exampleInputUsername1" placeholder="Experience Years">
                            @error('experience_year')
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
