<?php
include("qurulum.php");
//id
if(!isset($_GET['id'])){
	$_GET['id']=1;
}

if(!is_numeric($_GET['id'])){
	$_GET['id']=0;
}
//id


// alt_m
if(!isset($_GET['alt_m'])){
	$_GET['alt_m']=0;
}

if(!is_numeric($_GET['alt_m'])){
	$_GET['alt_m']=0;
	$_GET['id']=0;
}
// alt_m

//detect browser
if(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]),strtolower("MSIE"))){
	$browser="ie";	
}else {
	$browser="other";
}
//detect browser

//diqqet menu class
$menudiqqet='';
if($browser=="ie"){
	$menudiqqet="IE";
}

//diqqet menu class
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php 				$title=@mysql_fetch_array(mysql_query('select title from sehifeler where id='.$_GET['id'].'')); 								if(empty($title)){					echo "Xəta";				}else{					echo $title['title'];				}		?>
</title>
<link href="fizika.css" rel="stylesheet" type="text/css" />

<!-- bootstrap stil ve ikonlar -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- bootstrap stil ve ikonlar son-->

<!-- MENU -->
<link type="text/css" href="menu/menu.css" rel="stylesheet" />
<!-- RESPONSIV MENU --><link href="narko.css" rel="stylesheet" media="screen" />

<!--icon-->
<link href="img/icon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<link rel="icon" href="img/icon.ico" type="image/x-icon">
<!--icon-->
<script type="text/javascript" src="menu/jquery.js"></script>
<!-- MENU -->

<!-- Autocompelete -->
<script type="text/javascript" src="autocompelete/js/bsn.AutoSuggest_2.1.3.js" charset="utf-8"></script>

<link rel="stylesheet" href="autocompelete/css/autosuggest_inquisitor.css" type="text/css" media="screen" charset="utf-8" />
<!-- Autocompelete -->


