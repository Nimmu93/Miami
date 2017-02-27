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
            <h1>Products<small>Update Products</small></h1>
            <ol class="breadcrumb">
              <li><a href="Rooms"><i class="icon-dashboard"></i> Products</a></li>
              <li class="active"><i class="icon-file-alt"></i> Products</li> 
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

                
       foreach ($productdata as $key => $value) {
         $r_id = $value['r_id'];
        $r_no = $value['r_no'];
        $type = $value['type'];
        $size = $value['size'];
        $price = $value['price']; 
                 
       }
    ?>
  
  <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/product/update_room/<?php echo $r_id; ?> "> 
<div class="form-group">
      <label class="control-label col-sm-2" for="name">Product No:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="r_no" name="r_no" placeholder="Enter Product Id" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Type:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="r_no" name="t_no" placeholder="Enter Product Type" required>
      </div>
    </div>
    
     <div class="form-group">
     <label class="control-label col-sm-2" for="email">Product Size:</label>
     <div class="col-sm-10">
        <input type="number" class="form-control" id="r_no" name="s_no" placeholder="Enter Product Size" required>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Product Price(Rs):</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="text" name="price" placeholder="Enter Price" required>
      </div>
    </div>
    
    
   

    
   
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" >Submit</button>
        <button type="reset" class="btn btn-default" >Reset</button>
      </div>
    </div>

  </form>
    
    

          </div>
        </div><!-- /.row -->



        

        
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>