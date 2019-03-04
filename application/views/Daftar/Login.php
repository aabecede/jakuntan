<link rel="stylesheet" href="<?php echo base_url();?>assets/tabs/jquery-1-12-1.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/tabs/style.css">
  <script src="<?php echo base_url();?>assets/tabs/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>assets/tabs/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
     <script>
  $( function() {
    $( "#tabs" ).tabs({
      collapsible: true
    });
  } );
  </script>


<div class="row">
    <div class="container">
      <br>
        <?php 
        echo @$tolak;
        
        ?>
  <div class="col-lg-3">
  </div>
          <div id="tabs" class="col-sm-6">
              <ul>
                <li><a href="#tabs-1">Member</a></li>
                <li><a href="#tabs-2">Akuntan</a></li>
              </ul>
            <div id="tabs-1">
              
              <div class="col--6">
                <form action="<?php echo base_url('login/proses');?>" method="post" enctype="multipart/form-data">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email@email.com" value="<?php echo $this->input->post('email');?>">
                    <label>Password</label>
                    <input type="hidden" name="status" value="2">
                    <input type="Password" name="password" class="form-control" placeholder="****">
                    <input type="submit" name="input" value="Login" class="btn btn-info">
                    <input type="reset" name="reset" value="Cancel" class="btn btn-danger">
                    <a href="<?php echo base_url('home');?>" class="
                      btn btn-primary" style="color:white">Kembali</a>
                </form>
              </div>
            </div>
            <div id="tabs-2">
              <form action="<?php echo base_url('login/proses');?>" method="post" enctype="multipart/form-data">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email@email.com" value="<?php echo $this->input->post('email');?>">
                    <label>Password</label>
                    <input type="hidden" name="status" value="1">
                    <input type="Password" name="password" class="form-control" placeholder="****">
                    <input type="submit" name="input" value="Login" class="btn btn-info">
                    <input type="reset" name="reset" value="Cancel" class="btn btn-danger">
                    <a href="<?php echo base_url('home');?>" class="
                      btn btn-primary" style="color:white">Kembali</a>
                </form>
            </div>
          </div>
      
    </div>
</div>

