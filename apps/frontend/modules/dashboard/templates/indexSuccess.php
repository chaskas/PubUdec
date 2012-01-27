<?php use_javascript('jquery.ui.datepicker-es.js'); ?>
<?php use_javascript('/sfFormExtraPlugin/js/jquery.autocompleter.js') ?>
<?php use_stylesheet('/sfFormExtraPlugin/css/jquery.autocompleter.css') ?>
<?php use_helper('jQuery'); ?>
<div class="grid_16 widget tabs first">
  <div class="widget_title clearfix">
    <h2>Buscador</h2>
  </div>
  <div class="widget_body">
    <?php echo jq_form_remote_tag(array('update' => 'resultados','url' => 'dashboard/resultado','script'   => true,));?>
<!--    <form action="<?php echo url_for('dashboard/resultado'); ?>" method="post">-->
      <div style="margin:20px;">
        <div style="float: left; margin-left: 20px;width:27%;">
          <strong>Autor</strong>
          <br/>
          <?php echo $form['autor']->render(array('style' => 'width: 100%;')); ?>
        </div>

        <div style="float: left; margin-left: 20px;width:12%;">
          <strong>Tipo</strong>
          <br/>
          <?php echo $form['tipo']->render(array('style' => 'width: 100%;')); ?>
        </div>

        <div style="float: left; margin-left: 20px;width:200px;">
          <strong>Desde</strong>
          <br/>
          <?php echo $form['desde']->render(); ?>
        </div>
        <div style="float: left; margin-left: 20px;width:200px;">
          <strong>Hasta</strong>
          <br/>
          <?php echo $form['hasta']->render(); ?>
        </div>
        <br/>
        <input type="submit" value="Buscar" style="float:right;margin-top: 5px;"/>
        <div style="clear:both;"></div>
      </div>
    </form>
  </div>
</div>
<div id="resultados">

  <div class="grid_16 widget tabs first">
    <div class="widget_title clearfix">
      <h2>Autores</h2>

    </div>
    <div class="widget_body">
      <div id="table3">
        <table class="simple">
          <thead>
            <tr>
              <td class="center">Foto</td>
              <td>Nombre</td>
              <td class="center">Email</td>
              <td class="center">T&iacute;tulo</td>
              <td class="center">Facultad</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($autores as $autor) : ?>
              <tr>
                <td class="center">
                  <?php if ($autor->getFoto() != "") : ?>
                    <img src="<?php echo $autor->getImageSrc('foto', 'mini') ?>" alt="Foto" />
                  <?php else : ?>
                    <?php echo image_tag('no-avatar.png'); ?>
                  <?php endif; ?>
                </td>
                <td><?php echo link_to($autor->getNombreCompleto(), 'perfil_autor', $autor) ?></td>
                <td class="center"><?php echo $autor->getEmail(); ?></td>
                <td class="center"><?php echo $autor->getTitulo(); ?></td>
                <td class="center"><?php echo $autor->getFacultad(); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<br/>
