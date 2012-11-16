<?php
echo $this -> Html -> css('ofertas_carrusel', NULL, array('inline' => FALSE));
$cantidad = isset($cantidad) ? $cantidad : 5;
$ofertas = $this -> requestAction('ofertas/mostrar/' . $cantidad);
?>
<div id="myCarousel" class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
        <?php foreach ($ofertas as $oferta): ?>
            <div class="item">
                <?= $this -> Html -> image("ofertas/" . $oferta['Oferta']['foto'], array('class' => 'ofertaItem')); ?>
                <div class="carousel-caption">
<!--                     <h4>GUARDACABOS</h4> -->
                    <h4><small>¡Oferta!</small> <?= $oferta['Oferta']['title']; ?></h4>
                    <p>
                        <?= $oferta['Oferta']['descripcion']; ?>
                    </p>
                    <?php $condiciones = array(
                            'before' => '$ ',
                            'thousands' => '.',
                            'decimals' => ',',
                            'zero' => 'Consultar'
                        );
                    ?>
                    <h4 class="precio">Precio: <small><?= $this -> Number -> currency($oferta['Oferta']['precio'], 'USD', $condiciones); ?></small></h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>