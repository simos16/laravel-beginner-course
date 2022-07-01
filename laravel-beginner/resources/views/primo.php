<h2>le mie note</h2>

<h2><?php  echo $intestazione; ?></h2>

<?php  foreach ($contents as $content) :  ?>
    <h2><?php echo $content['id'] ?></h2>
    <h2><?php echo $content['title'] ?></h2>
    <h2><?php echo $content['description'] ?></h2>


<?php endforeach ?>


