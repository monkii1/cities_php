<?php if(!empty($city)): ?>
  <table>
    <thead>
      <tr>
        <th>Stadtname</th>
        <th>Bewohner</th>
        <th>Flaeche</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($city AS $result): ?>
        <tr>
          <td><?php echo e($result['title']);?></td>
          <td><?php echo e($result['population']);?></td>
          <td><?php echo e($result['area']);?></td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>
<?php endif;?>