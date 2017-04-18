<!DOCTYPE html>
<html>
    <head>
        <title>Beachside Hotel</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/media-queries.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include 'php/pehape.php';
        ?>
        <div class="container">
            <div class="header">
                <img class="logo" src="images/logo.png">
                <div id="navKecil" class="overlay">
                    <span class="closebtn cont" id="closenav">&times;</span>
                    <div class="overlay-content cont">
                        <a href="#">Home</a>
                        <a href="#">Facilities</a>
                        <a href="#">Food &amp; Beverage</a>
                        <a href="#">About</a>
                    </div>
                </div>
                <span class="navicon" id="navicon"><i class="fa">&#xf0c9;</i></span>
                <div class="nav">
                    <div class="navigate">
                        <a class="linknav" href="">Home</a>
                        <div class="line ini"></div>
                    </div>
<!--
                    <div class="navigate dropdown">
                        <a class="linknav" href="">Menu</a>
                        <div class="line"></div>
                        <div class="dropmenu">
                            <a href="#">Appetizers</a>
                            <a href="#">Main</a>
                            <a href="#">Dessert</a>
                        </div>
                    </div>
-->
                    <div class="navigate">
                        <a class="linknav" href="">Facilities</a>
                        <div class="line"></div>
                    </div>
                    <div class="navigate">
                        <a class="linknav" href="">Food &amp; Beverage</a>
                        <div class="line"></div>
                    </div>
                    <div class="navigate">
                        <a class="linknav" href="">About</a>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <section class="back">
                <div class="front">
                    <span class="title-container">
                        <h1 class="title">Beachside Hotel</h1>
                        <p class="subtitle">Perfect place for your holiday</p>
                    </span>
                </div>
            </section>
            <section class="opening">
                <h1 class="h1_o">Welcome</h1>
                <p class="p_o">
                    From a sumptuous sojourn on your own private island, to a quick city break in a five-star hotel. Beachside offers high-end holidays that are second to none. Like a jewel set between a sapphire and an emerald, Beachside sits amidst the tropical gardens and the indigo Limassol sea.
                </p>
            </section>
            <section class="book-container parallax">
                <form>
                    <div class="t_form">
                        Book Now
                    </div>
                    <div class="form">
                        <div class="input">
                            <label><h4>Check In Date</h4></label><br>
                            <div class="tanggal">
                                <input type="date" name="ci" min="<?php echo date("Y-m-d");?>">
                            </div>
                        </div>
                        <div class="input">
                            <label><h4>Check Out Date</h4></label><br>
                            <div class="tanggal">
                                <input type="date" name="co" min="<?php echo date("Y-m-d", strtotime("tomorrow"));?>">
                            </div>
                        </div>
                        <button type="button" onclick="book()">Check Availability</button>
                    </div>
                </form>
            </section>
            <div id="message">
                <p class="message">This feature isn't available right now</p>
            </div>
            <section class="image-container">
                <?php
                $image = array("view","bed","resto","gym","spa");
                $title = array("Beautiful Scenery","Room","Restaurant","Gym","Spa");
                
                for($i=0;$i<5;$i++) {
                    if($i==0) {$l="img_l";} else {$l="";}
                ?>
                <div class="images <?php echo $l; ?>" onclick="show(<?php echo $i; ?>)" style="background: url(images/<?php echo $image[$i]; ?>_1.jpg) center; background-size: cover;">
                    <div class="imgs_capt">
                        <div class="h1_img"><h1 class="img_t"><?php echo $title[$i]; ?></h1></div>
                        <div class="img_preview">
                            <span class="imgs_span"><i class="fa fa-play-circle-o"></i> Preview</span>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <div id="modal" class="modal">
                    <span class="next" onclick="ganti(1)">&#10095;</span>
                    <span class="prev" onclick="ganti(-1)">&#10094;</span>
                    <div class="modal-content">
                        <span class="close" id="close">X</span>
                        <div class="urut" id="urut"></div>
                        <div class="ss_cont">
                            <?php
                            slideshow();
                            ?>
                        </div>
                        <div class="progress">
                            <div id="progress"></div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="up">
                    <div class="top">
                        <h1 class="h1_f"></h1>
                        <p class="p_f"><i class="fa fa-home"></i> Jl. Danau Ranau </p>
                        <p class="p_f"><i class="fa fa-phone"></i> 460000 </p>
                    </div>
                    <div class="top r">
                        <p class="p_f"><a href="#" class="a_f"><i class="fa fa-facebook"></i> Beachside Hotel </a></p>
                        <p class="p_f"><a href="#" class="a_f"><i class="fa fa-twitter"></i> &#64;Beachside_Hotel </a></p>
                    </div>
                </div>
                <div class="bottom">
                    &copy; 2016 Wildan Ziaulhaq
                </div>
            </footer>
        </div>
    </body>
</html>
<script src="js/jquery.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/jees.js"></script>