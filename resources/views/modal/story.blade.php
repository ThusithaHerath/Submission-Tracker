<!-- Modal -->
<div class="modal fade text-black" id="story"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">New Story</h5>
        </div>
        <form  action="{{url('http://127.0.0.1:8000/api/story/store')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="modal-body text-black">
                <div class="form-group">
                    <label class="mb-2" >Story Name:</label>
                    <input type="text" name="story" class="form-control" placeholder="Story name" required>
                </div>
                <div class="row mt-2">
                    <div class="col">
                      <label class="mb-2" >Status:</label>
                      <select class="form-select" name="status" aria-label="Default select example"  required>
                        <option selected>Select status</option>
                        @foreach ($story_status as $status)
                        <option value="{{$status->StoryCompletionStatus_ID}}">{{$status->StoryCompletionStatus_Name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col">
                      <label class="mb-2" >Type:</label>
                      <select class="form-select" name="type" aria-label="Default select example" required>
                        <option selected>Select type</option>
                        @foreach ($story_type as $type)
                        <option value="{{$type->StoryType_ID}}">{{$type->StoryType_Name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col">
                      <label class="mb-2" >Lines:</label>
                      <input type="number" name="lines" class="form-control" placeholder="Lines" required>
                    </div>
                    <div class="col">
                      <label class="mb-2" >Words:</label>
                      <input type="number" name="words" class="form-control" placeholder="Words" required>
                    </div>
                </div>
                <div class="form-group">
                  <label class="mb-2" >Summary</label>
                  <textarea class="form-control" name="summary" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      </div>
    </div>
  </div>
