<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Conductive Entertainment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/selectivizr.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	<script src="js/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="symbols_start_edgePreload.js"></script>


</head>
	
<style>
body{padding:0 !important;background:url('img/sky.png')repeat-x;}
.overlay{animation:night 40s infinite ease-in-out;width:100%;top:0;left:0;bottom:0;right:0;position:absolute;opacity:0.5;}
footer:before{content:"";display:block;width:100%;height:48px;background:url('img/grass.png') repeat transparent;z-index:6;}
footer{min-height:175px;background:url('img/dirt.png') repeat #b18255;width:100%;bottom:0;z-index:5;}
.fixy{min-height:300px;position:relative;z-index:4;}
.seed{
	height:100px;
	width:20px;
	margin:0 auto;
	background:green;
	animation:spin 10.5s infinite ease-in-out;
	transform-origin:bottom;
	z-index:-2;
	margin-bottom:-5px;
}
@keyframes spin {
	0% { transform:rotate(0deg); }
	35% { transform:rotate(18deg); }
	75% { transform:rotate(-18deg); }
}
#clouds{
    background:transparent url(img/clouds.png) repeat-x top left;
    z-index:-3;
	animation:slide 35.5s infinite linear;
	opacity:0.5;
}
#clouds, #sky, #night, #stars{
    position:absolute;
    top:-200px;
    left:0px;
    right:0px;
    bottom:0px;
    width:100%;
}
@keyframes slide{
	0% {background-position:-1200px;}
    100% { background-position:0;}         
}
@keyframes night{
	0% {background-color:none;}
	50%{ background-color:#000;}
    100% {background-color:none;} 
}
.logo:hover{transform-origin:top;animation:enlarge 1.5s linear;font-size:16px;}

@keyframes enlarge{
0% {font-size:16px;}
	50%{ font-size:30px;}
    100% {font-size:60px;} 
}
.large{font-size:100px;color:red;text-shadow:3px 3px 3px #000;transform: rotate(-45deg);}
.fly{animation:fly 3s ease-in-out;}

@keyframes fly{
	0% {bottom:100px}
	100% {bottom:1200px;}
}
</style>
	<script type='text/javascript'>
		$(function(){
		//	$('footer').css({'height':(($(document).height())/4)+'px'});			
			$('.fixy').css({'height':(($(document).height())-270)+'px'});		
		});
		$(window).resize(function() {
			//$('footer').css({'height':(($(document).height())/4)+'px'});
			$('.fixy').css({'height':(($(document).height())-275)+'px'});
		});
	</script>
  </head>

  <body>
  
  <div class="overlay"></div>
  <div id="clouds"></div>
<div class="fixy">
    <div class="container">
      <div class="row-fluid">
        <div class="span6 offset3 alert alert-error">       
			<h1 class="logo">Conductive Entertainment</h1>        
        </div><!--/span-->
		<div id="stage" style="margin:0 auto; margin-top:100px;" class="EDGE-130892631">
	</div>
      </div><!--/row-->  	  
    </div><!--/.fluid-container-->
			     
</div>
<div style="text-align:center;"><i style="position:absolute;bottom:50px;margin-left:-30px;"class="icon-plane fly large"></i></div>
<div class="seed"></div>  

	<footer>
    </footer>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
  </body>
</html>

