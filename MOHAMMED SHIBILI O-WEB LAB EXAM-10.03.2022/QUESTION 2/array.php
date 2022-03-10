<?php
$stud=array("afeef","arjun","sanal","joyal","vaishnav","sreelaya","shibili","stefi");
echo"<h3>";
echo"Array:";
echo"</h3>";
print_r($stud);
echo"<br>";
echo"<hr>";
echo"<br>";
echo"<h3>";
echo"Array in ascending order:";
echo"</h3>";
asort($stud);
print_r($stud);
echo"<br>";
echo"<hr>";
echo"<br>";
echo"<h3>";
echo"Array in descending order:";
echo"</h3>";
arsort($stud);
print_r($stud);

?>