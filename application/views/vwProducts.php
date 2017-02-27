<?php
$this->load->view('vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
<link href="<?php echo HTTP_CSS_PATH; ?>occasions.css" rel="stylesheet">
<link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.min.css" rel="stylesheet">



<div class="page-header container">
    <h1><small>Products</small></h1>

    <div id="body" class="running">
            <div>
                <div class ="row">
                

                     <div class="col-md-4 ">
                        <a href="#"><img src="<?php echo HTTP_IMAGES_PATH; ?>design-3.jpg" class="img-circle"alt=""></a>
                    </div>
                    <div class="col-md-4 ">
                        <a href="#"><img src="<?php echo HTTP_IMAGES_PATH; ?>mug.jpg" class="img-circle" alt=""></a>
                    </div>
                     <div class="col-md-4 ">
                        <a href="#"><img src="<?php echo HTTP_IMAGES_PATH; ?>stic.jpg" class="img-circle" alt=""></a>
                    </div>
                    </div>
                    <br>
                    <div class ="row">
                

                     <div class="col-md-4 ">
                        <a href="#"><img src="<?php echo HTTP_IMAGES_PATH; ?>badges.jpg" class="img-circle"alt=""></a>
                    </div>
                    <div class="col-md-4 ">
                        <a href="#"><img src="<?php echo HTTP_IMAGES_PATH; ?>trop.jpg" class="img-circle" alt=""></a>
                    </div>
                     <div class="col-md-4 ">
                        <a href="#"><img src="<?php echo HTTP_IMAGES_PATH; ?>1.jpg" class="img-circle" alt=""></a>
                    </div>
                    </div>
                    <br>
                    <div class ="row">
                

                     <div class="col-md-4 ">
                        <a href="#"><img src="<?php echo HTTP_IMAGES_PATH; ?>wall.jpg" class="img-circle"alt=""></a>
                    </div>
                    <div class="col-md-4 ">
                        <a href="#"><img src="<?php echo HTTP_IMAGES_PATH; ?>bcard.jpg" class="img-circle" alt=""></a>
                    </div>
                     <div class="col-md-4 ">
                        <a href="#"><img src="<?php echo HTTP_IMAGES_PATH; ?>ban.jpg" class="img-circle" alt=""></a>
                    </div>
                    </div> 
                    <br>          
            </div>
        </div>
</div>

<?php
$this->load->view('vwFooter');
?>