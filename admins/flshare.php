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
		?></a></li>
        <!-- <li><a href="#">Charts</a></li>
        <li class="active">ChartJS</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
	<!-- popup pencere -->
	<div id="popuppenc1" class="pencere">
	<div class="popuppenc">
		<h2>Paylaşmaların redaktə olunması</h2>
		<a class="baglapupup" href="#">&times;</a>
		<div class="govde">
			
			<h4>Link</h4>

			<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-link"></i></span>
			<input type="text" class="form-control" id='linkmetn' placeholder="linki daxil et">
			</div>
			<label>Başlıq</label>
			<input class="form-control" type="text" id='basliqmetn' placeholder="Default input">

			<div class="form-group">
			  <label>Əlavə məlumat</label>
			  <textarea class="form-control" rows="3" id='melumatmetn' placeholder="Enter ..."></textarea>
			</div>
			<div id="duymepaylas"><button type="button" class="btn btn-block btn-primary">Dəyiş</button></div>
						
		</div>
	</div>
	</div>
	<!-- popup pencere end-->
	
	
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="row">
        <div class="col-md-12">
          <!-- bura div -->
		<div class="box box-primary" id="senedpaylas">
              <h4>Yeni linki buraya daxil edin</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-link"></i></span>
                <input type="text" class="form-control" placeholder="linki daxil et">
              </div>
<label>Başlıq</label>
<input class="form-control" type="text" placeholder="Default input">

<div class="form-group">
                  <label>Əlavə məlumat</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
<div id="duymepaylas"><button type="button" class="btn btn-block btn-primary">Paylaş</button></div>




              <!-- /.row -->

              <!-- /input-group -->

              <!-- /input-group -->


              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>

          <!-- bura div -->

        </div>

          <!-- bura div -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- bura 2-sutun div -->
		<div class="col-md-16">
		<!-- bura bildirisler div -->
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

                    <a href="#popuppenc1" class="product-title" id='1'>Word senedi.doc</a>
                           <font>- Fiziki qanunlar.Labaratoriya isleri</font>
						   <a href="#" class="paylasilmisisil"><i class="fa fa-fw fa-remove text-red" id='1'></i></a>
						   <a href="#popuppenc1" class="paylasilmisideyis"><i class="fa fa-fw fa-pencil text-orange" id='1'></i></a>
                        </span>
                </li>
                <!-- /.item -->
                <li class="item">
				<span class="product-description">
					<i class="fa fa-fw fa-file-pdf-o text-red paylasmalar"></i>

                    <a href="#popuppenc1" class="product-title" id='2'>PDF senedi.pdf</a>
                           <font>- Tercubeler ve fiziki hadiseler</font>
						   <a href="#" class="paylasilmisisil"><i class="fa fa-fw fa-remove text-red" id='2'></i></a>
						   <a href="#popuppenc1" class="paylasilmisideyis"><i class="fa fa-fw fa-pencil text-orange" id='2'></i></a>
                        </span>
                </li>
                <!-- /.item -->
                <li class="item">
                    <span class="product-description">
					<i class="fa fa-fw fa-file-excel-o text-green paylasmalar"></i>

                    <a href="#popuppenc1" class="product-title" id='3'>Excel senedi.xls</a>
                           <font>- hesabatlar.telebelerin hesabti</font>
						   <a href="#" class="paylasilmisisil"><i class="fa fa-fw fa-remove text-red" id='3'></i></a>
						   <a href="#popuppenc1" class="paylasilmisideyis"><i class="fa fa-fw fa-pencil text-orange" id='3'></i></a>
                        </span>

                </li>
                <!-- /.item -->
                <li class="item">
				<span class="product-description">
					<i class="fa fa-fw fa-file-powerpoint-o text-orange paylasmalar"></i>

                    <a href="#popuppenc1" class="product-title" id='4'>Powerpoint.ptt</a>
                           <font>- prezentasya senedi</font>
						   <a href="#" class="paylasilmisisil"><i class="fa fa-fw fa-remove text-red" id='4'></i></a>
						   <a href="#popuppenc1" class="paylasilmisideyis"><i class="fa fa-fw fa-pencil text-orange" id='4'></i></a>
                        </span>
                </li>
				 <!-- /.item -->
				<li class="item">
				<span class="product-description">
					<i class="fa fa-fw fa-file-image-o text-blue paylasmalar"></i>

                    <a href="#popuppenc1" class="product-title" id='5'>Skan.jpeg</a>
                           <font>- Skan olmuş sənəd.</font>
						   <a href="#" class="paylasilmisisil"><i class="fa fa-fw fa-remove text-red" id='5'></i></a>
						   <a href="#popuppenc1" class="paylasilmisideyis"><i class="fa fa-fw fa-pencil text-orange" id='5'></i></a>
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
          
		  <!-- bura suallar div -->
		  
		  <!-- bura istifadeciler div -->
			
          <!-- /.info-box -->
        </div>
          <!-- bura div -->
		  
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>