<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'selfcare/assets/css/bootstrap.min.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'selfcare/assets/css/style.css'; ?>">
  
</head>
<body>

<div class="col-md-6 m-auto" style="padding-top: 100px;">

      <form  method="post" action="<?php echo base_url('index.php/user/loginvalidate') ?>" >
         <div class="card">

            <div class="card header bg-dark">
               <h1 class="text-white text-center">Selfcare</h1>
            </div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" required>
            <?php echo form_error('email');?><br>
            <label>Password</label>
            <input type="text" name="password" placeholder="Password" required>
            <?php echo form_error('password');?><br>
            <button type="submit" class="btn btn-success" name="sub">LOGIN</button>
            
         </div>
      </form>
  </div>

</body>
</html>
