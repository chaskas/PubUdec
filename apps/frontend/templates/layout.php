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
                  <ul class="piped">
                    <li><a href="http://www.udec.cl" target="_blank">UdeC</a></li>
                  </ul>
                </div>

                <div id="navclose"></div>

                <ul class="sf-menu">
                  <li class="active">
                    <a>
                      <span class="icon"><?php echo image_tag('menu/tables.png'); ?></span>
                      <span class="title">Listado</span>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </header>
        <div class="container_16 clearfix" id="actualbody">

          <ul class="breadcrumbs first">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Autores</a></li>
          </ul>

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
