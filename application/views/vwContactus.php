<?php
$this->load->view('vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
 
<div class="page-header container">
  <h1><small>Contact Us</font></small></h1>
</div>


<div class="container">
  <div class="panel panel-default" style="width:100%;float:left;">
  <div class="panel-body">
    Miami exports (pvt) ltd ,Homagama town, Homagama

  </div>
</div>

</div>
  <div id="map" style = "margin: 0; padding: 0; height: 400px ; width: 100%;" >

  </div>

  <script>
    function initialize() {
      var mapCanvas = document.getElementById('map');
      var mapOptions = {
        center: new google.maps.LatLng(6.844765, 80.003956),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(mapCanvas, mapOptions)

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(6.844765, 80.003956),
        map: map
      })
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>


     <hr>
<?php
$this->load->view('vwFooter');
?>