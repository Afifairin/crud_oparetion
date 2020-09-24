<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <a class="navbar-brand" href="#">CRUD Application</a>
</nav>
<div class="container" style="padding-top: 10px">
    <h3>Update User</h3>
    <hr>
    <form method="post" name="editUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id']; ?>" >
        <div class="col-md-6">
            <div class="form-group">
                <labelS>First Name</label>
                <input type="text" class="form-control <?php echo (form_error('firstName') != "") ? 'is-invalid' : '';?>" name="firstName" value="<?php echo set_value('firstName', $user['first_name']);?>" placeholder="First name">
                <p class="invalid-feedback"><?php echo strip_tags(form_error('firstName'));?></p>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control <?php echo (form_error('lastName') != "") ? 'is-invalid' : '';?>" name="lastName" value="<?php echo set_value('lastName', $user['last_name']);?>" placeholder="Last name">
                <p class="invalid-feedback"><?php echo strip_tags(form_error('lastName'));?></p>
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" value="<?php echo set_value('email',$user['email']);?>" placeholder="email">
                <p class="invalid-feedback"><?php echo strip_tags(form_error('email'));?></p>
            </div>
            <div class="form-group">
                <label >Contact No.</label>
                <input type="text" class="form-control <?php echo (form_error('contact') != "") ? 'is-invalid' : '';?>" name="contact" value="<?php echo set_value('contact',$user['contact']);?>" placeholder="Phone, Mobile...">
                <p class="invalid-feedback"><?php echo strip_tags(form_error('contact'));?></p>
            </div>
            <div class="form-group">
                <label >Address</label>
                <input type="text" class="form-control <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>" name="address" value="<?php echo set_value('address',$user['address']);?>" >
                <p class="invalid-feedback"><?php echo strip_tags(form_error('address'));?></p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?php echo base_url().'index.php/user/index' ?>" class="btn-secondary btn">Cancel</a>
            </div>

        </div>

        
    </form>


</div>



</body>
</html>