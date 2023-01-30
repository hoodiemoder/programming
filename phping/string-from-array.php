<!DOCTYPE html>
<html>
<body>
<?php
/*Generates a string with words from different arrays.*/
$texture = array("smooth", "chunky", "glossy");
$color = array("red", "blue", "yellow", "orange", "green");   
$object = array("car", "banana", "rhino", "kiwi", "peach");
function rand_pick($array) {
    $rand_position = rand(0, sizeof($array) - 1);
    $rand_string = $array[$rand_position];
    echo "$rand_string";
}
function rand_description() {
  rand_pick($texture);
  rand_pick($color);
  rand_pick($object);
}
function rand_description();
</body>
</html>
