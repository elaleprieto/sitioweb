<?php
# Librerías JavaScript
echo $this -> Html -> script('contacto', array('inline' => FALSE, 'cache' => TRUE));
# Se define la ruta base
echo $this -> Html -> scriptBlock('WEBROOT="' . $this -> Html -> url('/', true) . '"', $options = array('inline' => true));
# Librerías CSS
echo $this -> Html -> css('contacto', NULL, array('inline' => FALSE, 'cache' => TRUE));
?>
<div class="row">
	<div class="span7">
		<h1><?=$this -> Html -> image('logo.svg', array('class' => 'brand')); ?>
		ELEFE <small>Artículos para Ferreterías</small></h1>
	</div>
	<div id="div-correo" class="span1">
		<?=$this -> Html -> image('email.png', array('class' => 'imagen-correo pull-right', 'id' => 'imagen-correo')); ?>
	</div>
</div>
<div id="mensaje" class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>¡Muchas Gracias!</h4>
    Hemos recibido tu consulta, en breve te responderemos...
</div>
<hr />
<div class="row">
	<div class="span8">
		<?php
        echo $this -> Form -> create('Contacto', array('id' => 'formulario', 'class' => 'form-horizontal'));

        # Nombre
        $inputNombre = $this -> Form -> input('nombre', array(
            'label' => FALSE,
            'id' => 'nombre',
            'div' => 'controls',
            'class' => 'span4'
        ));
        $labelNombre = $this -> Form -> label('Nombre', 'Nombre', array('class' => 'control-label'));
        echo $this -> Html -> div('control-group', $labelNombre . $inputNombre, array('id' => 'controlGroupNombre'));

        # Email
        $inputEmail = $this -> Form -> input('correo', array(
            'label' => FALSE,
            'id' => 'correo',
            'div' => 'controls',
            'class' => 'span4'
        ));
        $labelEmail = $this -> Form -> label('Correo', 'Correo electrónico', array('class' => 'control-label'));
        echo $this -> Html -> div('control-group', $labelEmail . $inputEmail, array('id' => 'controlGroupCorreo'));

        # Mensaje
        $inputMensaje = $this -> Form -> input('consulta', array(
            'label' => FALSE,
            'id' => 'consulta',
            'div' => 'controls',
            'class' => 'span4',
            'type' => 'textarea',
            'rows' => '5'
        ));
        $labelMensaje = $this -> Form -> label('Consulta', 'Consulta', array('class' => 'control-label'));
        echo $this -> Html -> div('control-group', $labelMensaje . $inputMensaje, array('id' => 'controlGroupConsulta'));

        # Botones
        $botonEnviar = $this -> Form -> button('Enviar Consulta', array(
            'type' => 'submit',
            'div' => FALSE,
            'class' => 'btn btn-primary',
        ));
        $botonBorrar = $this -> Form -> button('Borrar', array(
            'type' => 'reset',
            'div' => FALSE,
            'class' => 'btn',
        ));
        $divEnviando = $this->Html->div('div-enviando-hide', '<i id="icon-enviando" class="icon-refresh"></i> Enviando...', array(
            'id' => 'div-enviando',
        ));
        echo $this -> Html -> div('form-actions', $botonEnviar . ' ' . $botonBorrar . ' ' . $divEnviando);
        echo $this -> Form -> end();
		?>
	</div>
</div>