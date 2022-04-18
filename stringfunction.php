<?php
$name = "lucky is a good boy,";
echo $name,"<br>";
// strlen() - give length of string 
echo "the length of "."my string is :".strlen($name),"<br>";
// str_word_count() - count number of word in sentence
echo "the number of words :".str_word_count($name),"<br>";
// strrev()- reverse the string
echo "reverse of string is:".$name,"<br>";
//strpos() - return position of string 
echo "position of good:".strpos($name,"good"),"<br>";
// str_replace() - replace the given string 
echo str_replace("lucky","Eklavya",$name),"<br>";
// str_repeat() - repeat the given string
echo str_repeat($name,2),"<br>";
echo "<pre>";
// rtrim()- trip spaces of right side
echo rtrim("    this is a good boy    "),"<br>";
//ltrim()- trim left part of string
echo ltrim("    this is a bad boy    "),"<br>";

echo"</prep>"

?>
