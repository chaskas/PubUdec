<div class="grid_16 widget tabs first">
  <div class="widget_title clearfix">
    <h2><?php echo $autor->getNombreCompleto(); ?> :: Editar Publicaci&oacute;n</h2>
  </div>
  <div class="widget_body">            
    <?php include_partial('form', array('form' => $form,'autor'=>$autor)) ?>
  </div>
</div>