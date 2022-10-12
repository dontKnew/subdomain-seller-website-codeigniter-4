<div role="tabpanel" class="tab-pane" id="testimonials">
    <form  method="POST">
        <label for="">
            <h3> Header - </h3>
        </label>
        
        Testimonials
        <div class="form-group">
            <label for="">Webpage title</label>
            <input type="text" class="form-control" name="webpagetitle" value="Resorts-Gallary" placeholder="webpage title" required>
        </div>
        <div class="form-group">
            <label for="">Testimonials Photo</label>
            <input type="file" name="testimonialsphoto" class="form-control" value="testimonials photo" placeholder="testimonials photo" required>
        </div>
        <div class="form-group">
            <label for=""> Photo Text </label>
            <input type="text" name="phototext" class="form-control" value="Testimonials" placeholder="tile of testimonials" required>
        </div>
        <div class="form-inline">
            <div class="form-group">
                <label for=""> Directory Link </label>
                <input type="text" name="directorylinkhome" class="form-control" value="Home" placeholder="menu title" required>
                <input type="text" name="directorylinktestimonials" class="form-control" value="Review" placeholder="menu title" required>
            </div>
        </div>
        <label for="">
            <h3> Center - </h3>
        </label>
        <div class="form-group">
            <label for="">description title </label>
            <input type="text" class="form-control" name="webdescriptiontitle" value="Testimonials" placeholder="web description title" required>
        </div>
        <div class="form-group">
            <label for="">description title comment </label>
            <input type="text" class="form-control" name="webdescriptiontitlecomment" value="Pick a room that best suits your taste and budget" placeholder="web description title" required>
        </div>
        <div class="form-group">
            <label for=""> Website description </label>
            
            <textarea class="form-control" name="webdescription-testimonials" placeholder="testimonials description" rows="5" required> Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.

Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.

Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.

Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.

While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.

This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.

The famous forests of Corbett National Park testify to man's determination for safe places for wildlife to thrive and we are committed to maintaining it.

We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.

We welcome you to this abode of peace and assure you of not having the same experience as before! </textarea>

        </div>
        <label for="">
            <h3>Comments </h3>
        </label>
        <div class="form-group">
        <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Comment Title </th>
                        <th>Comment</th>
                        <th>posted at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="testimonialsId">5</td>
                        <td class="testimonialsId">Sajid Ali</td>
                        <td class="testimonialspreviewphoto text-center">
                            <img src="http://localhost:5500/front-end/resort_/images/testimonials/1.jpg"  class="img-circle" alt="sajid" srcset="" height="100" width="100">
                        </td>
                        <td class="reviewcommenttitle">Neat and Clean Environment</td>
                        <td class="reviewcommendescription">Very quiet neighborhood. Staff are friendly and efficient. Rooms are clean. No complaints. The place could be spruced up with fresh paint</td>                        
                        <td class="posted-at">1 week ago</td>
                        <td>
                            <div class="btn btn-warning btn-sm open-testimonials-preview" data-toggle="modal" data-target="#testimonialsPreivewModal"><span class="glyphicon glyphicon-plus"></span></div>
                            <div class="btn btn-danger btn-sm" data-testimonials-preview-id="<?php echo 1; ?>" id="testimonialsPreviewDelete"><span class="glyphicon glyphicon-trash"></span></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--  MODEL -->
            <?php  $this->load->view('admin/webcustomize/inlcude/add-customerreview');?>
            <!-- END  MODEL -->
            </div>
        <button type="submit" id="webisteTestimonials" class="btn btn-warning">Save Settings</button>
    </form>

</div>