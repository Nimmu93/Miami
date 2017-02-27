<?php
$this->load->view('admin/vwHeader');
?>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Product <small>Add Product</small></h1>
            <ol class="breadcrumb">
              <li><a href="rooms"><i class="icon-dashboard"></i>Products</a></li>
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



  

          </div>
        </div><!-- /.row -->



        

        
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>