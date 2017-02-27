<?php
$this->load->view('admin/vwHeader');
?>

<!--  PAge Code Starts here -->

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script src="<?php echo HTTP_JS_PATH; ?>responsive-calendar.js"></script>
    <script src="<?php echo HTTP_JS_PATH; ?>morris/chart-data-morris.js"></script>
    <link href="<?php echo HTTP_CSS_PATH; ?>responsive-calendar.css" rel="stylesheet">
    
<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <small>Statistics Overview</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Welcome Miami Admin panel</div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">12</p>
                    <p class="announcement-text">New Feedbacks!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Feedback
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">4</p>
                    <p class="announcement-text">To-Do Events this week</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Go to events
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-truck fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">26</p>
                    <p class="announcement-text">New Orders!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Complete Orders
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->

       
        <div class="row">
          
          <div class="col-lg-6">
              
      <!-- Responsive calendar - START -->
      <div class="panel panel-primary">
      <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-calendar"></i> Product Calendar</h3>
              </div>
       <div class="panel-body">
      <div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
      </div>
      <!-- Responsive calendar - END -->
    
          </div>
          </div>
          <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '2015-11',
          events: {
            "2015-11-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2015-11-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2015-11-03":{"number": 1}, 
            "2015-11-12": {}}
        });
      });
    </script>
          <div class="col-lg-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i> Recent Quotation Payments</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Quotation # <i class="fa fa-sort"></i></th>
                        <th>Payment Date <i class="fa fa-sort"></i></th>
                        <th>Payment Time <i class="fa fa-sort"></i></th>
                        <th>Amount (Rs) <i class="fa fa-sort"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3326</td>
                        <td>11/21/2015</td>
                        <td>3:29 PM</td>
                        <td>32100</td>
                      </tr>
                      <tr>
                        <td>3325</td>
                        <td>11/21/2015</td>
                        <td>3:20 PM</td>
                        <td>23400</td>
                      </tr>
                      <tr>
                        <td>3324</td>
                        <td>11/21/2015</td>
                        <td>3:03 PM</td>
                        <td>7240</td>
                      </tr>
                      <tr>
                        <td>3323</td>
                        <td>11/21/2015</td>
                        <td>3:00 PM</td>
                        <td>23000</td>
                      </tr>
                      <tr>
                        <td>3322</td>
                        <td>11/21/2015</td>
                        <td>2:49 PM</td>
                        <td>83450</td>
                      </tr>
                      <tr>
                        <td>3321</td>
                        <td>11/21/2015</td>
                        <td>2:23 PM</td>
                        <td>24500</td>
                      </tr>
                      <tr>
                        <td>3320</td>
                        <td>11/21/2015</td>
                        <td>2:15 PM</td>
                        <td>56630</td>
                      </tr>
                      <tr>
                        <td>3319</td>
                        <td>11/21/2015</td>
                        <td>2:13 PM</td>
                        <td>9430</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="text-right">
                  <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->


<!--  PAge Code Ends here -->
<?php
$this->load->view('admin/vwFooter');
?>