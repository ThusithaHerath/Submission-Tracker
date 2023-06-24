<!-- Modal -->
<div class="modal fade bd-example-modal-lg text-black" id="publisher"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">New Publisher</h5>
        </div>
        <form action="">
          @csrf
        <div class="modal-body text-black">
            <div class="row mt-2">
                <div class="col">
                    <label class="mb-2" >Publisher:</label>
                    <input type="text" class="form-control" placeholder="Publisher Name" required>
                  </div>
                <div class="col">
                  <label class="mb-2" >Type:</label>
                  <select class="form-select" aria-label="Default select example" required>
                    <option selected>Select type</option>
                    <option value="1">Book</option>
                    <option value="2">Periodical</option>
                    <option value="2">Contest</option>
                  </select>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <label class="mb-2" >Simultaneous Submission OK *:</label>
                    <select class="form-select" aria-label="Default select example" required>
                    <option selected>Unknown</option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                    </select>
                </div>
                <div class="col">
                    <label class="mb-2" >Rank:</label>
                    <input type="text" class="form-control" placeholder="Lines" required>
                </div>
                <div class="col">
                    <label class="mb-2" >Deadline:</label>
                    <input type="date" class="form-control" placeholder="Words" required>
                </div>
                <div class="col">
                    <label class="mb-2" >Contact:</label>
                    <input type="number" class="form-control" placeholder="Words" required>
                </div>
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
