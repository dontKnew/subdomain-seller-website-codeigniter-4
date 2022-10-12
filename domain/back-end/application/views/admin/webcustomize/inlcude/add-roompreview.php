<div id="roomPreviewModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close-roomPreview" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="padding:10px"> Add Room Preview  </h4>
      </div>
      <div class="modal-body bg-warning" style="padding:10px;">
        <form method="post">
            <div class="form-group">
                <label for=""> Portion Name </label>
                <input type="text" class="form-control" id="portionname"  value="Bedroom"  placeholder="enter name of room preview"> 
            </div>
            </div>
            <div class="form-group">
                <label for=""> Choose Photo </label>
                <input type="file" class="form-control"  id="roomPreviewnPhoto"  placeholder="service description"> 
            </div>
            <div class="add-roomPreview-errors">
                  <div class="alert alert-danger">
                      <span> All Fields are required </span>
                </div> 
            </div>
        </form>
      </div>
      <div class="modal-footer d-flex align-item-center justify-content-center">
        <button type="button" id="addRoomPreviewOverview" class="btn btn-warning">Submit</button>
      </div>
    </div>

  </div>
</div>
