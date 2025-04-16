<?php
    function ordinal($n) {
        if($n >= 11 && $n <= 13) {
            return $n."th";
        }
        switch($n%10){
            case 1: return $n."st";
            case 2: return $n."nd";
            case 3: return $n."rd";
            default: return $n."th";
        }
    }

    # QuickSort Algorithm by timestamp
    function quickSortByTimestamp($array) {
        if (count($array) < 2) {
            return $array;
        }

        $pivot_index = floor(count($array) / 2);
        $pivot = $array[$pivot_index]["timestamp"];
        $pivot_row = $array[$pivot_index];
        
        $left = [];
        $right = [];
        
        foreach ($array as $index => $item) {
            if ($index == $pivot_index) continue; // Skip the pivot
            if ($item["timestamp"] <= $pivot) {
                $left[] = $item;
            } else {
                $right[] = $item;
            }
        }

        return array_merge(
            quickSortByTimestamp($right), // Sort DESC: newer first
            [$pivot_row],
            quickSortByTimestamp($left)
        );
    }

    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website";

    #Connect
    $conn = new mysqli($servername, $username, $password, $dbname);

    #Check connection is okay
    if($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }  
    
    #Retrieve posts
    $sql = $conn->prepare("SELECT * FROM posts");
    $sql->execute();
    $result = $sql->get_result();

    $rows = [];
    if($result->num_rows > 0) {
        //generate array
        while($row = $result->fetch_assoc()) {
            $_sql = $conn->prepare("SELECT email FROM users WHERE user_id = ?");
            $_sql->bind_param('i', $row['author_id']);
            $_sql->execute();
            $_result = $_sql->get_result();

            if($_result->num_rows == 1) {
                $r = $_result->fetch_assoc();
                $row['author'] = $r['email'];
            }

            array_push($rows, $row);
        }
    }

    #If there's no blog, go home !
    if(count($rows) == 0) {
        header("Location: ");
        exit();
    }

    $rows = quickSortByTimestamp($rows);
?>

<html>
    <head>
        <title>Luka FB Lepkowski</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 1000px)">

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
                    <a class="inbound" id="backtotop" href="index.php">back to front page</a>
                    <a class="inbound" id="newpost" href="admin/addEntry.php">new post</a>
                </div>
            </div>

            <div class="blogposts">
                <?php 
                    for($i = 0; $i < count($rows); $i++) {
                        $row = $rows[$i];
                ?>
                    <article class="blogpost">
                        <div class="blogpost-header">
                            <div class="blogpost-title">
                                <?php  
                                    echo htmlspecialchars($row['title'])
                                ?>
                            </div>

                            <div class="blogpost-date">
                                (Written
                                <?php 
                                    $time = strtotime($row['timestamp']);
                                    $dnt = ordinal(date("j", $time)) . date(" F Y, G:i", $time) . " UTC";
                                    echo $dnt;
                                ?>)
                            </div>
                        </div>
                        
                        <div class="blogpost-content">
                            <?php
                                #NL2BR converts new lines into <br> tag 
                                echo nl2br(htmlspecialchars($row['content']))
                            ?>
                        </div>

                        <div class="blogpost-author">
                            By <?php
                                echo htmlspecialchars($row['author']);
                            ?>
                        </div>
                    </article>
                <?php
                    }
                ?>
            </div>
        </section>
    </body>
</html>