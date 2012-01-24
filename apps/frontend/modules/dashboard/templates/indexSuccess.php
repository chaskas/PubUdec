<div class="grid_16 widget tabs first">
  <div class="widget_title clearfix">
    <h2>Autores</h2>
    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
      <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#table3">Listado de Autores</a></li>
    </ul>
  </div>
  <div class="widget_body">            


    <div id="table3">
      <table class="simple">
        <thead>
          <tr>
            <td class="center">Foto</td>
            <td>Nombre</td>
            <td class="center">T&iacute;tulo</td>
            <td class="center">Email</td>
            <td class="center">Facultad</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach($autores as $autor) : ?>
          <tr>
            <td class="center">
              <?php if($autor->getFoto()!="") : ?>
              <img src="<?php echo $autor->getImageSrc('foto', 'mini') ?>" alt="Foto" />
              <?php else : ?>
                <?php echo image_tag('no-avatar.png'); ?>
              <?php endif; ?>
            </td>
            <td><?php echo link_to($autor->getNombre()." ".$autor->getApellido(), 'perfil_autor', $autor) ?></td>
            <td class="center"><?php echo $autor->getTitulo(); ?></td>
            <td class="center"><?php echo $autor->getEmail(); ?></td>
            <td class="center"><?php echo $autor->getFacultad(); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</div>