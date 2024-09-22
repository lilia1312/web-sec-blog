<html>
<head>
    <title>Main Login Page</title>
</head>
<body>
<?php
 require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - Index';
  $g_page = 'index';
  require 'header.php';
  require 'menu.php';


ob_start();
$host = "localhost"; // Host name
$username = "bloguser"; // MySQL username
$password = "password"; // MySQL password
$db_name = "blog"; // Database name
$tbl_name = "members"; // Table name
$mysqli = new mysqli($host, $username, $password, $db_name);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// Start the session at the beginning
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['myusername'];
    $mypassword = $_POST['mypassword'];

    // Prepare the SQL statement to prevent SQL injection
    $sql = "SELECT password FROM $tbl_name WHERE username = ? LIMIT 1";
    $statement = $mysqli->prepare($sql);
    
    // Bind parameters
    $statement->bind_param("s", $myusername);
    
    // Execute the query
    $statement->execute();
    
    // Get the result
    $result = $statement->get_result();
    
    // Fetch the data
    if ($row = $result->fetch_assoc()) {
        $returnedpassword = $row['password'];
?>
<div id="all_blogs">

<?php   
        // If returned password matches entered password, valid login
        if (password_verify($mypassword, $returnedpassword)) {
            // Register $myusername and redirect to file "login_success.php"
            $_SESSION['username'] = $myusername;
            header("location:login_success.php");
            exit(); // Always exit after header redirection
        } else {
            echo "Wrong Username or Password";
        }
    } else {
        echo "Wrong Username or Password";
    }

    // Close the statement
    $statement->close();
}

// Close the connection
$mysqli->close();

ob_end_flush();
?>
</div>
<?php
  require 'footer.php';
?>


</body>
</html>
