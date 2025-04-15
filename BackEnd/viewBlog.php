<?php
            $given_email = $_POST['email'];
            $given_password = $_POST['password'];
    
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "website";
    
            $conn = new mysqli($servername, $username, $password, $dbname);
?>

<html>
    <head>
        <title>Luka FB Lepkowski</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body>            
        <section id="nobottom">
            <div class="columns">
                <div class="column">
                    <h2>Blog</h2>
                </div>
                <div class="column">
                    <a class="inbound" id="backtotop" href="index.html">back to front page</a>
                </div>
            </div>

            <div class="blogposts">
                <article class="blogpost">
                    <div class="blogpost-header">
                        <div class="blogpost-title"></div>
                        <div class="blogpost-date">(Written)</div>
                    </div>
                    
                    <div class="blogpost-content">

                    </div>
                </article>
            </div>
        </section>
    </body>
</html>