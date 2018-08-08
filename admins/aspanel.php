    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $kontent['kicik_basliqseh']; ?>
        <small>fizika.az</small>
      </h1>
      <ol class="breadcrumb">
        <li>
		<?php 
		
		$yolteyin=@mysql_query("select * from admin_pages where id='".$_GET['id']."'", $elaqe);
		if(mysql_num_rows($yolteyin)>0){
			$yolteyinnetice=mysql_fetch_array($yolteyin);
		}
		
		if($yolteyinnetice['id_alt']==0){
			echo $kontent['ikon']." ".$kontent['menu'];
		} else {
			$yolteyin2=@mysql_query("select * from admin_pages where id='".$yolteyinnetice['id_alt']."'", $elaqe);
			if(mysql_num_rows($yolteyin2)>0){
			$yolteyinnetice2=mysql_fetch_array($yolteyin2);
			}
			
			if($yolteyinnetice2['id_alt']==0){
				echo $yolteyinnetice2['ikon']." ".$yolteyinnetice2['menu']."<font class='ara_unvan'>></font>".$kontent['ikon']." ".$kontent['menu'];
			}else{
				$yolteyin3=@mysql_query("select * from admin_pages where id='".$yolteyinnetice2['id_alt']."'", $elaqe);
				if(mysql_num_rows($yolteyin3)>0){
				$yolteyinnetice3=mysql_fetch_array($yolteyin3);
				}
				
				if($yolteyinnetice3['id_alt']==0){
					echo $yolteyinnetice3['ikon']." ".$yolteyinnetice3['menu']."<font class='ara_unvan'>></font>".$yolteyinnetice2['ikon']." ".$yolteyinnetice2['menu']."<font class='ara_unvan'>></font>".$kontent['ikon']." ".$kontent['menu'];
				}
			}
		}
		
		
		
		?>
		</li>
        <!-- <li><a href="#">Charts</a></li>
        <li class="active">ChartJS</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary" id="diaqramsitatistik">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-fw fa-area-chart"></i>Sayta daxil olanların həftəlik statistikası</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
          </div>

          <!-- bura div -->
<div class="box box-primary" id="normalid">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-fw fa-cloud-upload"></i>Son paylaşılmış sənədlər</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: block;">
              <ul class="products-list product-list-in-box">
                <li class="item">
				<span class="product-description">
					<i class="fa fa-fw fa-file-word-o text-aqua paylasmalar"></i>

                    <a href="javascript:void(0)" class="product-title">Word senedi.doc</a>
                           <font>- Fiziki qanunlar.Labaratoriya isleri</font>
                        </span>
                </li>
                <!-- /.item -->
                <li class="item">
				<span class="product-description">
					<i class="fa fa-fw fa-file-pdf-o text-red paylasmalar"></i>

                    <a href="javascript:void(0)" class="product-title">PDF senedi.pdf</a>
                           <font>- Tercubeler ve fiziki hadiseler</font>
                        </span>
                </li>
                <!-- /.item -->
                <li class="item">
                    <span class="product-description">
					<i class="fa fa-fw fa-file-excel-o text-green paylasmalar"></i>

                    <a href="javascript:void(0)" class="product-title">Excel senedi.xls</a>
                           <font>- hesabatlar.telebelerin hesabti</font>
                        </span>

                </li>
                <!-- /.item -->
                <li class="item">
				<span class="product-description">
					<i class="fa fa-fw fa-file-powerpoint-o text-orange paylasmalar"></i>

                    <a href="javascript:void(0)" class="product-title">Powerpoint.ptt</a>
                           <font>- prezentasya senedi</font>
                        </span>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center" style="display: block;">
              <a href="javascript:void(0)" class="uppercase">bütün paylaşmalara bax</a>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- bura 2-sutun div -->
		<div class="col-sm-8 col-xs-6">
		<!-- bura bildirisler div -->
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-bell"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Bildirişlər</span>
              <span class="info-box-number">18</span>
            </div>
			<div id="etrafli">
			<a href="#" class="small-box-footer">
              Ətraflı <i class="fa fa-arrow-circle-right"></i>
            </a>
			</div>
            <!-- /.info-box-content -->
          </div>
		  <!-- bura suallar div -->
		  <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa  fa-question-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Test sualları</span>
              <span class="info-box-number">128</span>
            </div>
			<div id="etrafli">
			<a href="#" class="small-box-footer">
              Ətraflı <i class="fa fa-arrow-circle-right"></i>
            </a>
			</div>
            <!-- /.info-box-content -->
          </div>
		  <!-- bura istifadeciler div -->
			<div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">İstifadəçilər</span>
              <span class="info-box-number">24</span>
            </div>
			<div id="etrafli">
			<a href="#" class="small-box-footer">
              Ətraflı <i class="fa fa-arrow-circle-right"></i>
            </a>
			</div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
          <!-- bura div -->
		  
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>