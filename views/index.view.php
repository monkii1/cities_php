<?php if(!empty($cities)): ?>
  <table>
    <thead>
      <tr>
        <th>Stadtname</th>
        <th>Bewohner</th>
        <th>Flaeche</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($cities AS $city): ?>
        <tr>
          <td><?php echo e($city['title']);?></td>
          <td><?php echo e($city['population']);?></td>
          <td><?php echo e($city['area']);?></td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>
<?php endif;?>
