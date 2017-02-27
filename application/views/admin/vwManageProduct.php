<?php
$this->load->view('admin/vwHeader');
?>


      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Products <small>Manage Products</small></h1>
            <ol class="breadcrumb">
              <li><a href="Rooms"><i class="icon-dashboard"></i> Products</a></li>
              <li class="active"><i class="icon-file-alt"></i> Products</li>
              
              
              <button class="btn btn-primary" type="button" style="float:right;" onclick="window.location='<?php echo base_url(); ?>admin/product/add_product'"><i class="fa fa-plus-square"></i> Add New Product</button>
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->

        
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">Product No <i class="fa fa-sort"></i></th>
                    <th class="header">Product Type <i class="fa fa-sort"></i></th>
                    <th class="header">Size <i class="fa fa-sort"></i></th>
                    <th class="header">Price<i class="fa fa-sort"></i></th>
                    <th class="header"></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 

                  foreach ($productdata as $key => $value) {



                   
                    
                    echo "<tr>";
                    echo "<td>".$value['r_no']."</td>";
                    echo "<td>".$value['type']."</td>";
                    echo "<td>".$value['size']."</td>";
                    echo "<td>".$value['price']."</td>";
                     echo "<td><button class='btn btn-primary btn-xs' type='button' onclick=\"window.location=' ".base_url()."admin/product/indexUpdate/".$value['r_id']."'\" ><i class='fa fa-pencil-square-o'></i> Edit  </button> <button class='btn btn-danger btn-xs' type='button' onclick=\"window.location=' ".base_url()."admin/product/delete_product/".$value['r_id']."'\"><i class='fa fa-times'></i> Remove</button/></td>";
            


                    echo "</tr>";

                  }
                 



                  ?>
                </tbody>
              </table>
            </div>
        
       
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>