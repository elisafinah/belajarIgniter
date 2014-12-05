<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Administrator Sistem Informasi Lembaga Masyarakat</title>

    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/forms.css" />
    <link rel="stylesheet" type="text/css" href="css/960.css" />
	<link rel="stylesheet" type="text/css" href="css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="css/userinterfaces.css" />

    <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css">
	<link rel="stylesheet" type="text/css" href="scripts/tinyeditor/style.css">
	<link rel="stylesheet" type="text/css" href="scripts/syntax_highlighter/styles/shCore.css">
	<link rel="stylesheet" type="text/css" href="scripts/syntax_highlighter/styles/shThemeDefault.css">
	<link rel="stylesheet" type="text/css" href="scripts/uitotop/css/ui.totop.css">
	<link rel="stylesheet" type="text/css" href="scripts/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" type="text/css" href="scripts/isotope/isotope.css">
	<link rel="stylesheet" type="text/css" href="scripts/elfinder/css/elfinder.css">		
	<link rel="stylesheet" type="text/css" href="scripts/tooltip/tipsy.css">
	<link rel="stylesheet" type="text/css" href="scripts/uniform/css/uniform.aristo.css">
	<link rel="stylesheet" type="text/css" href="scripts/multiselect/css/ui.multiselect.css">
	<link rel="stylesheet" type="text/css" href="scripts/selectbox/jquery.selectBox.css">
	<link rel="stylesheet" type="text/css" href="scripts/plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css">
	<link rel="stylesheet" type="text/css" href="scripts/colorpicker/css/colorpicker.css">
	<link rel="stylesheet" type="text/css" href="scripts/uistars/jquery.ui.stars.min.css">	
	<link rel="stylesheet" type="text/css" href="scripts/slidernav/slidernav.css">		

    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
	<script src="scripts/jquery.min.js" type="text/javascript"></script>

	<script src="scripts/jquery-ui.min.js" type="text/javascript"></script>

	<script src="scripts/touchPunch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
	<script src="scripts/uitotop/js/jquery.ui.totop.js" type="text/javascript"></script>

	<script src="scripts/uniform/jquery.uniform.min.js"></script>
	<script src="scripts/autogrow/jquery.autogrowtextarea.js"></script>
	<script src="scripts/multiselect/js/ui.multiselect.js"></script>
	<script src="scripts/selectbox/jquery.selectBox.min.js"></script>
	<script src="scripts/timepicker/jquery.timepicker.js"></script>
	<script src="scripts/colorpicker/js/colorpicker.js"></script>
	<script src="scripts/uistars/jquery.ui.stars.min.js"></script>
	<script src="scripts/tooltip/jquery.tipsy.js"></script>
	<script src="scripts/validation/jquery.validate.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="scripts/livequery/jquery.livequery.js"></script>  		
	<script type="text/javascript" src="scripts/MaxMin/maxmin_ui.js"></script>
	<script type="text/javascript" src="scripts/MaxMin/maxmin_forms.js"></script>

</head>

<body>
    <section id="main" class="container_16">
        <section id="login_page">
            <div id="header" class="grid_8" >
				
				<div id="logo_login"></div>
				
                <div class="login_page head blue_gradient">
                    <ul>
                      <li class="active"><a href="#tab1">Login Form</a></li>
                    </ul>
                </div> 
                
            </div>
			<div id="tab1" class="grid_8 content tab-page">	
            
				<form action="cek_login.php" method="POST" onSubmit="return validasi(this)" id="login">
					
					<h2>Selamat Datang. Silahkan Login terlebih dahulu.</h2>
								
                    <fieldset>
						<label>Username<span>Masukkan username</span></label>
						<div>
							<input type="text" name="username" class="percent required">
						</div>
					</fieldset>
					
                    <fieldset>
						<label>Password<span>Masukkan password</span></label>
						<div>
							<input type="password" name="password" class="percent required">
						</div>
					</fieldset>

					<div class="padding_10">									
						<button type="submit" class="button blue"> <img src="images/icons/white/png/padlock_open_icon&16.png" /> Login </button>
						<button type="reset" class="button green"> <img src="images/icons/white/png/brush_icon&16.png" /> Reset </button>
						<div class="clear"></div>
					</div>		
				</form>
				
			</div>

        </section>
        <div class="clear"></div>
        <section class="footer_login">
			
			<p>
				<span class="left">&copy Copyright 2013 by TIM SIC UIN Malang</span></span>
            </p>
            
			<div class="clear"></div>
        </section>
	</section>

    <div id="loading_overlay">
		<div class="loading_message round_bottom">
			<img src="images/loading.gif" alt="loading" />
		</div>
	</div>
</body>
</html>