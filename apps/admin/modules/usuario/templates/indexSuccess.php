<div class="grid_16 widget tabs first">
  <div class="widget_title clearfix">
    <h2>Usuarios</h2>
    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
      <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="<?php echo url_for('usuario/nuevo') ?>">Nuevo</a></li>
    </ul>
  </div>
  <div class="widget_body">            


    <div id="table3">
      <table class="simple">
        <thead>
          <tr>
            <td>Nombre</td>
            <td class="center">Email</td>
            <td class="center">Grupo</td>
            <td class="center">Opciones</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario) : ?>
            <tr>
              <td class="center"><?php echo $usuario->getFirstName()." ".$usuario->getLastName(); ?></td>
              <td class="center"><?php echo $usuario->getEmailAddress(); ?></td>
              <td class="center"><?php foreach($usuario->getGroups() as $group){echo $group->getName();} ?></td>
              <td class="center">
                <?php echo link_to(image_tag('fugue/edit.png', array('alt' => 'Editar', 'title' => 'Editar')), 'usuario/editar?id=' . $usuario->getId()) ?>
                <?php echo link_to(image_tag('fugue/cross.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), 'usuario/delete?id=' . $usuario->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute;s seguro?')) ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</div>