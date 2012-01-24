<h1>Publicacions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Titulo</th>
      <th>Tipo pub</th>
      <th>Autor</th>
      <th>Estado</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($publicacions as $publicacion): ?>
    <tr>
      <td><a href="<?php echo url_for('publicacion/edit?id='.$publicacion->getId()) ?>"><?php echo $publicacion->getId() ?></a></td>
      <td><?php echo $publicacion->getTitulo() ?></td>
      <td><?php echo $publicacion->getTipoPubId() ?></td>
      <td><?php echo $publicacion->getAutorId() ?></td>
      <td><?php echo $publicacion->getEstado() ?></td>
      <td><?php echo $publicacion->getCreatedAt() ?></td>
      <td><?php echo $publicacion->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('publicacion/new') ?>">New</a>
