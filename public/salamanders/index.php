<?php require_once('../../private/initialize.php'); ?>

<?php

  $subject_set = find_all_salamanders();

?>

<?php $page_title = 'Salamanders'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>
<div id="content">
  <div class="pages listing">
    <h1>Salamanders</h1>

    <div class="actions">
    <a class="action" href="<?php echo url_for('/salamanders/new.php'); ?>">Create New Salamander</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

        <?php while($salamander = mysqli_fetch_assoc($subject_set)) { ?>
          <tr>
            <td><?php echo h($salamander['id']); ?></td>
            <td><?php echo h($salamander['position']); ?></td>
            <td><?php echo $salamander['visible'] == 1 ? 'true' : 'false'; ?></td>
            <td><?php echo h($salamander['salamanderName']); ?></td>
            <td><a class=="action" href="<?php echo url_for('salamanders/show.php?id=' . h(u($page['id']))); ?>"
            <td><a class=="action" href="<?php echo url_for('salamanders/edit.php?id=' . h(u($page['id']))); ?>"
            <td><a class=="action" href="">Delete</a></td>
          </tr>
        <?php } ?>

  	</table>

    <?php mysqli_free_result($salamander_set); ?>

  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>