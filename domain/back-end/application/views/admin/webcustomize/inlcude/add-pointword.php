<div id="pointwordModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close-pointword" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="padding:10px"> Add Point Word </h4>
      </div>
      <div class="modal-body bg-warning" style="padding:10px;">
        <form method="post">
            <div class="form-group">
                <label for=""> Name </label>
                <input type="text" class="form-control" value="We are best" id="pointwordname" placeholder="Point word name"> 
            </div>
            </div>
            <div class="add-pointword-errors">
                  <div class="alert alert-danger">
                      <span> All Fields are required </span>
                    </div> 
              </div>
        </form>
      </div>
      <div class="modal-footer d-flex align-item-center justify-content-center">
        <button type="button" id="addpointword" class="btn btn-danger">Submit</button>
      </div>
    </div>

  </div>
</div>
