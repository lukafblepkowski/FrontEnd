<?php
    #Password is 12345678

    session_start();

    if((!isset($_SESSION['logged-in'])||!$_SESSION['logged-in']) && $_SERVER["REQUEST_METHOD"] === "POST") {
        $given_email = $_POST['email'];
        $given_password = $_POST['password'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "website";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error) {
            exit("Connection failed: " . $conn->connect_error);
        }  
        
        #Retrieve password hash from server
        $sql = $conn->prepare("SELECT password_hash FROM users WHERE email = ?");
        $sql->bind_param("s", $given_email);
        $sql->execute();
        $result = $sql->get_result();
        
        #Too many users found
        if($result->num_rows > 1) {
            exit("Email collision !");
        }
        
        #No users found
        if($result->num_rows < 1) {
            #Wrong username/password
            header("Location: login.html");
            exit();
        }
        
        $row = $result->fetch_assoc();
        $retrieved_hash = $row["password_hash"]; 

        if(password_verify($given_password, $retrieved_hash)) {
            #Correct password
            $_SESSION['logged-in'] = true;
            $_SESSION['email'] = $given_email;
            header("Location: addEntry.php");
            exit();
        } else {
            #Wrong username/password
            header("Location: login.html");
            exit();
        }
    } else {
        #Session already active
        header("Location: addEntry.php");
        exit();
    }
?>