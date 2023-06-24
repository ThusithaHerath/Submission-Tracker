<!-- Modal -->
<div class="modal fade text-black" id="story"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">New Story</h5>
        </div>
        <form action="">
          @csrf
        <div class="modal-body text-black">
                <div class="form-group">
                    <label class="mb-2" >Story Name:</label>
                    <input type="text" class="form-control" placeholder="Story name" required>
                </div>
                <div class="row mt-2">
                    <div class="col">
                      <label class="mb-2" >Status:</label>
                      <select class="form-select" aria-label="Default select example" required>
                        <option selected>Select status</option>
                        <option value="1">Complete</option>
                        <option value="2">In Progress</option>
                        <option value="3">On Hold</option>
                      </select>
                    </div>
                    <div class="col">
                      <label class="mb-2" >Type:</label>
                      <select class="form-select" aria-label="Default select example" required>
                        <option selected>Select type</option>
                        <option value="1">Article</option>
                        <option value="2">Book</option>
                        <option value="3">Poem</option>
                        <option value="3">PoemRhyme</option>
                        <option value="3">ShortStory</option>
                        <option value="3">Song</option>
                      </select>
                    </div>
                    <div class="col">
                      <label class="mb-2" >Lines:</label>
                      <input type="number" class="form-control" placeholder="Lines" required>
                    </div>
                    <div class="col">
                      <label class="mb-2" >Words:</label>
                      <input type="number" class="form-control" placeholder="Words" required>
                    </div>
                </div>
                <div class="form-group">
                  <label class="mb-2" >Summary</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
