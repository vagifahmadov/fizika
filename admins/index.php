<?php 
include('../qurulum.php');

//id
if(!isset($_GET['id'])){
	$_GET['id']=1;
}

if(!is_numeric($_GET['id'])){
	$_GET['id']=1;
}
//id


// alt_m
if(!isset($_GET['alt_m'])){
	$_GET['alt_m']=0;
}

if(!is_numeric($_GET['alt_m'])){
	$_GET['alt_m']=0;
	$_GET['id']=1;
}
// alt_m
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
  <?php 
	$basliq_title="select * FROM admin_pages where sil=0 and id=".$_GET['id'];
	$basliq_title_cavab=mysql_fetch_array(mysql_query($basliq_title, $elaqe));
	echo $basliq_title_cavab['header'];
  ?>
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">CMS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NP</b>CMS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
	<!-- menu duymesi -->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
	<!-- menu duymesi son -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
             <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
	  
	  <?php
	  $menu=@mysql_query("select * from admin_pages where sil=0 and id_alt='0' ORDER BY 'id'", $elaqe);
		while($sutun_menu=mysql_fetch_array($menu)){
		//
		$alt_m=@mysql_query("select * from admin_pages where id_alt='".$sutun_menu['id']."' ORDER BY 'id'", $elaqe);
		if(mysql_num_rows($alt_m)>0){$agacgorunus='treeview'; $altm_oxmenu='<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>';} else {$altm_oxmenu=''; $agacgorunus='';}
			
			//aktiv menu
			$aktiv_axtar_altID=@mysql_query("select * from admin_pages where id='".$_GET['id']."' ORDER BY 'id'", $elaqe);
			if(mysql_num_rows($aktiv_axtar_altID)>0){
				$aktiv_menu_teyin=mysql_fetch_array($aktiv_axtar_altID);
			}
						
			if($sutun_menu['id']==$_GET['id'] || $aktiv_menu_teyin['id_alt']==$sutun_menu['id']){
				$bas_menuaktiv=' active';
			}else{
				$bas_menuaktiv='';
			}
	  ?> 
	  
	  <li <?php echo 'class="'.$agacgorunus.$bas_menuaktiv.'"'; ?>>
          <a href="index.php?id=<?php echo $sutun_menu['id']; ?>">
            <?php echo $sutun_menu['ikon']; ?>
            <span> <?php echo $sutun_menu['menu']; ?></span>
            <?php echo $altm_oxmenu; ?>
          </a>
				 <?php
					if(mysql_num_rows($alt_m)>0){
				 ?>
				 <ul class="treeview-menu">
					 <?php	
						while($sub_sutun_menu=mysql_fetch_array($alt_m)){
							//
							$sub_alt_m=@mysql_query("select * from admin_pages where id_alt='".$sub_sutun_menu['id']."' ORDER BY 'id'", $elaqe);
							if(mysql_num_rows($sub_alt_m)>0){$sub_altm_oxmenu='<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>';} else {$sub_altm_oxmenu='';}
								
								//aktiv menu
								$sub_aktiv_axtar_altID=@mysql_query("select * from admin_pages where id='".$_GET['id']."' ORDER BY 'id'", $elaqe);
								if(mysql_num_rows($sub_aktiv_axtar_altID)>0){
									$sub_aktiv_menu_teyin=mysql_fetch_array($sub_aktiv_axtar_altID);
								}
											
								if($sub_sutun_menu['id']==$_GET['id'] || $sub_aktiv_menu_teyin['id_alt']==$sub_sutun_menu['id']){
									$sub_menuaktiv=' active';
								}else{
									$sub_menuaktiv='';
								}
								
								
					 ?>
						<li <?php echo 'class="'.$sub_menuaktiv.'"'; ?>>
						  <a href="index.php?id=<?php echo $sub_sutun_menu['id']; ?>"><?php echo $sub_sutun_menu['ikon']; ?> <?php echo $sub_sutun_menu['menu']; ?>
							<?php echo $sub_altm_oxmenu; ?>
						  </a>
								 <?php
									if(mysql_num_rows($sub_alt_m)>0){
								 ?>
								  <ul class="treeview-menu">
									<?php	
										while($sub_sub_sutun_menu=mysql_fetch_array($sub_alt_m)){
												//aktiv menu
												if($sub_sub_sutun_menu['id']==$_GET['id']){
													$sub_sub_menuaktiv=' active';
												}else{
													$sub_sub_menuaktiv='';
												}
									 ?>
									<li <?php echo 'class="'.$sub_sub_menuaktiv.'"'; ?>>
										<a href="index.php?id=<?php echo $sub_sub_sutun_menu['id']; ?>"><?php echo $sub_sub_sutun_menu['ikon']; ?> 3<?php echo $sub_sub_sutun_menu['menu']; ?>
										</a>
									</li>
									<?php
										}
									?>	
								  </ul>
								<?php
									}
								?>	
						</li>
						<?php
							}
						?>	
					  </ul>
				<?php
					}
				?>	  
        </li>
	  
	  
	  <?php
				}
		?>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<?php include("content.php"); ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<?php if($_GET['id'] == 3){?>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<?php } ?>

<!-- page script -->
<script>
  $(function () {
	  
	<?php if($_GET['id'] == 1){ ?>
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      labels: ["bazar ertəsi", "çərşəmbə", "çərşəmbə axşamı", "cümə", "cümə axşamı", "bazar", "talkuçka", "arablinka", "masazır"],
      datasets: [
        {
          label: "İstifadəçilər",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [250, 59, 80, 81, 56, 55, 40, 10, 200]
        },
        {
          label: "Sayta girənlər",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [28, 48, 40, 19, 86, 27, 90, 80, 45]
        }
      ]
    };

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);
	 <?php } else if($_GET['id'] == 2){
	?>	 
	/* $("[name=ad2]").click(function(){
		
	}); */
	
	
			
	$(document).ready(function () {
		
		function ajaxmuraciet(id_verilen){
			var indeks_verilen=idverilen;
			$.ajax({
				type: "post",
				url: "ajax_seh.php",
				data: {"indeks_verilen":indeks_verilen},
				dataType: "json",
				success: function(cavab){
					//alert(cavab.men+" - "+cavab.sira+" - "+cavab.alt);
					$('#linkmetn').val(cavab.men);
					$('#basliqmetn').val(cavab.sira);
					$('#melumatmetn').val(cavab.alt);
				}
			});
		}
		
		 
		$(".product-title").click(function(event) {
			idverilen = event.target.id;
			ajaxmuraciet(idverilen);
		});
		
		$(".paylasilmisideyis").click(function(event) {
			idverilen = event.target.id;
			ajaxmuraciet(idverilen);
		});

    });
	
		 
	 <?php } else if($_GET['id'] == 3){?>
	 
	//sehife menu admin



	 
	//redaktor
	 CKEDITOR.replace('editor1',{
			filebrowserBrowseUrl: 'plugins/ckfinder/browse.php',
			filebrowserImageBrowseUrl: 'plugins/ckfinder/browse.php?type=Images',
			filebrowserUploadUrl: 'plugins/ckfinder/upload.php',
			filebrowserImageUploadUrl: 'plugins/ckfinder/upload.php?type=Images',
			filebrowserWindowWidth: '900',
			filebrowserWindowHeight: '400'
			/* filebrowserBrowseUrl: 'plugins/ckfinder/ckfinder.html?Type=Images',
			filebrowserImageBrowseUrl: 'plugins/ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl: 'plugins/ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl: 'plugins/ckfinder/core/connctor/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl: 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash' */
		});﻿
	<?php } ?>
		
  });
</script>
</body>
</html>
