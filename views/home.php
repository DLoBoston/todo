<?php include 'partials/html_header.php'; ?>

<body>
  
	<?php include 'partials/header.php'; ?>
  
	<h3>All Lists</h3>
	
	<p><a href="/list">Add new list</a></p>
  
	<ul>
		<?php
			foreach ($lists as $list) :
				echo '<li><a href="/list/' . $list->id . '">' . $list->name . '</a></li>';
			endforeach;
		?>
	</ul>

<?php include 'partials/html_footer.php';
