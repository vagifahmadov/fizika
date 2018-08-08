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
          <!-- bura div -->


          <!-- bura div -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- bura 2-sutun div -->
		
          <!-- bura div -->
		  
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>