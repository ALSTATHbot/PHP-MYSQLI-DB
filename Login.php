connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Check if user already exists
$sql = "SELECT * FROM users WHERE username = '$_POST[username]'
AND password = SHA2('$_POST[password]',256)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //Set the session variables
        session_start();
        $_SESSION["username"] = $row["username"];
        $_SESSION["user_id"] = $row["id"];
    }
    //Successfully logged in
    echo "Successfully logged in";
} else {
    echo "Wrong username or password";
}

$conn->close();
?>
