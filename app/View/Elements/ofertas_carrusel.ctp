<?php
echo $this -> Html -> css('ofertas_carrusel', NULL, array('inline' => FALSE));
$cantidad = isset($cantidad) ? $cantidad : 5;
$ofertas = $this -> requestAction('ofertas/mostrar/' . $cantidad);
$i = 0;
?>
<div id="myCarousel" class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
        <?php foreach ($ofertas as $oferta): ?>
            <div class="<?= $i==0 ? 'item active' : 'item' ?>">
                <?= $this -> Html -> image("ofertas/" . $oferta['Oferta']['foto'], array('class' => 'ofertaItem')); ?>
                <div class="carousel-caption">
<!--                     <h4>GUARDACABOS</h4> -->
                    <h4><small>¡Oferta!</small> <?= $oferta['Oferta']['title']; ?></h4>
                    <p>
                        <?= $oferta['Oferta']['descripcion']; ?>
                    </p>
                    <?php if($oferta['Oferta']['unidad'] !== ''): ?>
                        <p>
                            <b>Unidad:</b> <?=$oferta['Oferta']['unidad']?>
                        </p>
                    <?php endif ?>
                    <?php if($oferta['Oferta']['pack'] !== ''): ?>
                        <p>
                            <b>Pack:</b> <?=$oferta['Oferta']['pack']?>
                        </p>
                    <?php endif ?>
                    <?php if($oferta['Oferta']['colores'] !== ''): ?>
                        <p>
                            <b>Colores:</b> <?=$oferta['Oferta']['colores']?>
                        </p>
                    <?php endif ?>
                    <?php if($oferta['Oferta']['medidas'] !== ''): ?>
                        <p>
                            <b>Medidas:</b> <?=$oferta['Oferta']['medidas']?>
                        </p>
                    <?php endif ?>
                    <?php if($oferta['Oferta']['materiales'] !== ''): ?>
                        <p>
                            <b>Materiales:</b> <?=$oferta['Oferta']['materiales']?>
                        </p>
                    <?php endif ?>
                    <?php if($oferta['Oferta']['otros'] !== ''): ?>
                        <p>
                            <b>Otros:</b> <?=$oferta['Oferta']['otros']?>
                        </p>
                    <?php endif ?>
                    <?php $condiciones = array(
                            'before' => '$ ',
                            'thousands' => '.',
                            'decimals' => ',',
                            'zero' => 'Consultar'
                        );
                    ?>
                    <h4 class="precio">Precio Unitario: <?= $this -> Number -> currency($oferta['Oferta']['precio'], 'USD', $condiciones); ?></h4>
                    <h4 class="precio">(IVA incl.)</h4>
                </div>
            </div>
        <?php $i++ ?>
        <?php endforeach; ?>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>