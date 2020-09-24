<!DOCTYPE html>
<html>
<head>
    <title>View User
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1">CRUD Applications</span>
</nav>

<div class="container" style="padding-top: 10px">

<div class="col-md-12">
  <?php $success = $this->session->userdata('success');
  if($success != ""){ ?>
  <div class="alert alert-success"><?php echo $success; ?></div>
  <?php } ?>
  <?php $failure = $this->session->userdata('failure');
  if($failure != ""){ ?>
  <div class="alert alert-failure"><?php echo $failure; ?></div>
  <?php } ?>

</div>

<h3>View Users</h3>  

<div class="col-md-12 text-right" >
    <a href="<?php echo base_url().'index.php/user/create'?>" class="btn btn-primary">Create New</a>
</div>
<br>

  <table class="table" >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Address</th>
        <th scope="col">Posting Date</th>
        <th scope="col">Last Update</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
  
   
 
    <?php if (!empty($users)) { foreach($users as $user ){ ?>
    <tr>
      <td><?php echo $user['user_id']?></td>
      <td><?php echo $user['first_name']?></td>
      <td><?php echo $user['last_name']?></td>
      <td><?php echo $user['email']?></td>
      <td><?php echo $user['contact']?></td>
      <td><?php echo $user['address']?></td>
      <td><?php echo $user['posted_at']?></td>
      <td><?php echo $user['updated_at']?></td>
      <td>
        <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>" class="btn btn-primary btn-sm">Edit</a>
      
        <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id'];?>" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    <?php } } else { ?>
      <tr>
        
        <td colspan="5">Records not found</td>
        
      </tr>
    <?php } ?>
  </table>
</div>
</body>
</html>