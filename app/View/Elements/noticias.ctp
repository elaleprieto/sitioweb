<?php $cantidad = isset($cantidad) ? $cantidad : 5; ?>
<?php $noticias = $this -> requestAction('noticias/mostrar/' . $cantidad); ?>
<!-- <ul class="thumbnails"> -->
<div class="row">
	<!-- <li class="span4"> -->
		<div class="col-lg-12 thumbnail lateral">
 			<h3 class="muted"><i class="icon-calendar"></i> Últimas Novedades</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Evento</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($noticias as $noticia): ?>
					<tr>
						<td><?php echo $this->Time->format('d/m/Y', $noticia['Noticia']['created']); ?></td>
						<td><?php echo $noticia['Noticia']['title']; ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	<!-- </li> -->
<!-- </ul> -->
</div>