<!--jquery-->
<link href="jquery/css/custom-theme/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script src="jquery/js/jquery-ui-1.10.3.custom.js"></script>
<script>
sehifeerror="success";

    //menu diqqet
	$(function(){
	   
       //responsiv menu
	$('#cssmenu').prepend('<div id="indicatorContainer"><div id="pIndicator"><div id="cIndicator"></div></div></div>');
		var activeElement = $('#cssmenu>ul>li:first');
	
		$('#cssmenu>ul>li').each(function() {
			if ($(this).hasClass('active')) {
				activeElement = $(this);
			}
		});
	
	
		var posLeft = activeElement.position().left;
		var elementWidth = activeElement.width();
		posLeft = posLeft + elementWidth/2 -6;
		if (activeElement.hasClass('has-sub')) {
			posLeft -= 6;
		}
	
		$('#cssmenu #pIndicator').css('left', posLeft);
		var element, leftPos, indicator = $('#cssmenu pIndicator');
		
		$("#cssmenu>ul>li").hover(function() {
			element = $(this);
			var w = element.width();
			if ($(this).hasClass('has-sub'))
			{
				leftPos = element.position().left + w/2 - 12;
			}
			else {
				leftPos = element.position().left + w/2 - 6;
			}
	
			$('#cssmenu #pIndicator').css('left', leftPos);
		}
		, function() {
			$('#cssmenu #pIndicator').css('left', posLeft);
		});
	
		$('#cssmenu>ul').prepend('<li id="menu-button"><a>Menu</a></li>');
		$( "#menu-button" ).click(function(){
				if ($(this).parent().hasClass('open')) {
					$(this).parent().removeClass('open');
				}
				else {
					$(this).parent().addClass('open');
				}
    	});
		//responsiv menu

		$(".menu").hover(
	function(){
			var hundurluk_diqqet=$(document).height()-203;
			$('.menu_diqqet<?php echo $menudiqqet; ?>').height(hundurluk_diqqet);
			<?php if ($menudiqqet!='IE') { ?>$(".menu_diqqet").fadeIn(300);<?php } else {?>
			$(".menu_diqqet<?php echo $menudiqqet; ?>").show();
			<?php } ?>
			//var menu_vaxt=setTimeout(function(){$(".menu_diqqet").fadeIn(300);}, 2000);
       },
    function(){
			<?php if ($menudiqqet!='IE') { ?>$(".menu_diqqet").fadeOut(150);<?php } else {?>
			$(".menu_diqqet<?php echo $menudiqqet; ?>").hide();
			<?php } ?>
			//clearTimeout(menu_vaxt);
			//$('body .esas, .ayaq').css("-webkit-filter","blur(0px)");
	})
	})

	$(document).ready(function(){
	   
       $('.bas_balacaa').hide();       
		var hundurluk_diqqet=$(document).height()-203;
		$('.menu_diqqet<?php echo $menudiqqet; ?>').height(hundurluk_diqqet);
	//menu diqqet
		
		<?php
			$sorgu_sehife="select sh from sehifeler where id=".$_GET['id'];
			$melumatvarsa=mysql_num_rows(mysql_query($sorgu_sehife, $elaqe));
			
			if($melumatvarsa>0){
		?>
		//axtaris
		$(".axtar").submit(function() {
            
            $(".autosuggest").hide();
			$("#s").blur();
				//loading
				NProgress.start();
				setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
				//loading
				//TITLE axtar
				if($("#s").val().length > 2){
					document.title=$("#s").val()+" - üzrə axtarışın nəticəsi";
				}
				//TITLE axtar
				var url = "search.php"; // the script where you handle the form input.
				$.ajax({
					   type: "POST",
					   url: url,
					   data: {axtar:$("#s").val(), klik:1}, // serializes the form's elements.
					   success: function(data)
					   {
						   	if($("#s").val().length > <?php $say_axtarsimvol=@mysql_fetch_array(mysql_query('select text from terminler where type="count" and sub_type="searchtext"')); echo $say_axtarsimvol['text'];  ?>){
							   $('.orta').html(data); // show response
							   $('li.back').hide();
							   $('.slayd').hide();
							   $("#s").blur();
								//load more axtar
							    $("#davaminyukle").click(function(){
										var davam_id=$(".axtaris_result li:last").attr("id");
										
								        $('.ardi').show();
								        $.ajax({
										type: "POST",
								        url: "search.php",
										data: {axtar:$("#s").val(), davam_id:davam_id},
								        success: function(html)
								        {
                                            $('.ardi').hide();
											//netice
											if(html == <?php $warsrch=@mysql_fetch_array(mysql_query('select text from terminler where type="war" and sub_type="nosearc"')); echo '"'.$warsrch['text'].'"';  ?>){
                                                $(".ardi").fadeIn(200);
                                                $( ".ardi" ).addClass( "ardielave" );
												$(".ardi").html(html);
												$("#davaminyukle").hide();
											}else{
												$(".orta ul").append(html);
											}
											//netice
								        }
								        });
							    });
								//load more axtar
						   	}else{
								popup("<?php $poup_sh=@mysql_fetch_array(mysql_query('select text from terminler where type="war" and sub_type="popup"')); echo $poup_sh['text']; ?>");
								$("#s").blur();
							}
					   }
					 });
					return false; // avoid to execute the actual submit of the form.
        });
		//axtaris
		<?php
			}else{
		?>
		sehifeerror="error404";
		document.title="Xəta";
		$(document).ready(function(){$('li.back').hide();});
		<?php } ?>
		
		$(window).load(function() {
			//aktiv link
			aObj = $('.menu li a');
			for(i=0;i<aObj.length;i++) {
				if(document.location.href.indexOf(aObj[i].href)>=0) {
				  aObj[i].className='back';
				}
			}
		});
		
		//AJAX SEHIFE
		$.ajax({
			type: "GET",
	        url: "sehifeler.php",
			data: {id:<?php echo $_GET['id']; ?>},
	        success: function(sehife_result)
	        {
				//
				$('.orta').html(sehife_result);
				//
			}
        });
		//AJAX SEHIFE
		
		//dialoq qutusu
		//Popup dialog
		function popup(message) {
				
			// get the screen height and width  
			var maskHeight = $(document).height();  
			var maskWidth = $(window).width();
			
			// calculate the values for center alignment
			var dialogTop =  (maskHeight/3) - ($('#dialog-box').height());  
			var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2); 
			
			// assign values to the overlay and dialog box
			$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
			$('#dialog-box').css({top:dialogTop, left:dialogLeft}).show();
			
			// display the message
			$('#dialog-message').html(message);
					
		}
		// if user clicked on button, the overlay layer or the dialogbox, close the dialog	
		$('a.btn-ok, #dialog-overlay, #dialog-box').click(function () {
			$('#dialog-overlay, #dialog-box').hide();		
			return false;
		});
		
		// if user resize the window, call the same function again
		// to make sure the overlay fills the screen and dialogbox aligned to center	
		$(window).resize(function () {
			//only do it if the dialog box is not hidden
			if (!$('#dialog-box').is(':hidden')) popup();		
		});
		//dialoq qutusu		
		});
