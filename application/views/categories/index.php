<table class="table table-striped">
  <tr>
    <th>Name</th>
    <th>&nbsp;</th>
  </tr>

  <?php foreach ($categories as $category): ?>
    <tr>
      <td><?php echo $category['category_name'] ?></td>
      <td><a href="category/<?php echo $category['id'] ?>/parts">View parts</a></td>
    </tr>
  <?php endforeach ?>
</table>

