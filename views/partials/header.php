<?php // Display logout link for logged in users
  if (isset($_SESSION['user_id'])) : ?>
    <ul>
      <li><a href="/logout">Logout</a></li>
    </ul>
<?php endif; ?>

<h1><a href="/">To Do List App</a></h1>
<h2><?= $page_title; ?></h2>