</script>

<!-- MENU -->
<script type="text/javascript" src="menu/menu.js"></script>
<!-- MENU -->

<style>
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	
	/*autocompelet*/
		.axtaris_qutu {
		position: relative;
		left: 0px;
		margin: 10px 0px 0px 0px;
		width: 250px;
		background-color: #0a7dbb;
		-moz-border-radius: 7px;
		-webkit-border-radius: 7px;
		border: 2px solid #000;	
		color: #fff;
		font-family: Helvetica;
		font-size: 11px;
		opacity:0.9;
		border-color:#0C6C9E;
		top:130px;
		z-index:11;
	}
	
	.axtaris_siyahi {
		margin: 0px;
		padding: 0px;
		list-style: none;
		padding-left:2px;
	}
	
	.axtaris_siyahi li {
		
		margin: 0px 0px 3px 0px;
		padding: 3px;
		cursor: pointer;
	}
	
	.axtaris_siyahi li:hover {
		background-color: #139EEA;
	}
	.axtaris_siyahi_uzerinde_cursor{
		background-color: #000;
	}
	/*autocompelet*/	
	</style>
<!--jquery-->

<!-- Start Slide -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css"/>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
<!-- End Slide -->


<!--search-->
<link rel="stylesheet" href="search/css/style.css">
<script src="search/js/jquery.color.js"></script>
<script src="search/js/script.js"></script>
<!--search-->

<!--icon-->
<link rel="stylesheet" type="text/css" href="css/iconhover.css"/>
<!--icon-->

<!--page progress-->
<link href='pageprogress/nprogress.css' rel='stylesheet' />
<script src='pageprogress/nprogress.js'></script>
<!--page progress-->
</head>

<body class="body">


<div class="root_main">

<!-- fixed header basliq -->
<div class="bas_balacaa">

<div class="menus">
<div id="menu_fx">
<table border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
    <td width="100%" valign="middle" align="center">

	<!--fixed header - MENU BAS-->
   <!--responsiv menu-->
<div class="menu_qutusu">
<div id='cssmenu'>
<ul>

<?php
		$menu=@mysql_query("select * from menu where alt_m='0' ORDER BY 'sira_n'", $elaqe);
		while($sutun_menu=mysql_fetch_array($menu)){
		//
		$alt_m=@mysql_query("select * from menu where alt_m='".$sutun_menu['id']."' ORDER BY 'sira_n'", $elaqe);
		if(mysql_num_rows($alt_m)>0){$klass_menu="class='has-sub'";} else {$klass_menu='';}
?>
        <li <?php echo $klass_menu; ?> ><a href="index.php?id=<?php echo $sutun_menu['id']."&alt_m=".$sutun_menu['alt_m']; ?>" ><span><?php echo $sutun_menu['menu']; ?></span></a>
		<?php if(mysql_num_rows($alt_m)>0){ ?>
      <ul>
      <?php while($altmenu=mysql_fetch_array($alt_m)){
		  		$alt_alt_m=@mysql_query("select * from menu where alt_m='".$altmenu['id']."' ORDER BY 'sira_n'", $elaqe);
				if(mysql_num_rows($alt_alt_m)>0){$klass_menu_m="class='has-sub'";} else {$klass_menu_m='';}
		  ?>
      <li <?php echo $klass_menu_m; ?>><a href="index.php?id=<?php echo $altmenu['id']."&alt_m=".$altmenu['alt_m']; ?>" ><span><?php echo $altmenu['menu']; ?></span></a>
	  <?php if(mysql_num_rows($alt_alt_m)>0){ ?>
                    <ul>
                  <?php while($alt_altmenu=mysql_fetch_array($alt_alt_m)){ ?>
                        <li><a href="index.php?id=<?php echo $alt_altmenu['id']."&alt_m=".$altmenu['alt_m']; ?>"><span><?php echo $alt_altmenu['menu']; ?></span></a></li>
					<?php } ?>
                    </ul>
                    <?php } ?></li>
             <?php } ?>
            </ul>
      <?php } ?></li>
        <?php } ?>

