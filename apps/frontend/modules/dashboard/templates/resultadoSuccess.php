<div class="grid_16 widget tabs first">
  <div class="widget_title clearfix">
    <h2>Resultados</h2>

  </div>
  <div class="widget_body">
    <div id="table3">
      <table class="simple">
        <thead>
          <tr>
            <td class="center">Foto</td>
            <td style="width: 150px;">Autor</td>
            <td>T&iacute;tulo Publicaci&oacute;n</td>
            <td class="center">Tipo</td>
            <td class="center">Fecha</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($resultados as $rs) : ?>
            <tr>
              <td class="center">
                <?php if ($rs->getAutor()->getFoto() != "") : ?>
                  <img src="<?php echo $rs->getAutor()->getImageSrc('foto', 'mini') ?>" alt="Foto" />
                <?php else : ?>
                  <?php echo image_tag('no-avatar.png'); ?>
                <?php endif; ?>
              </td>
              <td><?php echo link_to($rs->getAutor()->getNombreCompleto(), 'perfil_autor', $rs->getAutor()) ?></td>
              <td><?php echo $rs->getTitulo(); ?></td>
              <td class="center"><?php echo $rs->getTipo()->getNombre(); ?></td>
              <td class="center"><?php echo $rs->getFechaPublicacion(); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</div>

<?php // print_r($desde); ?>