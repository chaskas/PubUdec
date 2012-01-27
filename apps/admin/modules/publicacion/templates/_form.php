<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php use_javascript('jquery.ui.datepicker-es.js'); ?>

<form action="<?php echo url_for('publicacion/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId().'&autor_id='.$autor->getId() : '?autor_id='.$autor->getId())) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
    <input type="hidden" name="autor_id" value="<?php echo $autor->getId(); ?>" />
  <?php endif; ?>
  <div style="margin:20px;">
    <?php echo $form->renderGlobalErrors() ?>

    <div style="float: left; margin-left: 20px;width:95%;">
      <?php echo $form['titulo']->renderLabel() ?>
      <?php echo $form['titulo']->renderError() ?>
      <br/>
      <?php echo $form['titulo']->render(array('style' => 'width:100%')) ?>
    </div>
    
    <div style="clear:both;"><br/></div>
    
    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['tipo_pub_id']->renderLabel() ?>
      <?php echo $form['tipo_pub_id']->renderError() ?>
      <br/>
      <?php echo $form['tipo_pub_id']->render(array('style' => 'width:100%')) ?>
    </div>

    <div style="float: left; margin-left: 20px;width:30%;text-align:center;">
      <?php echo $form['estado']->renderLabel() ?>
      <?php echo $form['estado']->renderError() ?>
      <br/>
      <?php echo $form['estado']->render(array('style' => 'margin-left: 0px;')) ?>
    </div>
    
    <div style="float: left; margin-left: 20px;width:25%;">
      <?php echo $form['created_at']->renderLabel() ?>
      <?php echo $form['created_at']->renderError() ?>
      <br/>
      <?php echo $form['created_at']->render() ?>
    </div>

    <div style="clear:both;"></div>
    <div style="float: left; margin-left: 20px;width:95%;">
      <?php echo $form['coautores']->renderLabel() ?>
      <?php echo $form['coautores']->renderError() ?>
      <br/>
      <?php echo $form['coautores']->render(array('style' => 'width:100%')) ?>
    </div>
    <div style="clear:both;"></div>
    <br/>
    &nbsp;<?php echo link_to('Volver', 'publicacion/autor?autor_id=' . $autor->getId()) ?>
    <?php if (!$form->getObject()->isNew()): ?>
      &nbsp;&nbsp;<?php echo link_to('Borrar', 'publicacion/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Est&aacute;s seguro?')) ?>
    <?php endif; ?>
    
    <input type="submit" value="Guardar" style="float:right;"/>

  </div>
  <?php echo $form->renderHiddenFields(true) ?>
</form>
