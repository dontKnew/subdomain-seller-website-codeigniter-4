<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close-facility" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="padding:10px"> Add Facility </h4>
      </div>
      <div class="modal-body bg-warning" style="padding:10px;">
        <form method="post">
            <div class="form-group">
                <label for=""> Name </label>
                <input type="text" class="form-control" id="facilityname"  value="wifi" placeholder="Facility Service Name"> 
            </div>
            <div class="form-group">
                <div class="d-flex align-item-center">
                    <label for=""> Font Awesome Icon </label>
                    <a href="#" style="margin-top:-5px;">
                        <span class="glyphicon glyphicon-info-sign text-primary"></span>
                    </a>    
                </div>
                <input type="text" class="form-control" id="facilityicon"  value="<i class='fa fa-wifi' aria-hidden='true'></i>" placeholder="FontAwesome Icon"> 
            </div>
            <div class="add-facility-errors">
                  <div class="alert alert-danger">
                      <span> All Fields are required </span>
                    </div> 
              </div>
        </form>
      </div>
      <div class="modal-footer d-flex align-item-center justify-content-center">
        <button type="button" id="addFacility" class="btn btn-danger">Submit</button>
      </div>
    </div>

  </div>
</div>
