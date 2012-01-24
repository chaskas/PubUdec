<div class="grid_16 widget tabs first">
  <div class="widget_title clearfix">
    <h2><?php echo $autor->getNombre() . " " . $autor->getApellido() ?></h2>
    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
      <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="<?php echo url_for('dashboard/index') ?>">Volver</a></li>
    </ul>
  </div>
  <div class="widget_body">            
    <div style="margin:20px;">
      <div id="left" style="width: 150px;float:left;margin-right:20px;">
        <?php if ($autor->getFoto() != "") : ?>
          <img src="<?php echo $autor->getImageSrc('foto', 'avatar') ?>" alt="Foto" />
        <?php else : ?>
          <?php echo image_tag('no-avatar-big.jpg'); ?>
        <?php endif; ?>

      </div>
      <div id="right" style="width:700px;float:left;">
        <div style="float: left; margin-left: 20px;width:20%;height:50px;">
          <strong>Nombre</strong>
          <br/>
          <?php echo $autor->getNombre() ?>
        </div>

        <div style="float: left; margin-left: 20px;width:20%;height:50px;">
          <strong>Apellido</strong>
          <br/>
          <?php echo $autor->getApellido() ?>
        </div>

        <div style="float: left; margin-left: 20px;width:30%;height:50px;">
          <strong>T&iacute;tulo</strong>
          <br/>
          <?php echo $autor->getTitulo() ?>
        </div>

        <div style="clear:both;"></div>

        <div style="float: left; margin-left: 20px;width:30%;height:50px;">
          <strong>Email</strong>
          <br/>
          <?php echo $autor->getEmail() ?>
        </div>

        <div style="float: left; margin-left: 20px;width:20%;height:50px;">
          <strong>Fono</strong>
          <br/>
          <?php echo $autor->getFono() ?>
        </div>

        <div style="float: left; margin-left: 20px;width:20%;height:50px;">
          <strong>Fax</strong>
          <br/>
          <?php echo $autor->getFax() ?>
        </div>

        <div style="clear:both;"></div>

        <div style="float: left; margin-left: 20px;width:30%;height:50px;">
          <strong>Direcci&oacute;n</strong>
          <br/>
          <?php echo $autor->getDireccion() ?>
        </div>

        <div style="float: left; margin-left: 20px;width:20%;height:50px;">
          <strong>Ciudad</strong>
          <br/>
          <?php echo $autor->getCiudad() ?>
        </div>

        <div style="float: left; margin-left: 20px;width:20%;height:50px;">
          <strong>Pa&iacute;s</strong>
          <br/>
          <?php echo $autor->getPais() ?>
        </div>

        <div style="clear:both;"></div>

        <div style="float: left; margin-left: 20px;width:30%;height:50px;">
          <strong>Universidad</strong>
          <br/>
          <?php echo $autor->getUniversidad() ?>
        </div>

        <div style="float: left; margin-left: 20px;width:20%;height:50px;">
          <strong>Facultad</strong>
          <br/>
          <?php echo $autor->getFacultad() ?>
        </div>

        <div style="float: left; margin-left: 20px;width:20%;height:50px;">
          <strong>Departamento</strong>
          <br/>
          <?php echo $autor->getDepartamento() ?>
        </div>

        <div style="clear:both;"><br/><br/></div>
      </div>
      <div style="clear:both;"></div>
    </div>
  </div>

</div>