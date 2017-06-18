<?php get_header(); 
	$nombre=$_POST['nombre'];
	$correo=$_POST['email'];
	$numero=$_POST['numero'];
	 
	$sql="INSERT INTO formulario(nombre,email,numero) VALUES('".$nombre."','".$correo."',".$numero.");";
	$wpdb->query($sql);
?>
	<section class="titular">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
				  <h1>hola como estas todo bie ok es ok</h1>
				  <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
				 </div>
				 <div class="col-md-3">
				 	<p><i class="fa fa-phone"></i>+51930162726</p>
				 	<p><span class="fa fa-envelope"></span>yovannanetwork@gmail.com</p>
				 </div>
			</div>
		</div>
	</section>
<section class="video">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="homepage-hero-module">
						<div class="video-container">
							<video autoplay class="fillWidth" id="video" width="600" onmouseover="mouseOver()">
								<source src="<?php bloginfo('template_url')?>/video/video%20nunes1.mp4" type="video/mp4" />
								<source src="<?php bloginfo('template_url')?>/video/video%20nunes1.webm" type="video/webm" />
								<source src="<?php bloginfo('template_url')?>/video/video%20nunes1.ogv" type="video/ogg" />
							</video>
						</div>
						<div class="control">
							<button id="boton" onclick="play()"><i class="fa fa-play"></i></button>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<form  method="post" enctype="multipart/form-data" action="<?php echo get_home_url(); ?>">
						<h2>resgistrate</h2>
						<input class="form-control" name="nombre" id="name" type="text" maxlength="30" placeholder="Nombre" autofocus required>
						<input class="form-control" name="email" id="email" type="text" maxlength="30" placeholder="Email" required>
						<input class="form-control" name="numero" id="number" type="text" max="10" placeholder="Numero" required>
						<button type="button" id="boton" onclick="validateForm()">QUIERO SER PARTE DE ESTO</button>
						<p><small>100% libre de spam</small></p>
					</form>
				</div>
				<button style="background-color: transparent; border: none;" type="submit" value="Enviar formulario"></button>
				<div class="flecha">
					<span class="fa fa-angle-down"></span>
				</div>
			</div>
		</div>
	</section>
<section class="testimonio">
		<div class="container">
			<div class="row">
			    <h3>Testimonios</h3>
				<div class="col-md-3 col-sm-6">
					<video class="fillWidth" width="270" controls>
								<source src="<?php bloginfo('template_url')?>/video/video%20nunes1.mp4" type="video/mp4" />
							</video>
					<div class="nombre">
						<span>hola bbj</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<video class="fillWidth" width="270" controls>
						<source src="<?php bloginfo('template_url')?>/video/video%20nunes1.mp4" type="video/mp4" />
					</video>
					<div class="nombre">
						<span>jbsjbr Salas</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<video class="fillWidth" width="270" controls>
						<source src="<?php bloginfo('template_url')?>/video/video%20nunes1.mp4" type="video/mp4" />
					</video>
					<div class="nombre">
						<span>bjdbjdez</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe src="https://www.youtube.com/embed/SA2UJbowGgI?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="nombre">
						<span>hola hbah</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>