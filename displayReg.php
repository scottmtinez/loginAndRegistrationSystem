<?php
    //Variables
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confPassword = $_POST['confPassword'];

    //Send to DB
        //Gets Connection
            $connection = mySqli_connect("localhost", "u402761348_scottmtinez1", "Daisy77sxp.", "u402761348_logRegSystemDB");

        //Checks Connection
            if ($connection->connect_error) {
                die("Connection failed: "
                    . $connection->connect_error);
            }

        //Send users data to mysql DB
            $findUsername = "SELECT * FROM accounts WHERE username = '$username' "; //Check to see if username is taken
            $result = $connection->query($findUsername);

            if($result->num_rows == 0){
                $sql = "INSERT INTO `accounts`(`username`, `password`, `email`) 
                VALUES ('$username', '$password', '$email')";
                if ($connection->query($sql) === TRUE) {
                       //Output
                            echo "<link rel='stylesheet' href='index.css'> ";
                            echo"
                                <div class='myAcountInfo-container'>
                                    <form class='myAccount-info'>
                                        <h1 class='myAccount-title'>MY INFO</h1>
                                        <div class='input'>
                                            <label><b>Username:</b> $username </label><br>
                                            <label><b>Email:</b> $email </label><br>
                                            <input type='button' class='logout' value='Logout'>
                                        </div>
                                    </form>
                                </div>
                                ";
                }
            }else{
                echo "<h1 style='text-align:center;'>Invalid Username - Please try signing up again!</h1>";
            }

    //Logout Function 
        //???
?>
