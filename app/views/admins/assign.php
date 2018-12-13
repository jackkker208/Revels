<?php require APPROOT.'/views/inc/headerAdmin.php'; ?>
<div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light">
                <h2 class="text-center">Update Form</h2>
                

                <form action="<?php echo URLROOT;?>admins/assign/<?php echo data['id']; ?>" method="post">
                    <div class="form-group">
                    <label for="category">Select Your Category:</label>
                    <select name="category" class = "form-control form-control-lg <?php echo (!empty($data['category_err']))? 'is-invalid' : ''; ?>">
                        <option>None</option>
                        <option>Checker</option>
                        <option>Category Head</option>
                        <option>Event Head</option>
                        <option>Organizer</option>
                        <option>Organizer(HRD)</option>
                        <option>Volunteer</option>
                    </select>

                    </div>
                    <div class="form-group">
                    <label for="event">Select Your Event:</label>
                    <select name="event" class = "form-control form-control-lg <?php echo (!empty($data['event_err']))? 'is-invalid' : ''; ?>">
                        <option>None</option>
                        <option>Singing</option>
                        <option>Model Making</option>
                        <option>Quiz</option>
                        <option>Racing</option>
                    </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Update" class ="btn btn-success btn-block">
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
<?php require APPROOT.'/views/inc/footer.php'; ?>