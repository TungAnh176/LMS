<?php
include(APP_Root . '/app/layout/header.php')
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title Course</th>
            <th scope="col">Title Lesson</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $i = 1;
        foreach ($lessons as $lesson) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $lesson[0]; ?></td>
                <td><?= $lesson[1]; ?></td>
                <td><?= $lesson[2]; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
include(APP_Root . '/app/layout/footer.php')
?>