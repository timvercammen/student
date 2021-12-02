19 lines (17 sloc)  419 Bytes

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "steden";

global $servername,$username, $password, $dbname;
?>

<?php

$conn = new mysqli ($servername,$username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
