<?php
$joias = array();

while (($joia = fgets(STDIN)) !== false) {
    $joia = trim($joia); 
    $joias[$joia] = true; 
}

echo count($joias) . "\n";
