<table>
  <tr>
    <th>&nbsp;</th>
    <th><h2>Today</h2></th>
    <th>Tomorrow</th>
    <th><?php echo date('l', time() + 86400*2); ?></th>
    <th><?php echo date('l', time() + 86400*3); ?></th>
    <th><?php echo date('l', time() + 86400*4); ?></th>
    <th><?php echo date('l', time() + 86400*5); ?></th>
    <th><?php echo date('l', time() + 86400*6); ?></th>
  </tr>
  <?php foreach($items as $key => $item): ?>
    <?php $count = 0; ?>
    <tr>
      <td><?php echo $key; ?></td>
      <?php foreach($item as $event): ?>
        <td>
        <?php
          if (date('Y-m-d', time() + 86400 * $count) == $event['isodate']) {
            echo $event['startTime'] ." - ". $event['endTime'];
          }
          $count++;
        ?>
        </td>
      <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
</table>