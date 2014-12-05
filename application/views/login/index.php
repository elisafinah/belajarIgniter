<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Administrator Sistem Informasi Lembaga Masyarakat</title>

    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/forms.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/960.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/buttons.css" />		

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/favicon.ico" type="image/x-icon" />	

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
            
				<form action="<?php echo base_url();?>login/aksi" method="POST" onSubmit="return validasi(this)" id="login">
					
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
</body>
</html>