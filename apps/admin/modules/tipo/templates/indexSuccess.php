<h1>Tipos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tipos as $tipo): ?>
    <tr>
      <td><a href="<?php echo url_for('tipo/edit?id='.$tipo->getId()) ?>"><?php echo $tipo->getId() ?></a></td>
      <td><?php echo $tipo->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipo/new') ?>">New</a>
