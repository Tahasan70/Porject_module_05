<?php
  
  $strings = ["Hello", "World", "PHP", "Programming"];

  foreach($strings as $string){
    $cnt=0;
    $ss=str_split($string);
    foreach($ss as $key){
        $key=strtolower($key);
        if($key=='a'||$key=='e'||$key=='i'||$key=='o'||$key=='u'){
            $cnt++;
        }
        $revstr=strrev($string);
       
    }
    echo "Original String: ".$string . " Vowel Count: ".$cnt. " Reverse String: " .$revstr ."\n";
  }

?>
