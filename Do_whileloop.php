<?php
print "<b><u>Multiplication Table.</u></b></br><i>The first 12 multiples of 5</i></br>";
do{
    print " </br>";
    for($x=1;$x<=12;$x++){
        $ans=5*$x;
        print "5 x ".$x." = ".$ans." </br>";
    }
}while($x>13);
