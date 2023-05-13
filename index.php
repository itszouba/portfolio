<?php
include "connexion.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>


<?php
if(isset($$Message)){
    foreach($$Message as $$Message){
        echo'
        <div class="Message">
        <span> '.$Message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}

?>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Zayneb<span>Zouaoui</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Zayneb Zouaoui</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>

        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profil.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Zayneb and I'm a <span class="typing-2"></span></div>
                    <p>Welcome everyone!, I'm a Web developer, Web Designer and Manager, passionate about developing, designing web interfaces and managing business.</p>
                    <a download="" href="cv/cv.png" class="button">Download CV<i class="ri-download-line"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Designer</div>
                        <p>Creating the design of a website or web pages.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Analyst </div>
                        <p>Uses complex data to develop actionable steps that will improve processes results.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Web Developer </div>
                        <p>Makes and maintains websites with diferrent program languages.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences through years .</div>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- work section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Portfolio</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/work1.jpg" alt="">
                        <div class="text">Work 1</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/work2.jpg" alt="">
                        <div class="text">Work 2</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/work3.jpg" alt="">
                        <div class="text">Work 3</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/work4.jpg" alt="">
                        <div class="text">Work 4</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/work5.jpg" alt="">
                        <div class="text">Work 5</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/work6.jpg" alt="">
                        <div class="text">Work 6</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="carousel owl-carousel"></div>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Zayneb Zouaoui</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Tunis, Tunisia</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">zayneb.zouaoui@esprit.tn</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="form_contact.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="Name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="Email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="Subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="Message" placeholder="Message" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="send">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By Coding </a> | <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
