
<!DOCTYPE html>
<html>

    <head>
        <title>Log in</title>

        <link rel="stylesheet"  type="text/css" href ="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" />
    </head>

    <body>
      <div class="container">
      <form method="post" action="<?php echo base_url(); ?>index.php/login_controller/login">
      <div class="form-group">
      <label>Enter Username</label>
      <input type="text" name="username" class="form-control" />
    <span class = "text-danger"><?php echo form_error('username'); ?></span>
      </div>
      <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="password" class="form-control" />
      <span class = "text-danger"><?php echo form_error('username'); ?></span>
      </div>
      <div class="form-group">
      <input type="submit" name="insert" value = "Login" class="btn btn-primary btn-block" /><br>
      <span class = "text-danger"><?php echo $this->session->flashdata("error"); ?></span>
      </div>
    </form>
    </body>

</html>