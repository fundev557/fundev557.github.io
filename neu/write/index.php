<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Luca Joel Graumann">
    <title>WebDev557 | Homepage</title>
    
	<!-- Bootstrap CSS -->
	<link href="bootstrap.min.css" rel="stylesheet">
     <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- favicon Icon -->
    <link rel="shortcut icon" href="favicon.jpg" type="image/jpeg">
	<!--<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <!-- CSS Plugins -->
    <link href="font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="animate.min.css">
    <!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<header class="navbar-fixed-top">
	<div class="container">
    	<div class="row">
        	<div class="header_top">
        		<div class="col-md-2">
            		<div class="logo_img">
						<a href="https://www.webdev557.lima-city.de"><img src="logo.png" alt="logoimage"></a>
					</div>
				</div>
					
				<div class="col-md-10">
					<div class="menu_bar">	
						<nav role="navigation" class="navbar navbar-default">
							<div class="navbar-header">
                                <button id="menu_slide"  aria-controls="navbar" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
							   </div>
							   
							  <div class="collapse navbar-collapse" id="navbar">
                            
									<ul class="nav navbar-nav">
									  <li><a href="#home" class="js-target-scroll">Home</a></li>
									  <li><a href="#services" class="js-target-scroll">Services</a></li>
									  <li><a href="#contact" class="js-target-scroll">Contact</a></li>
									  <li  class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown"> page  </a>
									 	 <ul class="dropdown-menu"> 
											<li><a href="#">Write your own Text</a></li>
											<li><a href="/uberuns">Impressum</a></li>
										 </ul>
									  </li>
									</ul>      
                          		</div>
							  
							 
       			
						</nav>
					</div>
    	        </div>
			  
			  </div>
			</div>
		</div>
</header>

<section>
    <div class="phpoutput">
        <h2><?php
        echo $_POST['title'];
        ?></h2>
            <p>
        <?php
        echo $_POST['text'];
        ?>
        </p>
    </div>
</section>

<section>
    <div class="phpinput">
        <p><?php
            echo '
            <form method="POST" action="index.php">

            <input type="text" placeholder="Hier etwas reinschreiben f&uuml;r die &Uuml;berschrift..." name="title"><br><br>
            <input type="text" placeholder="Hier etwas reinschreiben f&uuml;r den Artikel..." name="text"><br><br>
            <input type="submit" value="Absenden">

            </form>
            ';
            ?></p>
    </div>
</section>


<footer id="contact" class="footer action-lage bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-13">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Made with
                            <i class="fa fa-heart"></i>
                            by
                            <a target="_blank" href="https://www.webdev557.lima-city.de">WebDev557</a>
                            2018. All Rights Reserved
                        </p>
                    </div>
                </div>
            </footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/interface.js"></script> 
<script type="text/javascript"> 
	$(document).ready(function(){
	$("#menu_slide").click(function(){
		$("#navbar").slideToggle('normal');
	});
	});
 </script>
<!--Menu Js Right Menu-->
<script type="text/javascript">
$(document).ready(function(){
  $('#navbar > ul > li:has(ul)').addClass("has-sub");
  $('#navbar > ul > li > a').click(function() {
    var checkElement = $(this).next();
    $('#navbar li').removeClass('dropdown');
    $(this).closest('li').addClass('dropdown');	
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('dropdown');
      checkElement.slideUp('normal');
    }
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('#navbar ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    if (checkElement.is('ul')) {
      return false;
    } else {
      return true;	
    }		
  });
});
<!--end-->
</script>
<script type="text/javascript">	
$("#navbar").on("click", function(event){
    event.stopPropagation();
});
$(".dropdown-menu").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $(".dropdown-menu").slideUp('normal');
});	

$(".navbar-header").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $("#navbar").slideUp('normal');
});		
</script>

</body>
<!-- JS Plugins -->
  </html>
