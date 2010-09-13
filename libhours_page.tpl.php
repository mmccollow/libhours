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
    <tr>
      <td><?php echo $key; ?></td>
      <?php for ($count = 0; $count < 7; $count++): ?>
        <td>
        <?php if (isset($items[$key][date('Y-m-d', time() + 86400 * $count)])): ?>
          <?php echo $items[$key][date('Y-m-d', time() + 86400 * $count)]['startTime'] . " - ". $items[$key][date('Y-m-d', time() + 86400 * $count)]['endTime']; ?>
        <?php endif; ?>
        </td>
      <?php endfor; ?>
    </tr>
  <?php endforeach; ?>
</table>