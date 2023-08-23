<?php
//Variables
$username = $_POST['username'];
$password = $_POST['password'];

// Display input for debugging
//echo "Username: " . $username . "<br>";
//echo "Password: " . $password . "<br>";

//Gets Connection
$connection = mysqli_connect("localhost", "u402761348_scottmtinez1", "Daisy77sxp.", "u402761348_logRegSystemDB");

//Checks connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

//Gets user input (html) data from MySQL DB
$sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password' ";
$result = $connection->query($sql);

if ($result->num_rows == 1) {
    echo "<link rel='stylesheet' href='index.css'> ";
    echo"
        <div class='myAcountInfo-container'>
            <form class='myAccount-info'>
                <h1 class='myAccount-title'>MY INFO</h1>
                <div class='input'>
                    <label><b>Username:</b> $username </label><br>
                </div>
            </form>
        </div>
        ";
} else {
    echo "<h1>Invalid username or password. Please try again.</h1>";
}


// Close the connection
mysqli_close($connection);
?>
