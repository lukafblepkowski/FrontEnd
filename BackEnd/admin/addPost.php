<?php
    session_start();

    if((isset($_SESSION['logged-in'])&&$_SESSION['logged-in']) && $_SERVER["REQUEST_METHOD"] === "POST") {
        $given_title = $_POST['title'];
        $given_content = $_POST['content'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "website";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error) {
            exit("Connection failed: " . $conn->connect_error);
        }  
        
        #Get author from users
        $sql = $conn->prepare("SELECT user_id FROM users WHERE email = ?");
        $sql->bind_param("s", $_SESSION["email"]);
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
        $retrieved_id = $row["user_id"];
        
        #Post the post !
        $sql = $conn->prepare("INSERT INTO posts (author_id, content, title) VALUES (?,?,?)");
        $sql->bind_param("sss", $retrieved_id,$given_content,$given_title);
        if($sql->execute()) {
            #Post Succesful
        } else {
            #Post Unsuccesful
            header("Location: addEntry.php?post=fail");
            exit();
        }
    
    } else {

        #Not logged in, somehow
        header("Location: ../");
    }
?>