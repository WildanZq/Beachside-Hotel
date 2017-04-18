<?php
function slideshow() {
    $content = array("view","bed","resto","gym","spa");
    $jumlah = array(5,4,6,2,3);
    for($i=0; $i <= 4; $i++) {
        for($n=1; $n <= $jumlah[$i]; $n++) {
            echo "<div class='slideshow' style='background: url(./images/". $content[$i] ."_$n.jpg) center; background-size: cover;'></div>";
        }
    }
}
?>