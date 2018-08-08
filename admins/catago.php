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
        <div class="col-md-4">
          <!-- bura div -->

		<div class="box box-info menularfreym">
            <div class="box-header">
              <h3 class="box-title">Menular
                <small>Saytın menularının idarə olunması</small>
              </h3>
            </div>
            <!-- /.box-header -->
			<iframe id="freym" src="agacmenu/1/index.php" frameborder="0"></iframe>
        </div>


          <!-- bura div -->
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-8">
          <!-- bura 2-sutun div -->
		  
		  <div class="box box-info">

			<div style='width: 60%; margin: 10px;'>
					
				<div class="box-header">
              <h3 class="box-title">Səhifəni seç</h3>
              
            </div>
                  <select class="form-control">
				  <?php ?>
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
               
			
            <div class="box-header">
              <h3 class="box-title">
                <small>Redaktor</small>
              </h3>
              
            </div>
           
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80" style="visibility: hidden; display: none;">
					</textarea>
              </form>
            </div>
      
			</div>
         
          </div>
		  
		  
		  
		 <!-- <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Səhifələr
                <small>Saytın səhifə redaktoru</small>
              </h3>
              
            </div>
           
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80" style="visibility: hidden; display: none;">
					</textarea>
              </form>
            </div>
          </div> -->
		  

          <!-- bura div -->
		  
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>