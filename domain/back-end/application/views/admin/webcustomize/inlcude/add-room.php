<div id="roomModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close-room" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="padding:10px"> Add Room Overview </h4>
      </div>
      <div class="modal-body bg-warning" style="padding:10px;">
        <form method="post">
            <div class="form-group">
                <label for=""> Service Name </label>
                <input type="text" class="form-control" id="servicename"  value="Internet Free"  placeholder="room overview features title"> 
            </div>
            </div>
            <div class="form-group">
                <label for=""> Service Description </label>
                <input type="text" class="form-control" value="Yes" id="roomname"  value="wifi" placeholder="service description"> 
            </div>
            <div class="add-room-errors">
                  <div class="alert alert-danger">
                      <span> All Fields are required </span>
                    </div> 
              </div>
        </form>
      </div>
      <div class="modal-footer d-flex align-item-center justify-content-center">
        <button type="button" id="addRoomOverview" class="btn btn-success">Submit</button>
      </div>
    </div>

  </div>
</div>
