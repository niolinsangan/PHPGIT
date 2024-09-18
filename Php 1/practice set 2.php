<?php

$fruits = array("banana","apple","pineapple","strawberry","tamarind");



echo "<ol>";
for ($i = 0; $i < count($fruits); $i++) {
    echo"<li>". $fruits[$i] ."</li>";
}
echo "</ol>";

?>