<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Users <small>Add User</small></h1>
            <ol class="breadcrumb">
              <li><a href="Users"><i class="icon-dashboard"></i> Users</a></li>
              <li class="active"><i class="icon-file-alt"></i> Users</li> 
            </ol>
          </div>





        </div><!-- /.row -->

         <div class="row">
          <div class="col-lg-12">
           
  <?php
        if(isset($message) && $message_type =='success')
        {
            ?>
        <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php echo $message; ?></div>
        <?php
        }
        ?>

         <?php
        if(isset($message) && $message_type =='error')
        {
            ?>
         <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php echo $message; ?></div>
        <?php
        }
        ?>
              
              
        <?php /*    */

                
       foreach ($userdata as $key => $value) {           
         
        $id = $value['id'];        
                 
       }
    ?>
  
  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/users/changePassword/<?php echo $id; ?> "> 
  <div class="form-group">
      
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Old Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="oldpwd" name="oldpassword" placeholder="Enter old password" required>
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">New Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter new password" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="cpwd">Confirm New Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="cpwd" name="cpassword" placeholder="Enter password again" required>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Change Password</button>
      </div>
    </div>
  </form>

          </div>
        </div><!-- /.row -->



        

        
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>