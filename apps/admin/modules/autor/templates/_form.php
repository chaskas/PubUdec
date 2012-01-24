<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php use_javascript('jquery.Jcrop.min.js'); ?>
<?php use_stylesheet('jquery.Jcrop.css'); ?>

<form action="<?php echo url_for('autor/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <div style="margin:20px;">
    <?php echo $form->renderGlobalErrors() ?>

    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['nombre']->renderLabel() ?>
      <?php echo $form['nombre']->renderError() ?>
      <br/>
      <?php echo $form['nombre']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['apellido']->renderLabel() ?>
      <?php echo $form['apellido']->renderError() ?>
      <br/>
      <?php echo $form['apellido']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:40%;">
      <?php echo $form['titulo']->renderLabel() ?>
      <?php echo $form['titulo']->renderError() ?>
      <br/>
      <?php echo $form['titulo']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="clear:both;"></div>

    <div style="float: left; margin-left: 20px;width:40%;">
      <?php echo $form['email']->renderLabel() ?>
      <?php echo $form['email']->renderError() ?>
      <br/>
      <?php echo $form['email']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['fono']->renderLabel() ?>
      <?php echo $form['fono']->renderError() ?>
      <br/>
      <?php echo $form['fono']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['fax']->renderLabel() ?>
      <?php echo $form['fax']->renderError() ?>
      <br/>
      <?php echo $form['fax']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="clear:both;"></div>

    <div style="float: left; margin-left: 20px;width:40%;">
      <?php echo $form['direccion']->renderLabel() ?>
      <?php echo $form['direccion']->renderError() ?>
      <br/>
      <?php echo $form['direccion']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['ciudad']->renderLabel() ?>
      <?php echo $form['ciudad']->renderError() ?>
      <br/>
      <?php echo $form['ciudad']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['pais']->renderLabel() ?>
      <?php echo $form['pais']->renderError() ?>
      <br/>
      <?php echo $form['pais']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="clear:both;"></div>

    <div style="float: left; margin-left: 20px;width:40%;">
      <?php echo $form['universidad']->renderLabel() ?>
      <?php echo $form['universidad']->renderError() ?>
      <br/>
      <?php echo $form['universidad']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['facultad']->renderLabel() ?>
      <?php echo $form['facultad']->renderError() ?>
      <br/>
      <?php echo $form['facultad']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['departamento']->renderLabel() ?>
      <?php echo $form['departamento']->renderError() ?>
      <br/>
      <?php echo $form['departamento']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="clear:both;"><br/><br/></div>
    <center>
      <?php echo $form['foto']->renderError() ?>
      <?php echo $form['foto']; ?>
    </center>
    <div style="clear:both;"></div>

    &nbsp;<a href="<?php echo url_for('autor/index') ?>">Volver</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;&nbsp;<?php echo link_to('Borrar', 'autor/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute;s seguro?')) ?>
    <?php endif; ?>
    
    <input type="submit" value="Guardar" style="float:right;"/>

  </div>
  <?php echo $form->renderHiddenFields(false) ?>
</form>
