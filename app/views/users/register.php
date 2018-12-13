<?php require APPROOT.'/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light">
                <h2>Create an Account</h2>
                <p>Please fill our the form to register with us</p>
                <form action="<?php echo URLROOT;?>users/register" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class = "form-control form-control-lg <?php echo (!empty($data['name_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                        <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Registration Number:</label>
                        <input type="number" name="regNo" class = "form-control form-control-lg <?php echo (!empty($data['reg_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['regNo']; ?>">
                        <span class="invalid-feedback"><?php echo $data['reg_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Phone Number:</label>
                        <input type="number" name="phoneNo" class = "form-control form-control-lg <?php echo (!empty($data['phone_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['phoneNo']; ?>">
                        <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class = "form-control form-control-lg <?php echo (!empty($data['email_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class = "form-control form-control-lg <?php echo (!empty($data['password_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" name="confirm_password" class = "form-control form-control-lg <?php echo (!empty($data['confirm_password_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                    </div>
                
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Register" class ="btn btn-success btn-block">
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT?>users/login" class="btn btn-light btn-block">Have an account? Login</a>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
<?php require APPROOT.'/views/inc/footer.php'; ?>