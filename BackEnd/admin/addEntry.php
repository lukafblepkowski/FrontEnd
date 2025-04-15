<?php
    session_start();
    if((!isset($_SESSION['logged-in'])||!$_SESSION['logged-in'])) {
        #Redirect if not logged in
        header("Location: login.html");
        exit();
    }
?>

<html>
    <head>
        <title>Luka FB Lepkowski</title>
        <link rel="stylesheet" href="../reset.css">
        <link rel="stylesheet" href="../style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>
        <section class="admin-page">
            <div class="column">
                <a class="inbound" id="backtotop" href="../index.php">back to front page</a>
            </div>
            
            <div class="admin-header">
                <h1>New blog post</h1>
                <?php
                    if(isset($_GET['post']) && $_GET['post'] == "fail") {
                        echo "<br>Post was unsuccessful. Please try again.";
                    }
                ?>
            </div>

            <form action="addPost.php" method="POST">
                <div class="input-group">
                    <label for="title">Title</label><br/>
                    <input type="text" id="title" name="title" required>
                </div>

                <br/>
                <div class="input-group">
                    <label for="content">Content</label><br/>
                    <textarea type="text" id="content" name="content" required></textarea>
                </div>

                <br>

                <button type="submit">Post</button>
                <button type="reset">Clear</button>
            </form>
        </section>
    </body>
</html>