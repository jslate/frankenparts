<table class="table table-striped">
  <tr>
    <th>Part</th>
    <th>Quantity</th>
  </tr>

  <?php foreach ($orders_parts as $part): ?>
    <tr>
      <td><?php echo $part['part_name'] ?></td>
      <td><?php echo $part['quantity'] ?></td>
    </tr>
  <?php endforeach ?>
</table>

<a href='order/submit' class="btn">Submit Order</a>
