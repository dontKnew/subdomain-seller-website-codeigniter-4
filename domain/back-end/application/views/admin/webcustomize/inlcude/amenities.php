<div role="tabpanel" class="tab-pane" id="package">

    <form class="" method="POST">
        <label for="">
            <h3> Header - </h3>
        </label>
        <div class="form-group">
            <label for="">Webpage title</label>
            <input type="text" class="form-control" name="webpagetitle" value="Resorts-Package" placeholder="webpage title" required>
        </div>
        <div class="form-group">
            <label for="">Package Photo</label>
            <input type="file" name="packagephoto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for=""> Photo Text </label>
            <input type="text" name="phototext" class="form-control" value="Package" placeholder="title of package" required>
        </div>
        <div class="form-inline">
            <div class="form-group">
                <label for=""> Directory Link </label>
                <input type="text" name="directorylinkhome" class="form-control" value="Home" placeholder="menu title" required>
                <input type="text" name="directorylinkpackage" class="form-control" value="Package" placeholder="menu title" required>
            </div>
        </div>
        <label for="">
            <h3> Center - </h3>
        </label>
        <div class="form-group">
            <label for="">Description title </label>
            <input type="text" class="form-control" name="webdescriptiontitle" value="Special Packages" placeholder="web description title" required>
        </div>
        <div class="form-group">
            <label for="">Description title comment </label>
            <input type="text" class="form-control" name="webdescriptiontitlecomment" value="Special Packages" placeholder="web description title comment" required>
        </div>
        <div class="form-group">
            <label for=""> Website description </label>
            <textarea class="form-control" name="webdescription-package" placeholder="package description" rows="5" required> 
                Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a 'home away from home' as soon as you step into the stunning beauty of Jim Corbett National Park.
             </textarea>
        </div>
        <button type="submit" id="webistePackage" class="btn btn-warning">Save Settings</button>
    </form>

</div>