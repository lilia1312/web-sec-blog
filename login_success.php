
<?php

// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();

if(!isset($_SESSION['username'])){
	header("location:login.php");
}
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - Login';
  $g_page = 'login';
  require 'header.php';
  require 'menu.php';
  
  $posts = find_all_blogs(BLOG_INDEX_NUM_POSTS);


?>
<html>
	<head>
		<title>Main Login Page</title>
	</head>
	<body>

	<div id="all_blogs">

	<p>You have successfully logged in</p>


</div>
<?php
  require 'footer.php';
?>


	</body>
</html>