</ul>
</div>
</div>
<!--responsiv menu son-->
    <!--fixed header - MENU SON-->
    
</td></tr></table>
</div>
</div>

</div>
<!-- fixed header basliq -->


<div class="main">

<div class="basliq novbeti">

<div class="bas novbeti" id="bashisse">
<div class="bann left-sol">

<!--icon-->
<div class="row<?php echo $menudiqqet; ?>">
<?php if ($browser=='ie') { ?>
<a href="https://facebook.com/fizika.az" target="_blank" style="text-decoration:none;">
<img class="socicon" src="img/fb.png" />
</a>

<a href="https://google.com" target="_blank" style="text-decoration:none;">
<img class="socicon" src="img/g+.png" />
</a>

<a href="https://youtube.com" target="_blank" style="text-decoration:none;">
<img class="socicon" src="img/ytb.png" />
</a>
<?php } else { ?>
    <div class="block">
        <a href="https://facebook.com/fizika.az" target="_blank" class="hovicon mini effect-3 sub-b">f</a>
    </div>
    <div class="block">
        <a href="https://google.com" target="_blank" class="hovicon mini effect-3g sub-b">g+</a>
    </div>
    <div class="block">
        <a href="https://youtube.com" target="_blank" class="hovicon mini effect-2 sub-b">
        <img src="img/ytb2.png" border="0" style="margin:0px; padding:0px;" />
        </a>
    </div>
<?php } ?>
</div>
<!--icon-->

<!--search-->
<form class="axtar" action="" method="get">
<div class="input<?php echo $menudiqqet; ?>">
<input type="text" id="testid" value="" style="font-size: 10px; width: 20px; display:none;" disabled="disabled" />
<input type="text" name="s" id="s" value="Axtarın..." autocomplete="off"/>
<input type="submit" value="axtar" style="display: none;" />
</div>
</form>
<!--search-->
</div>
<div class="logo left-sol">
  <img src="img/logo.png" width="100%" height="auto" />
</div>
</div>


<div class="menus">

<div id="menu">
<table border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
    <td width="100%" valign="middle" align="center">

	<!--MENU BAS-->
    <ul class="menu">
    <?php
		$menu=@mysql_query("select * from menu where alt_m='0' ORDER BY 'sira_n'", $elaqe);
		while($sutun_menu=mysql_fetch_array($menu)){
		//
		$alt_m=@mysql_query("select * from menu where alt_m='".$sutun_menu['id']."' ORDER BY 'sira_n'", $elaqe);
?>
        <li id="menu_teyin<?php echo $sutun_menu['id']; ?>"><a href="index.php?id=<?php echo $sutun_menu['id']."&alt_m=".$sutun_menu['alt_m']; ?>" <?php if(mysql_num_rows($alt_m)>0){ ?>class="parent"<?php } ?>><span><?php echo $sutun_menu['menu']; ?></span></a>
		<?php if(mysql_num_rows($alt_m)>0){ ?>
      <ul>
      <?php while($altmenu=mysql_fetch_array($alt_m)){
		  		$alt_alt_m=@mysql_query("select * from menu where alt_m='".$altmenu['id']."' ORDER BY 'sira_n'", $elaqe);
		  ?>
      <li><a href="index.php?id=<?php echo $altmenu['id']."&alt_m=".$altmenu['alt_m']; ?>" <?php if(mysql_num_rows($alt_alt_m)>0){ ?>class="parent"<?php } ?>><span><?php echo $altmenu['menu']; ?></span></a>
	  <?php if(mysql_num_rows($alt_alt_m)>0){ ?>
                    <ul>
                  <?php while($alt_altmenu=mysql_fetch_array($alt_alt_m)){ ?>
                        <li><a href="index.php?id=<?php echo $alt_altmenu['id']."&alt_m=".$altmenu['alt_m']; ?>"><span><?php echo $alt_altmenu['menu']; ?></span></a></li>
					<?php } ?>
                    </ul>
                    <?php } ?></li>
             <?php } ?>
            </ul>
      <?php } ?></li>
        <?php } ?>
    </ul>
    <!--MENU SON-->
    
</td></tr></table>
</div>

</div>

</div>

