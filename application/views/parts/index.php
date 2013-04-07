<table class="table table-striped orders">
  <tr>
    <th>Part</th>
    <th>Description</th>
    <th>Category</th>
    <th>&nbsp;</th>
  </tr>

  <?php foreach ($parts as $part): ?>
    <tr>
      <td><?php echo $part['part_name'] ?></td>
      <td><?php echo $part['description'] ?></td>
      <td><?php echo $part['category_name'] ?></td>
      <td class="order-cell">
        <a href="#" data-part="<?php echo $part['part_id'] ?>">Order</a>
        <form style="display: none;"><input type="text" name="quantity" size="4" /><a class="btn btn-mini">Submit</a></form>
      </td>
    </tr>
  <?php endforeach ?>
</table>

