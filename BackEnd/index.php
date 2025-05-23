<?php
    session_start();
?>

<html>
    <head>
        <title>Luka FB Lepkowski</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 768px)">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body id="top">
        <header>
            <nav>
                <ul class="horizontal">
                    <li><h1>Luka FB Lepkowski</h1></li>
                    <li><a class="inbound" href="#aboutme">About me</a></li>
                    <li><a class="inbound" href="#skills">Skills</a></li>
                    <li><a class="inbound" href="#education">Education</a></li>
                    <li><a class="inbound" href="projects.html">Projects</a></li>
                    <li><a class="inbound" href="viewBlog.php">Blog</a></li>
                    <li><a class="inbound" href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="columns">
                <div class="column">
                    <ul class="vertical">
                        <li><a class="outbound" href="https://github.com/lukafblepkowski">github</a></li>
                        <li><a class="outbound" href="https://spunky2.itch.io/">itch.io</a></li>
                        <li><a class="outbound" href="https://www.linkedin.com/in/luka-fb-lepkowski-522b68324/">linkedin</a></li>
                        <li><a class="outbound" href="https://bsky.app/profile/spunky2.com">bluesky</a></li>
                    </ul>
                </div>
            </div>
        </header>
            
        <section id="aboutme">
            <div class="columns">
                <div class="column">
                    <h2>About me</h2>
                </div>
                <div class="column">
                    <a class="inbound" id="backtotop" href="#top">back to top</a>
                </div>
            </div>
            
            <div class="columns">
                <div class="column">
                    <div id="profilePicture">
                        <img src="profile.jpg"><br/>
                        <i>luka lepkowski (he/him/they)<br/>game developer and designer</i><br><br>
                    </div>

                    Hello ! This is my portfolio. Hopefully it shows what I've made over the years. I've still got a ways to go, but I'm really proud of how far I've come.
                    <br><br>
                    I've always been a problem solver, and I've always loved to create. Game Dev is where those two meet for me.

                </div>
                <div class="column">
                    I'm a first year student at Queen Mary University of London, studying Computer Science. The course is great and I'm learning a lot. It's so great to finally be studying something so close to me.
                    <br><br>
                    Right now, the goal is to end up making games. I've made a few steps towards it (this portfolio, for one) but there's alot to go. It's so daunting ! 
                    <br><br>
                    I spend alot of time thinking about how games tick, what makes them work. Both from like, the mechanical code perspective, and also from the design perspective (what makes the game fun.)
                </div>
                <div class="column">
                    The dream is to work with someone like Toby Fox, or Edmund McMillen. Those two are real legends to me. There's loads of great designers in Japan too, but I don't speak the language... maybe someday I'll get to meet Hidetaka Miyazaki. Satoru Iwata was a hero to young me, and I still think about him all the time.
                    <br><br>
                    It looks like I've been pipe dreaming again.
                </div>
            </div>     
        </section>

        <section id="skills">
            <div class="columns">
                <div class="column">
                    <h2>Skills</h2>
                </div>
                <div class="column">
                    <a class="inbound" id="backtotop" href="#top">back to top</a>
                </div>
            </div>

            <br><br><h3>Backend</h3>

            <div class="skills-flex">
                <div class="skill">
                    <div class="skill-image">
                        <img src="java.png"><br>
                    </div>
                    
                    <p>Java</p>
                </div>
                <div class="skill">
                    <div class="skill-image">
                        <img src="cs.png"><br>
                    </div>
                    
                    <p>C#</p>
                </div>
                <div class="skill">
                    <div class="skill-image">
                        <img src="cpp.png"><br>
                    </div>
                    
                    <p>C++</p>
                </div>
                <div class="skill">
                    <div class="skill-image">
                        <img src="py.png"><br>
                    </div>
                    
                    <p>Python</p>
                </div>
                <div class="skill">
                    <div class="skill-image">
                        <img src="php.png"><br>
                    </div>

                    <p>PHP</p>
                </div>
            </div>

            <br><br><h3>Game Development</h3>

            <div class="skills-flex">
                <div class="skill">
                    <div class="skill-image">
                        <img src="unity.png"><br>
                    </div>

                    <p>Unity</p>
                </div>
                <div class="skill">
                    <div class="skill-image">
                        <img src="gms2.png"><br>
                    </div>

                    <p>GMS2</p>
                </div>
                <div class="skill">
                    <div class="skill-image">
                        <img src="opengl.png"><br>
                    </div>

                    <p>OpenGL</p>
                </div>
                <div class="skill">
                    <div class="skill-image">
                        <img src="lwjgl.png"><br>
                    </div>

                    <p>LWJGL</p>
                </div>
            </div>

            <br><br><h3>Frontend</h3>

            <div class="skills-flex">
                <div class="skill">
                    <div class="skill-image">
                        <img src="html.png"><br>
                    </div>

                    <p>HTML</p>
                </div>
                <div class="skill">
                    <div class="skill-image">
                        <img src="css.png"><br>
                    </div>

                    <p>CSS</p>
                </div>
                <div class="skill">
                    <div class="skill-image">
                        <img src="js.png"><br>
                    </div>

                    <p>JavaScript</p>
                </div>
            </div>

        </section>
        
        <section id="education">
            <div class="columns">
                <div class="column">
                    <h2>Education (& Experience)</h2>
                </div>
                <div class="column">
                    <a class="inbound" id="backtotop" href="#top">back to top</a><br/>
                </div>   
            </div>

            I'm currently enrolled at <i>Queen Mary University of London</i> doing <i>ECS400 Computer Science</i> (I'm currently on the three year course, but I might change to look for a year in industry.)
            <br/><br/>
            I graduated from <i>The King Alfred School</i> after studying (for my A-Levels) <i>Maths & Further Maths, Physics, and Computer Science.</i> (I went to school there for 10 years !)
            <br/><br/>
            I've done a few Game Jams over the years. The results of which are in my projects section, so do check that out, I'm very proud of them. I've done a couple summer schools too, doing Computer Science and Physics courses at Imperial.

            
        </section>

        <footer id="contact">
            <div class="columns">
                <div class="column">
                    <h2>Contact</h2>
                </div>
                <div class="column">
                    <a class="inbound" id="backtotop" href="#top">back to top</a><br/>
                </div>
            </div>

            Write to me at: <u><i>lukalepkowski@gmail.com</i></u><br/>
            @ me on BlueSky at: <u><i>@spunky2.com</i></u>

            <?php
                $admin = isset($_SESSION['logged-in']) && $_SESSION['logged-in'];

                $login_text = $admin ? "log out" : "admin";
                $login_href = $admin ? "admin/logout.php" : "admin/login.html";
            ?>

            <div id="admin">
                <?php
                    if($admin) { 
                ?>
                <a class="inbound" id="admin" href="admin/addEntry.php">
                    add post
                </a><br/>
                <?php
                    }
                ?>
                <a class="inbound" id="admin" href=" <?php echo htmlspecialchars($login_href)?>">
                    <?php echo htmlspecialchars($login_text)?>
                </a>
            </div>

            <ul class="horizontal">
                <li><a class="outbound" href="https://github.com/lukafblepkowski">github</a></li>
                <li><a class="outbound" href="https://spunky2.itch.io/">itch.io</a></li>
                <li><a class="outbound" href="https://www.linkedin.com/in/luka-fb-lepkowski-522b68324/">linkedin</a></li>
                <li><a class="outbound" href="https://bsky.app/profile/spunky2.com">bluesky</a></li>
            </ul>
        </footer>
    </body>
</html>