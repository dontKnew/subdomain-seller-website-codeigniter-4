<div role="tabpanel" class="tab-pane fade" id="home">

    <form class="" method="POST">
        <label for="">
            <h3> Header - </h3>
        </label>
        <div class="form-group">
            <label for="">Webpage title</label>
            <input type="text" class="form-control" name="webpagetitle" value="Resorts-Home" placeholder="web title" required>
        </div>
        <div class="form-group">
            <label for="">Website name</label>
            <input type="text/" class="form-control" name="webistename" value="E Service Apartment Website" placeholder="website name" required>
        </div>
        <div class="form-group">
            <label for="">Phone no. </label>
            <input type="text" class="form-control" name="phoneno" value="7015221377" placeholder="contact number" required>
        </div>
        <div class="form-group">
            <label for=""> Website email </label>
            <input type="email" class="form-control" name="websiteemail" value="booking@apartment.com" placeholder="website email" required>
        </div>
        <label for="">
            <h3> After Slider - </h3>
        </label>
        <div class="form-group">
            <label for="">Web description 1 </label>
            <input type="text" class="form-control" name="weclometext" value="WELCOME TO" placeholder="welcome text" required>
        </div>
        <div class="form-group">
            <label for=""> Website description 2 </label>
            <!-- <textarea class="form-control" name="webdescription-about" placeholder="website description" rows="5" required> -->
            <textarea class="form-control full-editor" name="webdescription" placeholder="website description" rows="5" required> Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.

Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.

Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.

Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.

While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.

This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.

The famous forests of Corbett National Park testify to man's determination for safe places for wildlife to thrive and we are committed to maintaining it.

We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.

We welcome you to this abode of peace and assure you of not having the same experience as before! </textarea>

        </div>
        <div class="form-group">
            <label for=""> Menu </label>
            <input type="text" class="form-control" name="homemenu" value="Home" placeholder="home menu" required>
        </div>
        <div class="form-group">
            <label for="">Button </label>
            <input type="text" class="form-control" name="btnbook" value="Book Now" placeholder="button-book now" required>
        </div>
        <div class="form-group">
            <label for=""> Button </label>
            <input type="text" class="form-control" name="btncontactus" value="Contact us" placeholder="button-contact us" required>
        </div>
        <div class="form-group">
            <label for=""> Pay Button </label>
            <input type="text" class="form-control" name="btnpayment" value="Pay Online" placeholder="button-payment" required>
        </div>
        <label for="">
            <h3> Footer - </h3>
        </label>
        <!-- DYNAMIC FACILITIES -->
        <!-- <div class="form-group">
            <label for=""> <h4>   FACILITIES @ D-HABITAT </h4> </label>
            <div class="form-inline">
                <input type="text" class="form-control" name="facility" value="Hair Dryer"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility1" value="Satellite"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facilit2" value="Clothes rack"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility3" value="Desk"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility4" value="Free Toiletries"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility5" value="Private bathroom"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility6" value="Ironing Facilites"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility7" value="Toilet"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility8" value="Free Wifi"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility9" value="Seating Area"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility10" value="Telephone"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility11" value="Wardrobe/Closet"  placeholder="facility name" required>
                <input type="text" class="form-control" name="facility12" value="Electric Kettle"  placeholder="facility name" required>
            </div>
        </div> -->
        <div class="form-group">
            <label for="">Facilites </label>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Facility Name</th>
                        <th>Facility Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody >
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
        </div>

        <!-- FACILITIES MODEL -->
            <?php  $this->load->view('admin/webcustomize/inlcude/add-room-facility');?>
        <!-- END FACILITIES MODEL -->

        <div class="form-group">
            <label for=""> Accommodation/Amenities title </label>
            <input type="text" class="form-control" name="accomdationitle" value="ACCOMMODATION & AMENITIES" placeholder="title" required>
        </div>
        <div class="form-group">
            <label for=""> Package title </label>
            <input type="text" class="form-control" name="specialpackagetitle" value="SPECIAL PACKAGES" placeholder="package title" required>
        </div>
        <div class="form-group">
            <label for=""> Event title </label>
            <input type="text" class="form-control" name="weedingtitle" value="WEDDING AND EVENTS" placeholder="event title" required>
        </div>
        <div class="form-group">
            <label for=""> Location title </label>
            <input type="text" class="form-control" name="locatintitle" value="GET IN TOUCH" placeholder="location title" required>
        </div>
        <div class="form-inline">
            <label for=""> Office Address </label>
            <div class="form-group">
                <input type="text" class="form-control" name="googlemaplink" value="https://goo.gl/maps/m3BXFY6CuUrq6EGz5" placeholder="google map link" required>
                <input type="text" class="form-control" name="city" value="DWARKA" placeholder="city name" required>
                <input type="text" class="form-control" name="state" value="State" placeholder="state name" required>
                <input type="text" class="form-control" name="country" value="country" placeholder="country name" required>
                <input type="text" class="form-control" name="website2ndemail" value="web@email.com" placeholder="webiste 2nd email" required>
                <input type="text" class="form-control" name="phonno2" value="6205881326" placeholder="phone no." required>
                <input type="text" class="form-control" name="phoneno3" value="6205881326" placeholder="phone no." required>
            </div>
        </div>
        <div class="form-group">
            <label for=""> Copyright line </label>
            <input type="text" class="form-control" name="copyrightline" value="Copyright © Resort and Hotel 2021. All rights reserved." placeholder="footer copyright line" required>
        </div>

        <button name="submitHome" id="webisteHome" class="btn btn-warning">Save Settings</button>
    </form>

</div>
