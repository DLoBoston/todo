<?php include 'partials/html_header.php'; ?>

<body>
  
	<?php include 'partials/header.php'; ?>
  
  <form action="<?= htmlspecialchars($route, ENT_QUOTES, "utf-8"); ?>" method="post">
    
    <label for="email">Email</label>
    <input type="text" id="email" name="email">
    
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <input type="submit" value="Login">
  </form>

<?php include 'partials/html_footer.php';
