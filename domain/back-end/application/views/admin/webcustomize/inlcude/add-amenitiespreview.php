<div id="amenitiesPreviewModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close-amenitiesPreview" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="padding:10px"> Add Amenities Preview </h4>
      </div>
      <div class="modal-body bg-warning" style="padding:10px;">
        <form method="post">
            <div class="form-group">
                <label for=""> Amenities Name </label>
                <input type="text" class="form-control" id="portionname"  value="Basket Ball"  placeholder="Amenities name"> 
            </div>
            </div>
            <div class="form-group">
                <label for=""> Choose Photo </label>
                <input type="file" class="form-control"  id="amenitiesPreviewnPhoto" > 
            </div>
            <div class="add-amenitiesPreview-errors">
                  <div class="alert alert-danger">
                      <span> All Fields are required </span>
                </div> 
            </div>
        </form>
      </div>
      <div class="modal-footer d-flex align-item-center justify-content-center">
        <button type="button" id="addamenitiesPreviewOverview" class="btn btn-info">Submit</button>
      </div>
    </div>

  </div>
</div>
