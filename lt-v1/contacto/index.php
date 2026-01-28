<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = '<strong>Conf&iacute;a en los m&aacute;s de 10 a&ntilde;os de experiencia de Daniel</strong><strong> Salas </strong><strong>y Miguel Cisterna en ecosistemas acu&aacute;ticos. Trabaja con nosotros.</strong><br /><br /><span style="font:12px AppleColorEmoji; ">⚠️</span> Te recordamos que si necesitas que ejecutemos monitoreos de especies hidrobiol&oacute;gicas debemos solicitar un permiso de pesca de investigaci&oacute;n espec&iacute;fico para tu Proyecto, cumpliendo los lineamientos t&eacute;cnicos del D.S. (MINECOM) N&ordm; 461/1995. Una vez otorgado el permiso, corresponde dar aviso oportuno a la direcci&oacute;n regional de SERNAPESCA antes de cada actividad de terreno, con el objetivo de facilitar la tarea de fiscalizaci&oacute;n que recae en dicha instituci&oacute;n. <strong>La tramitaci&oacute;n del permiso de pesca de investigaci&oacute;n tarda aprox. 1 a 2 meses</strong>. &iexcl;Ten presente esta informaci&oacute;n en tu programaci&oacute;n!<br /><br />Completa el siguiente formulario (todos los campos son requeridos):';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '<span style="font:12px AppleColorEmoji; "><br />🏡</span><strong> Vis&iacute;tanos:<br /></strong>Guardia Vieja 202, Of. 403. Providencia, Santiago.<br /><br /><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.959891959114!2d-70.61212398490868!3d-33.42429000355592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf65f5a9aee3%3A0x3e757283efa2f455!2sGuardia%20Vieja%20202%2C%20Providencia%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1584244119835!5m2!1ses!2scl" width="100%" height="400" frameborder="1" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe><br /><br />';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		<link rel="apple-touch-icon" sizes="180x180" href="https://www.limnotec.cl/resources/L180.png" />
<link rel="apple-touch-icon" sizes="167x167" href="https://www.limnotec.cl/resources/L167.png" />
<link rel="icon" type="image/png" href="https://www.limnotec.cl/resources/L64.png" sizes="64x64" />
<link rel="icon" type="image/png" href="https://www.limnotec.cl/resources/L32.png" sizes="32x32" />
<link rel="apple-touch-icon" sizes="152x152" href="https://www.limnotec.cl/resources/L152.png" />
<link rel="icon" type="image/png" href="https://www.limnotec.cl/resources/L16.png" sizes="16x16" />

	
	<title>Contacto LimnoTec SpA</title>
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/Engineer/consolidated-2.css?rwcache=791308873" />
		
	    
</head>

<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

<body>
	<div class="hero" id="hero">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="../index.html"><img src="../rw_common/images/logo_texto.png" width="3734" height="1263" alt="LimnoTec"/> <span class="navbar-title">LimnoTec</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto"><li class="nav-item"><a href="../index.html" rel="" class="nav-link">Inicio</a></li><li class="nav-item"><a href="../servicios/index.html" rel="" class="nav-link">Servicios</a></li><li class="nav-item"><a href="../acerca-de/index.html" rel="" class="nav-link">Acerca de</a></li><li class="nav-item active"><a href="index.php" rel="" class="nav-link">Contacto</a></li></ul>
			</div>
		</nav>

		<div class="hero-content container d-flex align-items-center" id="hero">
			<div class="">
				<h1 class="hero-title">LimnoTec</h1>
				<p class="hero-slogan display-4">Conversemos</p>
			</div>
			<div class="hero-background" title="LimnoTec"></div>
			<div class="hero-overlay"></div>
		</div>

	</div>

    <div class="content">
        <section class="main" style="position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 main">
                        
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./index_files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Tu nombre</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Tu correo electrónico</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Asunto</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Mensaje</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Volver" />
		<input class="form-input-button" type="submit" name="submitButton" value="Enviar" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

                    </div>

                    <div class="col-sm-12 sidebar">
                        <h2></h2>
                         
                    </div>
                </div>
            </div>
        </section>
    </div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 footer-content">
					<ul class="navbar-nav ml-auto"><li class="nav-item"><a href="../index.html" rel="" class="nav-link">Inicio</a></li><li class="nav-item"><a href="../servicios/index.html" rel="" class="nav-link">Servicios</a></li><li class="nav-item"><a href="../acerca-de/index.html" rel="" class="nav-link">Acerca de</a></li><li class="nav-item active"><a href="index.php" rel="" class="nav-link">Contacto</a></li></ul>
					&copy; 2020-2026 LimnoTec SpA  &middot;   <a href="#" id="rw_email_contact">Escr&iacute;benos</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":co";var _rwObsfuscatedHref3 = "nta";var _rwObsfuscatedHref4 = "cto";var _rwObsfuscatedHref5 = "@li";var _rwObsfuscatedHref6 = "mno";var _rwObsfuscatedHref7 = "tec";var _rwObsfuscatedHref8 = ".cl";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../rw_common/themes/Engineer/js/main.js?rwcache=791308873"></script>
</body>

</html>