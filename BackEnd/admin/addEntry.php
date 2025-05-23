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
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 768px)">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <script src="addEntry.js"></script>
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
            
            <div class="hidden" id="preview1">
                <article class="blogpost">
                    <div class="blogpost-header">
                        <div class="blogpost-title">
                            Title
                        </div>

                        <div class="blogpost-date">
                            Written
                        </div>
                    </div>
                    
                    <div class="blogpost-content">
                        Content
                    </div>
                </article>
            </div>

            <div id="preview2">
                <form id="form" action="addPost.php" method="POST">
                    <div class="input-group">
                        <label for="title">Title</label><br/>
                        <input type="text" id="title" name="title">
                    </div>

                    <br/>
                    <div class="input-group">
                        <label for="content">Content</label><br/>
                        <textarea type="text" id="content" name="content"></textarea>
                    </div>
            </div>
                    <br>

                    <button type="submit">Post</button>
                    <button type="button" id="clear">Clear</button>
                    <button type="button" id="preview">Preview</button>
                </form>
        </section>
    </body>
</html>