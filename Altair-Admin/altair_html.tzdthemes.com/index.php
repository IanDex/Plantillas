<?php
$file = file('http://localhost/-/htdocs/altair_html.tzdthemes.com/borrar.php');
 
foreach($file as $linenum => $line){
    echo "<br> ".htmlspecialchars($line).' ';
}
?>