<?php // Display error messages if applicable
  if (isset($_SESSION['errors'])) : ?>
    <ul>
      <?php foreach ($_SESSION['errors'] as $error) : ?>
        <li><?= $error; ?></li>
      <?php endforeach; ?>
    </ul>
<?php endif; ?>
