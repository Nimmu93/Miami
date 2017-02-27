<?php
$this->load->view('admin/vwHeader');
?>

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



  
  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/users/register_user">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Telephone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" name="telephone" placeholder="Enter Telephone" pattern="[0-9]{10}" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nic">NIC No:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nic" name="nic" placeholder="Enter NIC No" pattern="[0-9]{9}[v|x|V|X]" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter new password" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="cpwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="cpwd" name="cpassword" placeholder="Enter password again" required>
      </div>
    </div>
    <div class="form-group">        
      <label class="control-label col-sm-2" for="cpwd">Select User type:</label>
       <div class="col-sm-10"> 
        
        <div class="radio">
          <label><input type="radio" name="usertype" checked="checked" value="A"> User</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="usertype" value="SA"> Admin</label>
        </div>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Submit</button>
      </div>
    </div>
  </form>

          </div>
        </div><!-- /.row -->



        

        
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>