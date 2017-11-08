<?php

function hit_count(){
    $filename = 'count.txt';
    $handle = fopen( $filename, 'r');
    $current = fread($handle, filesize($filename));
    
    
    $current_inc = $current + 1;
    
    fclose($handle);
    
    echo $current_inc;
    
    $handle = fopen($filename, 'w');
    fwrite($handle, $current_inc);
    fclose($handle);
}

?>
AddType