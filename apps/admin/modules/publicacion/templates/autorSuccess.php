<div class="grid_16 widget tabs first">
  <div class="widget_title clearfix">
    <h2><?php echo $autor->getNombreCompleto(); ?> :: Publicaciones</h2>
    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
      <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="<?php echo url_for('autor/index') ?>">Volver</a></li>
    </ul>
  </div>
  <div class="widget_body">            


    <div id="table3">
      <table class="simple">
        <thead>
          <tr>
            <td class="center" style="width: 10%;">Fecha de Publicaci&oacute;n</td>
            <td>T&iacute;tulo</td>
            <td class="center" style="width: 10%;">Tipo</td>
            <td class="center" style="width: 10%;">Estado</td>
            <td class="center" style="width: 10%;">Opciones</td>
          </tr>
        </thead>
        <tbody>
          <?php if($publicaciones->count() == 0) : ?>
            <tr>
              <td class="center" colspan="4">No existen publicaciones para este autor.</td>
            </tr>
          <?php else : ?>
          <?php foreach ($publicaciones as $publicacion) : ?>
            <tr>
              <td class="center"><?php echo $publicacion->getFechaPublicacion(); ?></td>
              <td><?php echo $publicacion->getTitulo(); ?></td>
              <td class="center"><?php echo $publicacion->getTipo(); ?></td>
              <td class="center"><?php echo $publicacion->getEstado(); ?></td>
              <td class="center">
                <?php echo link_to(image_tag('fugue/edit.png', array('alt' => 'Editar', 'title' => 'Editar')), 'publicacion/editar?id=' . $publicacion->getId().'&autor_id='.$autor->getId()) ?>
                <?php echo link_to(image_tag('fugue/cross.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), 'publicacion/delete?id=' . $publicacion->getId().'&autor_id='.$autor->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute;s seguro?')) ?>
              </td>
            </tr>
          <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

  </div>
  
  
</div>
<br/>
<a href="<?php echo url_for('publicacion/nueva?autor_id='.$autor->getId()); ?>" class="btn small green" style="float: right;margin-right: 20px;"><span>Agregar Publicaci&oacute;n</span></a>