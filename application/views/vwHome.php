<?php
$this->load->view('vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>jumbotron.css" rel="stylesheet">
<div style="height: 60px; width: 100%; float: left; background-color: #ffffff" >
<?php
        if(isset($error) && $error !='')
        {
            ?>
        <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
        <?php
        }
        ?>

</div>
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/back1.jpg" alt="back1" title="" id="wows1_0"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/wall.jpg" alt="wall" title="" id="wows1_1"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/h.jpg" alt="h" title="" id="wows1_2"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/w.jpg" alt="w" title="" id="wows1_5"/></li>
                <li><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/images/e.jpg" alt="e" title="" id="wows1_6"/></li>                
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title="f"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/back1.jpg" alt="back1"/>1</span></a>
                <a href="#" title="g"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/wall.jpg" alt="wall"/>2</span></a>
                <a href="#" title="h"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/h.jpg" alt="h"/>3</span></a>
                <a href="#" title="w"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/w.jpg" alt="w"/>6</span></a>
                <a href="#" title="e"><span><img src="<?php echo HTTP_IMAGES_PATH; ?>slider/tooltips/e.jpg" alt="e"/>7</span></a>
               s
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery carousel</a> by WOWSlider.com v8.6</div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>wowslider.js"></script>
    <script type="text/javascript" src="<?php echo HTTP_JS_PATH; ?>script.js"></script>
    <!-- End WOWSlider.com BODY section -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div>
      <div class="container">
        <h1>Welcome to Miami Exports</h1>
        <p>Miami is a digital print services company. It is the most versatile and high-tech print on-demand organization in Sri Lanka. This distinctive advantage stems not only from the wide range of cutting edge equipment we possess, but also from implemented software systems from workflow to billing management.


Being a very young company, we thrive on change, embracing research and development into the next; cash cow.

We are fluid enough to not only adapt to new technology thrown our way while maximizing its potential in record time.


Our client servicing and speed of delivery are industry benchmarks.</p>

      </div>
    </div>



    
<?php
$this->load->view('vwFooter');
?>