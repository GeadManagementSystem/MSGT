
<!DOCTYPE html>
<html>

    <head>
        <title>Log in</title>

        <link rel="stylesheet"  type="text/css" href ="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet"  type="text/css" href ="<?php echo base_url(); ?>public/vendor/bootstrap/css/custom.css" />
    </head>

    <body>
          <div class="container">
      <div class="col-md-4 col-md-offset-4">
      <div class=" login-panel panel panel-success">

        <div class="panel-heading">
          <h3 class="panel-title text-center">Please Log In</h3>
      </div>
       <div class="panel-body">
      <form method="post" action="<?php echo base_url(); ?>index.php/login_controller/login">
      <div class="form-group">
      <label>Enter Username</label>
      <input type="text" name="username" class="form-control" />
    <span class = "text-danger"><?php echo form_error('username'); ?></span>
      </div>
      <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="password" class="form-control" />
      <span class = "text-danger"><?php echo form_error('password'); ?></span>
      </div>
      <div class="form-group">
      <input type="submit" name="insert" value = "Login" class="btn btn-lg btn-success btn-block" /><br>
      <span class = "text-danger"><?php echo $this->session->flashdata("error"); ?></span>
      </div>
    </form>
  </div>
  </div>
</div>
</div>
</div>
    </body>

</html>
