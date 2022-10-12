<div role="tabpanel" class="tab-pane" id="accommodation">

    <form class="" method="POST">
        <div class="form-group">
            <label for="">Webpage title</label>
            <input type="text" class="form-control" name="webpagetitle" value="Resorts-Accommodation" placeholder="web title" required>
        </div>
        <div class="form-group">
            <label for="">Accomdation Photo title</label>
            <input type="text" class="form-control" name="phototitle" value="Accomodation" placeholder="Accommodation photo title" required>
        </div>
        <div class="form-group">
            <label for="">Accomdation Photo</label>
            <input type="file" class="form-control" name="accommdationphoto" required>
        </div>
        <div class="form-inline">
            <div class="form-group">
                <label for=""> Directory Link </label>
                <input type="text" name="directorylinkhome" class="form-control" value="Home" placeholder="menu title" required>
                <input type="text" name="directorylinkaccommdation" class="form-control" value="Accomdation" placeholder="menu title" required>
            </div>
        </div>
        <div class="form-group">
            <label for=""> Description title </label>
            <input type="text" class="form-control" name="description title" value="Accomdation and Tarrif" placeholder="description title" required>
        </div>
        <div class="form-group">
            <label for=""> Title comment </label>
            <input type="text" class="form-control" name="titlecomment" value="Pick a room that best suits hyour taste and budge " placeholder="title comment" required>
        </div>
        <div class="form-group">
            <label for=""> Description </label>
            <!-- <textarea class="form-control" name="webdescription-about" placeholder="website description" rows="5" required> -->
            <textarea class="form-control full-editor" name="webdescription" placeholder="website description" rows="5" required>
                Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a 'home away from home' as soon as you step into the stunning beauty of Jim Corbett National Park.
             </textarea>
        </div>
        <div class="form-group">
            <label for=""> Menu </label>
            <input type="text" class="form-control" name="accommodationmenu" value="Accommodation" placeholder="Accommodation Menu" required>
        </div>

        <label for="">
            <h3>Single Room Page</h3>
        </label>
        <div class="form-group">
            <label for="">Webpage title </label>
            <input type="text" class="form-control" name="webpagetitle" value="Resort | Accomdation" placeholder="webpage title" required>
        </div>
        <div class="form-group">
            <label for="">header title </label>
            <input type="text" class="form-control" name="headertitle" value="Single Room" placeholder="header title" required>
        </div>
        <div class="form-inline">
            <div class="form-group">
                <label for=""> Directory Link </label>
                <input type="text" name="directorylinkhome" class="form-control" value="Home" placeholder="menu title" required>
                <input type="text" name="directorylinksingleroom" class="form-control" value="Single Room" placeholder="directory name" required>
            </div>
        </div>
        <div class="form-group">
            <label for="">Description Room title</label>
            <input type="text" class="form-control" name="roomtitle" value="Descripiton of Room" placeholder="room title" required>
        </div>
        <div class="form-group">
            <label for=""> Descripiton Room </label>
            <!-- <textarea class="form-control" name="webdescription-about" placeholder="website description" rows="5" required> -->
            <textarea class="form-control full-editor" name="webdescription" placeholder="website description" rows="5" required>
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Ut enim ad minima veniam, quis nostrum exercitationem.

            Tullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
             </textarea>
        </div>
        <!-- ROOM Facilites will comes from database footer_facility and click add to facility for single room, table will accomodation_table-->
        <label for=""> Room Facilites - </label>
        <div class="form-group">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Facility Name</th>
                        <th>Facility Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="facilityId">5</td>
                        <td class="facilitesitem">Wifi</td>
                        <th class="facilityicon"><i class="fa fa-wifi" aria-hidden="true"></i></th>
                        <td>
                            <div class="btn btn-warning btn-sm open-facility" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></div>
                            <div class="btn btn-danger btn-sm" data-facility-id="<?php echo 1; ?>" id="facilityDelete"><span class="glyphicon glyphicon-trash"></span></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- FACILITIES MODEL -->
            <?php  $this->load->view('admin/webcustomize/inlcude/add-room-facility');?>
            <!-- END FACILITIES MODEL -->
        </div>
        <label for="">ROOM OVERWIEW - </label>
        <div class="form-group">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Room Service </th>
                        <th>Information</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="roomId">5</td>
                        <td class="roomparticular">Occupancy</td>
                        <th class="roomdescription">Max three persons</th>
                        <td>
                            <div class="btn btn-warning btn-sm open-room" data-toggle="modal" data-target="#roomModal"><span class="glyphicon glyphicon-plus"></span></div>
                            <div class="btn btn-danger btn-sm" data-room-id="<?php echo 1; ?>" id="roomDelete"><span class="glyphicon glyphicon-trash"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="roomId">5</td>
                        <td class="roomparticular">Size</td>
                        <th class="roomdescription"> 60 Sq. ft. </th>
                        <td>
                            <div class="btn btn-warning btn-sm open-room" data-toggle="modal" data-target="#roomModal"><span class="glyphicon glyphicon-plus"></span></div>
                            <div class="btn btn-danger btn-sm" data-room-id="<?php echo 1; ?>" id="roomDelete"><span class="glyphicon glyphicon-trash"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="roomId">5</td>
                        <td class="roomparticular">Internet</td>
                        <th class="roomdescription"> Yes </th>
                        <td>
                            <div class="btn btn-warning btn-sm open-room" data-toggle="modal" data-target="#roomModal"><span class="glyphicon glyphicon-plus"></span></div>
                            <div class="btn btn-danger btn-sm" data-room-id="<?php echo 1; ?>" id="roomDelete"><span class="glyphicon glyphicon-trash"></span></div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="form-group">
                <label for=""> Room Service Descripiton </label>
                <!-- <textarea class="form-control" name="webdescription-about" placeholder="website description" rows="5" required> -->
                <textarea class="form-control full-editor" name="webdescription" placeholder="website description" rows="5" required>
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Ut enim ad minima veniam, quis nostrum exercitationem.

                Tullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                </textarea>
            </div>
            <div class="form-group">
                <label for="">Button</label>
                <input type="text" class="form-control" name="roomtitle" value="BOOK NOW THIS ROOM" placeholder="book now button" required>
            </div>
        </div>
        <div class="form-group">
            <label for="">Button</label>
            <input type="text" class="form-control" name="check-availability" value="Check Aavilablity" placeholder="Check availabiity button" required>
        </div>
        <label for=""> <h3> ROOM PREVIEW </h3> </label>
        <div class="form-group">
        <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Portion Name </th>
                        <th>Preview</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="roomId">5</td>
                        <td class="roomportionname">Bed Room</td>
                        <th class="roompreviewphoto text-center">
                            <img src="http://localhost:5500/front-end/resort_/images/rooms/gallery/1.jpg" alt="bedroom" srcset="" height="80" width="120">
                        </th>
                        <td>
                            <div class="btn btn-warning btn-sm open-room-preview" data-toggle="modal" data-target="#roomPreivewModal"><span class="glyphicon glyphicon-plus"></span></div>
                            <div class="btn btn-danger btn-sm" data-room-preview-id="<?php echo 1; ?>" id="roomPreviewDelete"><span class="glyphicon glyphicon-trash"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="roomId">5</td>
                        <td class="roomportionname">Bed Room</td>
                        <th class="roompreviewphoto text-center">
                            <img src="http://localhost:5500/front-end/resort_/images/rooms/gallery/1.jpg" alt="bedroom" srcset="" height="80" width="120">
                        </th>
                        <td>
                            <div class="btn btn-warning btn-sm open-room-preview" data-toggle="modal" data-target="#roomPreivewModal"><span class="glyphicon glyphicon-plus"></span></div>
                            <div class="btn btn-danger btn-sm" data-room-preview-id="<?php echo 1; ?>" id="roomPreviewDelete"><span class="glyphicon glyphicon-trash"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="roomId">5</td>
                        <td class="roomportionname">Bed Room</td>
                        <th class="roompreviewphoto text-center">
                            <img src="http://localhost:5500/front-end/resort_/images/rooms/gallery/1.jpg" alt="bedroom" srcset="" height="80" width="120">
                        </th>
                        <td>
                            <div class="btn btn-warning btn-sm open-room-preview" data-toggle="modal" data-target="#roomPreivewModal"><span class="glyphicon glyphicon-plus"></span></div>
                            <div class="btn btn-danger btn-sm" data-room-preview-id="<?php echo 1; ?>" id="roomPreviewDelete"><span class="glyphicon glyphicon-trash"></span></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="roomId">5</td>
                        <td class="roomportionname">Bed Room</td>
                        <th class="roompreviewphoto text-center">
                            <img src="http://localhost:5500/front-end/resort_/images/rooms/gallery/1.jpg" alt="bedroom" srcset="" height="80" width="120">
                        </th>
                        <td>
                            <div class="btn btn-warning btn-sm open-room-preview" data-toggle="modal" data-target="#roomPreivewModal"><span class="glyphicon glyphicon-plus"></span></div>
                            <div class="btn btn-danger btn-sm" data-room-preview-id="<?php echo 1; ?>" id="roomPreviewDelete"><span class="glyphicon glyphicon-trash"></span></div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <label for=""><h3>  Contact Form - </h3> </label>
        <div class="form-group">
                <label for="">Form title</label>
                <input type="text" class="form-control" name="contactformtitle" value="Have any question" placeholder="contact form title" required>
        </div>
        <div class="form-group">
                <label for="">Button</label>
                <input type="text" class="form-control" name="submitcontactform" value="Have any question" placeholder="contact form submit button" required>
        </div>
        <button name="submitAccomdation" id="webisteAccomdation" class="btn btn-warning">Save Settings</button>
    </form>
    <!-- FACILITIES MODEL -->
<?php  $this->load->view('admin/webcustomize/inlcude/add-room');?>
            <!-- END FACILITIES MODEL -->
</div>
