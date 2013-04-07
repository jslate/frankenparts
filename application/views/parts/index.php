<table class="table table-striped">
  <tr>
    <th>Part</th>
    <th>Description</th>
  </tr>

  <?php foreach ($parts as $part): ?>
    <tr>
      <td><?php echo $part['name'] ?></td>
      <td><?php echo $part['description'] ?></td>
    </tr>
  <?php endforeach ?>
</table>

