<html>
	<head>
		<title>Main Logout Page</title>
	</head>
	<body>

<?php 
// Put this code in first line of web page. 
session_start();
session_destroy();

if(!isset($_SESSION['username'])){
	header("location:login.php");
}
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - Logout';
  $g_page = 'logout';
  require 'header.php';
  require 'menu.php';
  
?>
<div id="all_blogs">

<p>You have successfully logged out</p>

<?php header("refresh:3;url=login.php");?>


</div>
<?php
  require 'footer.php';
?>


	</body>
</html>