<?php
include("qurulum.php");
unset($_SESSION['axtaris_soz']);
//
if(empty($_GET['id'])){
$_GET['id']=1;
}
//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test</title>
<link href="fizika.css" rel="stylesheet" type="text/css" />

<!-- MENU -->
<link type="text/css" href="menu/menu.css" rel="stylesheet" />
<script type="text/javascript" src="menu/jquery.js"></script>
<script type="text/javascript" src="menu/menu.js"></script>
<!-- MENU -->


<!--jquery-->
<link href="jquery/css/custom-theme/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script src="jquery/js/jquery-ui-1.10.3.custom.js"></script>
<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: true,
			width: 400,
      		modal: true,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});
		


		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	
	
	//autocomplete
	function lookup(s) {
		if(s.length == 0) {
			// Hide the suggestion box.
			$('#suretliaxtaris_sorgu').hide();
		} else {
			$.post("autocompelete/rpc.php", {queryString: ""+s+""}, function(data){
				if(data.length >0) {
					//$('input#s').keydown(function(d){
					//if (d.keyCode != 27) {
					$('#suretliaxtaris_sorgu').fadeIn();
					//}}
					
					$('#autosuretliaxtaris_sorguList').html(data);
					hessas_bagla();
				}
			});
				//kesy
				/*
				ALT: 18,
				BACKSPACE: 8,
				CAPS_LOCK: 20,
				COMMA: 188,
				COMMAND: 91,
				COMMAND_LEFT: 91, // COMMAND
				COMMAND_RIGHT: 93,
				CONTROL: 17,
				DELETE: 46,
				DOWN: 40,
				END: 35,
				ENTER: 13,
				ESCAPE: 27,
				HOME: 36,
				INSERT: 45,
				LEFT: 37,
				MENU: 93, // COMMAND_RIGHT
				NUMPAD_ADD: 107,
				NUMPAD_DECIMAL: 110,
				NUMPAD_DIVIDE: 111,
				NUMPAD_ENTER: 108,
				NUMPAD_MULTIPLY: 106,
				NUMPAD_SUBTRACT: 109,
				PAGE_DOWN: 34,
				PAGE_UP: 33,
				PERIOD: 190,
				RIGHT: 39,
				SHIFT: 16,
				SPACE: 32,
				TAB: 9,
				UP: 38,
				WINDOWS: 91 // COMMAND
				*/
				//keys

		}
	} // lookup
	
	function fill(thisValue) {
		$('#s').val(thisValue);
		setTimeout("$('#suretliaxtaris_sorgu').hide();", 200);
	}
	
	//sil autocompelete
	$(function() {
	$('body').click(function() {
       $('#suretliaxtaris_sorgu').fadeOut();
      });
	});
	//sil autocompelete
	
		//mouse out
		function hessas_bagla(){
		$("#suretliaxtaris_sorgu").mouseout(function(){
			//chek hover
			  if(!$("#suretliaxtaris_sorgu").is(":hover")) {
					var vaxt=setTimeout(function(){$('#suretliaxtaris_sorgu').fadeOut();}, 5000);
				}
			//chek hover
		});
		
		//is not mouse over
		if(!$("#suretliaxtaris_sorgu").is(":hover")) {
			var vaxt=setTimeout(function(){$('#suretliaxtaris_sorgu').fadeOut();}, 16000);
    	}


		$('#suretliaxtaris_sorgu').mouseover(function(){
			clearTimeout(vaxt);
			//$('#suretliaxtaris_sorgu').show()
		});		
		
		
		//escape
		$('input#s').keydown(function(e){
			if (e.keyCode == 27) {
				clearTimeout(vaxt);
				$('#suretliaxtaris_sorgu').fadeOut();
			}
		});
		//end
		};
	//autocomplete
	
	//menu diqqet
	$(
	function(){
		$(".menu").hover(
	function(){
			var hundurluk_diqqet=$(document).height()-203;
			$('.menu_diqqet').height(hundurluk_diqqet);
			$(".menu_diqqet").fadeIn(300);
			//var menu_vaxt=setTimeout(function(){$(".menu_diqqet").fadeIn(300);}, 2000);
       },
    function(){
			$(".menu_diqqet").fadeOut(150);
			//clearTimeout(menu_vaxt);
			//$('body .esas, .ayaq').css("-webkit-filter","blur(0px)");
	})
	})
	
	$(document).ready(function(){
		var hundurluk_diqqet=$(document).height()-203;
		$('.menu_diqqet').height(hundurluk_diqqet);		
	});
	//menu diqqet
	</script>
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

