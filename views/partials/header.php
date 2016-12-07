<!-- Display logout link for logged in users -->
<?php if (isset($_SESSION['user_id'])) : ?>
    <ul>
      <li><a href="/logout">Logout</a></li>
    </ul>
<?php endif; ?>

<h1><a href="/">To Do List App</a></h1>
<h2><?= $page_title; ?></h2>

<!-- Display error messages if applicable -->
<?php include 'error_messages.php'; ?>