<div class="esas">
<?php if ($_GET['id']==1 && $_GET['alt_m']==0){ ?>
<div class="slayd">
<!--slide-->
	<div id="wowslider-container1">
	<div class="ws_images"><?php 
 $slayd=@mysql_query("SELECT * FROM slayd order by id", $elaqe);

$i_slayd=0; 
 while($slayd_img=mysql_fetch_array($slayd)){
?><span><img src="<?php echo $slayd_img['img'] ?>" alt="<?php echo $slayd_img['title']; ?>" title="<?php echo $slayd_img['title']; ?>" id="wows<?php echo $i_slayd; ?>"/>
<?php echo $slayd_img['title']; ?>
</span>
<?php
	$i_slayd++;
 }
?></div>   
<div class="ws_bullets"><div>
<?php
if(mysql_num_rows($slayd)>1){
	//ikonlar
	$salyd_ikon=@mysql_query("SELECT * FROM slayd order by id", $elaqe);
	$i_slayd=0;
	$say_slayd=1;
	 while( $slayd_ik = mysql_fetch_array($salyd_ikon) ){
	?>
<a href="#wows<?php echo $i_slayd; ?>" title="<?php echo $slayd_ik['title']; ?>"><?php echo $say_slayd; ?></a>
<?php
		$say_slayd++;
		$i_slayd++;
	 }
	 //ikonlar
}else{
	echo "<script>$(function() { $('.ws_next').hide(); $('.ws_prev').hide(); });</script>";
}
?>

</div></div>
<div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="engine1/script.js"></script>
<!--slide-->
</div>
<?php } ?>
<div class="orta">
<div class="ajax_yuklenir"><img src="img/ajax_load.gif"/></div>
</div>

<?php if($_GET['id'] == 1 && $_GET['alt_m']==0) { ?>
<!--bootstrap elave bolme-->
<div class="elavediv_bootstrap">

<!--bolme1-->
<div class="col-lg-4" id='element1'>
<span class="glyphicon glyphicon-scale"></span>
<h2>Heading</h2>
<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
<p><button type="button" class="btn btn-warning">Ardı ...</button></p>
</div>

<!--bolme2-->
<div class="col-lg-4" id='element2'>
<span class="glyphicon glyphicon-flash"></span>
<h2>Heading</h2>
<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
<p><button type="button" class="btn btn-warning">Ardı ...</button></p>
</div>

<!--bolme3-->
<div class="col-lg-4" id='element3'>
<span class="glyphicon glyphicon-education"></span>
<h2>Heading</h2>
<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
<p><button type="button" class="btn btn-warning">Ardı ...</button></p>
</div>
<div class="novbeti"></div>


</div>
<?php } ?>


</div>
</div>
<div class="ayaq"></div>
<div class="menu_diqqet<?php echo $menudiqqet; ?>"></div>
</div>
<!--metin qutusu-->
<div id="dialog-overlay"></div>
<div id="dialog-box">
	<div class="dialog-content">
		<div id="dialog-message"></div>
		<a href="#" class="button">Close</a>
	</div>
</div>
<!--metin qutusu-->

<script>
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
    
    //autocompelet
    var options = {
		script:"autocompelete/test.php?json=true&limit=6&",
		varname:"input",
		json:true,
		shownoresults:false,
		maxresults:6,
		callback: function (obj) { document.getElementById('testid').value = obj.id; }
	};
	var as_json = new bsn.AutoSuggest('testinput', options);
	
	
	var options_xml = {
		script: function (input) { return "autocompelete/test.php?input="+input+"&testid="+document.getElementById('testid').value; },
		varname:"input"
	};
	var as_xml = new bsn.AutoSuggest('s', options_xml);
   
    //fixed header basliq
    $(window).scroll(function() {
        if ($(this).scrollTop() > 203){  
            $('.bas_balacaa').show();
            $('.bas_balacaa').animate({top: '70px'});
          }
          else{
            $('.bas_balacaa').hide();
            $('.bas_balacaa').css("top", '-70px');
          }
    });
	<?php if($_GET['id'] == 1 && $_GET['alt_m']==0) { ?>
	//animated bootstrap elave elementer
	$(document).ready(function(){
		$("#element1").animate({left: 0}, "90000", 'linear');
		$("#element2").animate({bottom: 0}, "90000", 'linear');
		$("#element3").animate({right: 0}, "90000", 'linear');
	});
    <?php } ?>
    //responsiv sehife
    $( window ).resize(function() {
        if (screen.width < 1100) {
            $( "div.col-lg-4" ).toggleClass( "col-lg-8" );
        }
    })
</script>
</body>
</html>