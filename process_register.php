<html>
<head>
    <title>Main Register Page</title>
</head>
<body>
<div id="all_blogs">

<?php
ob_start();

$host = "localhost"; // Host name
$username = "bloguser"; // MySQL username
$password = "password"; // MySQL password
$db_name = "blog"; // Database name
$tbl_name = "members"; // Table name

$mysqli = new mysqli($host, $username, $password, $db_name);

/* Check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];

// To protect against MySQL injection
$cleanusername = $mysqli->real_escape_string($myusername);
$cleanpassword = $mysqli->real_escape_string($mypassword);

// Salting adds uniqueness to each entry
$salt = uniqid();
$salted_password = $salt . $cleanpassword;
$encrypted_password = password_hash($mypassword, PASSWORD_DEFAULT);

// Prepare SQL statement
$sql = "INSERT INTO $tbl_name (username, password, salt) VALUES (?, ?, ?)";
$statement = $mysqli->prepare($sql);

// Bind parameters
$statement->bind_param("sss", $cleanusername, $encrypted_password, $salt);

// Execute the statement and check for errors
if ($statement->execute()) {
    echo "Registered successfully.";
    header("refresh:3; url=login.php"); // Redirect after 3 seconds
} else {
    echo "Error: " . $statement->error;
}

$statement->close();
$mysqli->close();

ob_end_flush();
?>
</div>
</body>
</html>
