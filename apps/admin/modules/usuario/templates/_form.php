<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('usuario/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <div style="margin:20px;">
    <?php echo $form->renderGlobalErrors() ?>

    <div style="float: left; margin-left: 20px;width:25%;">
      <strong>Nombre</strong>
      <?php echo $form['first_name']->renderError() ?>
      <br/>
      <?php echo $form['first_name']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:25%;">
      <strong>Apellido</strong>
      <?php echo $form['last_name']->renderError() ?>
      <br/>
      <?php echo $form['last_name']->render(array('style' => 'width:100%')) ?>
    </div>
    
    <div style="clear:both;"></div>
    
    <div style="float: left; margin-left: 20px;width:52%;">
      <strong>Email</strong>
      <?php echo $form['email_address']->renderError() ?>
      <br/>
      <?php echo $form['email_address']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="clear:both;"><br/></div>

    <div style="float: left; margin-left: 20px;width:25%;">
      <strong>Usuario</strong>
      <?php echo $form['username']->renderError() ?>
      <br/>
      <?php echo $form['username']->render(array('style' => 'width:100%')) ?>
    </div>
    <div style="clear:both;"></div>
    <div style="float: left; margin-left: 20px;width:25%;">
      <strong>Password</strong>
      <?php echo $form['password']->renderError() ?>
      <br/>
      <?php echo $form['password']->render(array('style' => 'width:100%')) ?>
    </div>
    <div style="float: left; margin-left: 20px;width:25%;">
      <strong>Repita Password</strong>
      <?php echo $form['password_again']->renderError() ?>
      <br/>
      <?php echo $form['password_again']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="clear:both;"></div>
    


    <div style="clear:both;"><br/></div>

    &nbsp;<a href="<?php echo url_for('usuario/index') ?>">Volver</a>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;&nbsp;<?php echo link_to('Borrar', 'usuario/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute;s seguro?')) ?>
    <?php endif; ?>
    
    <input type="submit" value="Guardar" style="float:right;"/>

  </div>
  <?php echo $form->renderHiddenFields(false) ?>
</form>