<div class="main">

<div class="basliq novbeti">

<div class="bas novbeti">
<div class="bann left-sol">

<!--icon-->
<div class="row">
    <div class="block">
        <a href="https://facebook.com/fizika.az" target="_blank" class="hovicon mini effect-3 sub-b">f</a>
    </div>
    <div class="block">
        <a href="https://google.com" target="_blank" class="hovicon mini effect-3g sub-b">g+</a>
    </div>
    <div class="block">
        <a href="https://google.com" target="_blank" class="hovicon mini effect-3g sub-b">
        <img src="img/youtube.png" border="0" class="youtube" style="margin:0px; padding:0px;" />
        </a>
    </div>
</div>
<!--icon-->

<!--search-->
<form action="search.php" method="post" class="axtar">
<div class="input">
<input type="text" name="s" id="s" value="Axtarın..." onkeyup="lookup(this.value);" autocomplete="off"/>
</div>

<!--autocomplete-->
<div class="axtaris_qutu" id="suretliaxtaris_sorgu" style="display: none;">
				<img src="autocompelete/upArrow.png" style="position: relative; top: -12px; left: 121px;" alt="upArrow" />
				<div class="axtaris_siyahi" id="autosuretliaxtaris_sorguList">
				</div>
			</div>
<!--autocomplete-->

</form>
<!--search-->
</div>
<div class="logo left-sol">
  <img src="img/logo.png" width="421" height="134" />
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
?>
        <li><a href="test.php?id=<?php echo $sutun_menu['id']; ?>" class="parent"><span><?php echo $sutun_menu['menu']; ?></span></a>
         <?php
	$alt_m=@mysql_query("select * from menu where alt_m='".$sutun_menu['id']."' ORDER BY 'sira_n'", $elaqe);
		
	if(mysql_num_rows($alt_m)>0){
	  ?>
      <ul>
      <?php while($altmenu=mysql_fetch_array($alt_m)){ ?>
      <li><a href="test.php?id=<?php echo $altmenu['id']; ?>" class="parent"><span><?php echo $altmenu['menu']; ?></span></a>
                    <?php
						$alt_alt_m=@mysql_query("select * from menu where alt_m='".$altmenu['id']."' ORDER BY 'sira_n'", $elaqe);
							
						if(mysql_num_rows($alt_alt_m)>0){
					?>
                    <ul>
                  <?php while($alt_altmenu=mysql_fetch_array($alt_alt_m)){ ?>
                        <li><a href="test.php?id=<?php echo $alt_altmenu['id']; ?>" class="parent"><span><?php echo $alt_altmenu['menu']; ?></span></a></li>
					<?php } ?>
                    </ul>
                    <?php } ?>
                </li>
             <?php } ?>
            </ul>
      <?php } ?>
        </li>
        <?php } ?>
    </ul>
    <!--MENU SON-->
    
</td></tr></table>
</div>

</div>
</div>

<div class="esas novbeti">
<div class="slayd">
<!--slide-->
	<div id="wowslider-container1">
	<div class="ws_images">
<span><img src="data1/images/1.png" alt="Pizza" title="Pizza" id="wows0"/>Pizza sifarişi</span>
<span><img src="data1/images/2.png" alt="Taksi" title="Taksi" id="wows1"/>Taksi *999-dan başqa buradanda sifariş edə bilərsiniz</span>
<span><img src="data1/images/3.png" alt="Kinoteatıra bilet" title="Kinoteatır" id="wows2"/>Kinoteatıra bilet sifariş edə bilərsiniz</span>
<span><img src="data1/images/4.png" alt="Turizm" title="Turizim xidməti" id="wows3"/>Turizm xidmətləri ilə hazırıq</span>
</div>
<div class="ws_bullets"><div>
<a href="#wows0" title="Pizza">1</a>
<a href="#wows1" title="Taksi">>2</a>
<a href="#wows2" title="Kinoteatıra bilet">3</a>
<a href="#wows3" title="Turizm">4</a>
</div></div>
<div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="engine1/script.js"></script>
<!--slide-->
</div>
<div class="orta">orta</div>
</div>

<div class="ayaq">ayaq</div>

</div>

<div class="menu_diqqet"></div>
<script>
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
  </script>
</body>
</html>