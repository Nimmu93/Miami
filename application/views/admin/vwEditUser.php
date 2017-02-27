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
            <h1>Users <small>Update User</small></h1>
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
           
        if($value['user_type']=='SA')
          $usertype="Admin";
        else
          $usertype="User";
        
        
        
        $username = $value['username'];
        $email = $value['email'];
        $nic = $value['nic'];
        $telephone = $value['telephone']; 
        $id = $value['id'];
                 
       }
    ?>
  
  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/users/update_user/<?php echo $id; ?> "> 
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value ="<?php echo $username ; ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value ="<?php echo $email ; ?>" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Telephone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="text" name="telephone" placeholder="Enter Telephone" pattern="[0-9]{10}" value ="<?php echo $telephone; ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nic">NIC No:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nic" name="nic" placeholder="Enter NIC No" pattern="[0-9]{9}[v|x|V|X]" value ="<?php echo $nic; ?>" required>
      </div>
    </div>    
    <div class="form-group">        
      <label class="control-label col-sm-2" for="cpwd">Select User type:</label>
       <div class="col-sm-10"> 
        
        <div class="radio">
          <label><input type="radio" name="usertype" <?php if($usertype == "User"){ echo "checked";}  ?> value="A"> User</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="usertype" value="SA" <?php if($usertype == "Admin"){ echo "checked";}  ?> > Admin</label>
        </div>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Save Changes</button>
      </div>
    </div>
  </form>
    
    

          </div>
        </div><!-- /.row -->



        

        
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>