<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('tipo/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <div style="margin:20px;">
    <?php echo $form->renderGlobalErrors() ?>

    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['nombre']->renderLabel() ?>
      <?php echo $form['nombre']->renderError() ?>
      <?php echo $form['nombre']->render(array('style' => 'width:100%')) ?>
    </div>
    <div style="clear:both;"><br/></div>
    
    &nbsp;<a href="<?php echo url_for('tipo/index') ?>">Volver</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;&nbsp;<?php echo link_to('Borrar', 'tipo/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute;s seguro?')) ?>
    <?php endif; ?>
    
    <input type="submit" value="Guardar" style="float:right;"/>

  </div>
  <?php echo $form->renderHiddenFields(false) ?>
</form>
