<html>
<head>
<title>basliq</title>
<!--jquery-->
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
$(window).load(function() {
      //alert("window load occurred!");
      //acilansiyahi - div;  uzerinde-effekt
      $(".acilansiyahi").hide();
                  
      $('#metn').keyup(function(e) {
          $(".acilansiyahi").fadeIn();
          if(!$("#metn").val()){
                $(".acilansiyahi").fadeOut();
          }
          
          var code = e.keyCode || e.which;

          if (code === 40) { //Up arrow
            if (!$("li.uzerinde")) { //if no li has the uzerinde class
                $(".acilansiyahi li").eq(0).addClass("uzerinde");
            } else {
                $("li.uzerinde").eq(0).removeClass("uzerinde").next().addClass("uzerinde");
            }
        }
        else if (code === 38) { //Down arrow
            if (!$("li.uzerinde")) { //if no li has the uzerinde class
                $("li.uzerinde").eq(0).removeClass("uzerinde");
            } else {
                $("li.uzerinde").eq(0).removeClass("uzerinde").prev().addClass("uzerinde");
            }
        }
        
      });
      
       $(".acilansiyahi li").hover(function () {
      $(this).addClass("uzerinde");
    }, function () {
      $(this).removeClass("uzerinde");
    }); 
});
</script>
<style>
.uzerinde {
    color: #fff;
    background-color: gray;
}
.acilansiyahi{
    background-color: greenyellow;
    color: #fff;
    width: 300px;
}
</style>
</head>

<body>
<input type="text" id="metn" autocomplete="off" />
<div class="acilansiyahi">
<ul>
<li class="uzerinde">Siyahi 1</li>
<li>Siyahi 2</li>
<li>Siyahi 3</li>
</ul>
</div>
</body>
</html>