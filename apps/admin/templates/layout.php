<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>

    <div id="wrap">
      <div id="main">



        <header>
          <div class="container_16 clearfix">
            <nav>
              <div id="navcontainer" class="clearfix">
                <div id="user" class="clearfix">
                  <?php echo image_tag('logo.jpg'); ?>
                  <strong class="username">Sistema de Publicaciones</strong>
                  <?php if (!$sf_user->isAuthenticated()): ?>
                  <br/><br/>
                  <?php endif; ?>
                  <?php if ($sf_user->isAuthenticated()): ?>
                  <strong class="username">Bienvenido, <?php echo $sf_user->getGuardUser()->getName(); ?></strong>
                  <ul class="piped">
                    <li><a href="<?php echo url_for('@sf_guard_signout'); ?>">Salir</a></li>
                  </ul>
                  <?php endif; ?>
                </div>

                <div id="navclose"></div>
                <?php if ($sf_user->isAuthenticated()): ?>
                <ul class="sf-menu">
                  <li <?php if($sf_context->getModuleName()=='autor') echo "class='active'"; ?>>
                    <a href="<?php echo url_for('autor/index'); ?>">
                      <span class="icon"><?php echo image_tag('menu/tables.png'); ?></span>
                      <span class="title">Autores</span>
                    </a>
                  </li>
                  <li <?php if($sf_context->getModuleName()=='publicacion') echo "class='active'"; ?>>
                    <a href="<?php echo url_for('publicacion/index'); ?>">
                      <span class="icon"><?php echo image_tag('menu/pages.png'); ?></span>
                      <span class="title">Publicaciones</span>
                    </a>
                  </li>
                  <li <?php if($sf_context->getModuleName()=='tipo') echo "class='active'"; ?>>
                    <a href="<?php echo url_for('tipo/index'); ?>">
                      <span class="icon"><?php echo image_tag('menu/form.png'); ?></span>
                      <span class="title">Tipos</span>
                    </a>
                  </li>
                  <li <?php if($sf_context->getModuleName()=='sfGuardUser') echo "class='active'"; ?>>
                    <a href="<?php echo url_for('@sf_guard_user'); ?>">
                      <span class="icon"><?php echo image_tag('menu/settings.png'); ?></span>
                      <span class="title">Usuarios</span>
                    </a>
                  </li>
                </ul>
                <?php endif; ?>
              </div>
            </nav>
          </div>
        </header>
        <div class="container_16 clearfix" id="actualbody">
          
          <?php if ($sf_user->isAuthenticated()): ?>
          <ul class="breadcrumbs first">
            <li><a href="<?php echo url_for($sf_context->getModuleName().'/index'); ?>"><?php echo ucfirst($sf_context->getModuleName()) ?></a></li>
            <li class="active"><a href="<?php echo url_for($sf_context->getModuleName().'/'.$sf_context->getActionName()); ?>"><?php echo ucfirst($sf_context->getActionName()); ?></a></li>
          </ul>
          <?php endif; ?>

          <div class="clear"></div>

          <?php echo $sf_content ?>

          <div class="clear"></div>

        </div> 
      </div> 
    </div>
    <footer>
      <div class="container_12">
        <div class="grid_12 clearfix">
          <p class="left">
            Powered by Rodrigo Campos / Juan Escalona / Rodrigo Lerzundi
          </p>
          <p class="right">
            &copy; <a href="mailto:rodrigocampos@udec.cl">Ing. Soft.</a> 2011
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
