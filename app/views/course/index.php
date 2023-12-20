<?php
include(APP_Root.'/app/layout/header.php')
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($courses as $course):?>
    <tr>
      <th scope="row"><?= $course['id']?></th>
      <td><?= $course['title']?></td>
      <td><?= $course['description']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php
include(APP_Root.'/app/layout/footer.php')
?>