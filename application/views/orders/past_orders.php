<?php foreach ($orders as $order): ?>
  <div class="past-order">
    <h2>Order #<?php echo $order['order']['id'] ?></h2>
    <table class="table table-striped">
      <tr>
        <th>Part</th>
        <th>Quantity</th>
      </tr>
      <?php foreach ($order['parts'] as $part) { ?>
        <tr>
          <td width="50%"><?php echo $part['part_name'] ?></td>
          <td><?php echo $part['quantity'] ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>
<?php endforeach ?>