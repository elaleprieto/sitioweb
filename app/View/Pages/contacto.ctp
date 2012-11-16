<?php
echo $this -> Html -> css('contacto', NULL, array('inline' => FALSE));
?>
<div class="row">
	<div class="span7">
		<h1><?=$this -> Html -> image('logo.svg', array('class' => 'brand')); ?>
		ELEFE <small>Artículos para Ferreterías</small></h1>
	</div>
	<div class="span1">
		<?=$this -> Html -> image('email.png', array('class' => 'correo')); ?>
	</div>
</div>
<hr />
<div class="row">
	<div class="span8">
		<?php
        echo $this -> Form -> create(array('class' => 'form-horizontal'));

        # Nombre
        $inputNombre = $this -> Form -> input('Nombre', array(
            'label' => FALSE,
            'div' => 'controls',
            'class' => 'span4'
        ));
        $labelNombre = $this -> Form -> label('Nombre', 'Nombre', array('class' => 'control-label'));
        echo $this -> Html -> div('control-group', $labelNombre . $inputNombre);

        # Email
        $inputEmail = $this -> Form -> input('Correo', array(
            'label' => FALSE,
            'div' => 'controls',
            'class' => 'span4'
        ));
        $labelEmail = $this -> Form -> label('Correo', 'Correo electrónico', array('class' => 'control-label'));
        echo $this -> Html -> div('control-group', $labelEmail . $inputEmail);

        # Mensaje
        $inputMensaje = $this -> Form -> input('Consulta', array(
            'label' => FALSE,
            'div' => 'controls',
            'class' => 'span4',
            'type' => 'textarea',
            'rows' => '5'
        ));
        $labelMensaje = $this -> Form -> label('Consulta', 'Consulta', array('class' => 'control-label'));
        echo $this -> Html -> div('control-group', $labelMensaje . $inputMensaje);

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
        echo $this -> Html -> div('form-actions', $botonEnviar . ' ' . $botonBorrar);
        echo $this -> Form -> end();
		?>
	</div>
</div>