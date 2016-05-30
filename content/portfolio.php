<?php
    $portfolio = array(
        array("uvmTheatre.png", "UVM Theatre", "//github.com/nickagel/UVM.Theatre", "#34495e"),
        array("birthdayCalculator.png", "Birthday Calculator", "//github.com/nickagel/Birthday-Calculator", "#ffb02f"),
        array("myWebGrocer.png", "MyWebGrocer CONFIDENTIAL", "", "#006D81"),
        array("resume.png", "Portfolio", "//github.com/nickagel/Resume", "#e67e22"),
        array("sorryStats.png", "Game of Sorry Stats", "//github.com/nickagel/Stats-Sorry", "#0085A1"),
        array("speechTherapyGames.png", "Speech Therapy Games", "//github.com/nickagel/Speech_Therapy_Games", "#bdc3c7"),
        array("uvmCEMS.png", "UVM CEMS", "//www.uvm.edu/~cems/", "#ecf0f1"),
        array("worksAndDaysFarm.png", "Works And Days Farm", "http://worksanddaysfarm.com/", "#34495e")
    );
?>
<h1>Portfolio</h1>
<ol>
    <?php 
        foreach($portfolio as $item){
            echo "<li><a href='" . $item[2] . "'><img style='background-color:" . $item[3] . "' src='./images/portfolio/" . $item[0] . "'><h6>" . $item[1] . "</h6></a></li>";
        }
    ?>
</ol>