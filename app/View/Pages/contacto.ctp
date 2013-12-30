<?php
# Librerías JavaScript
echo $this->Html->script('contacto', array('inline' => FALSE));
# Se define la ruta base
echo $this->Html->scriptBlock('WEBROOT="' . $this->Html->url('/', true) . '"', $options = array('inline' => true));
# Librerías CSS
echo $this->Html->css('contacto', NULL, array('inline' => FALSE));
?>

<section class="container">
	
	<!-- Título -->
	<div class="row">
		<div class="col-lg-11">
			<h1>
				<?php //echo $this->Html->image('logo.svg', array('class' => 'brand')); ?>
				<!-- <i class="icon-envelope-alt"></i> -->
				<!-- <small><i class="icon-envelope-alt"></i></small> -->
				<!-- <small>Dejanos tu consulta o sugerencia...</small> -->
				Dejanos tu consulta y/o sugerencia...
			</h1>
		</div>
		<div id="div-correo" class="col-lg-1">
			<?=$this->Html->image('email.png', array('class' => 'imagen-correo pull-right', 'id' => 'imagen-correo')); ?>
		</div>
	</div>
	
	<!-- Mensaje para el usuario una vez que envió el correo -->
	<div id="mensaje" class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<h4>¡Muchas Gracias!</h4>
		Hemos recibido tu consulta, en breve te responderemos...
	</div>
	
	<hr id="divisora" />
	
	<div class="row">
		<div class="col-lg-12">
			<form action="/contacto" id="formulario" class="form-horizontal" method="post" accept-charset="utf-8">
				<div class="form-group">
					
					<!-- Nombre -->
					<label for="nombre" class="col-lg-2 control-label">Nombre</label>
					<div class="col-lg-6">
						<input name="data[Contacto][nombre]" id="nombre" class="form-control" 
							placeholder="Ingrese su nombre" type="text">
					</div>
				</div>
				
				<!-- Correo electrónico -->
				<div class="form-group">
					<label for="correo" class="col-lg-2 control-label">Correo electrónico</label>
					<div class="col-lg-6">
						<input name="data[Contacto][correo]" id="correo" class="form-control" 
							placeholder="Ingrese una dirección de respuesta" type="text">
					</div>
				</div>
				
				<!-- Mensaje -->
				<div class="form-group">
					<label for="consulta" class="col-lg-2 control-label">Mensaje</label>
					<div class="col-lg-6">
						<textarea class="form-control" id="consulta" name="data[Contacto][consulta]" 
							placeholder="Ingrese un mensaje" rows="3"></textarea>
					</div>
				</div>
				
				<!-- Controles -->
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" class="btn btn-primary">
							Enviar Consulta
						</button>
						<button type="reset" class="btn">
							Borrar
						</button>
						<div id="div-enviando" class="div-enviando-hide">
							<i id="icon-enviando" class="icon-refresh"></i> Enviando...
						</div>
					</div>
				</div>
			</form>		
		</div>
	</div>
</section>