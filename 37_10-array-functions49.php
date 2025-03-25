<?php
$fruits=["mango", "papaya", "jackfruit", "berry", "bamma", "pineapple", "apple","orange"];

print_r($fruits);
echo "<br/>";
echo "<br/>";
echo "<br/>";

//Add element
array_push($fruits,"grapes", "watermelon", "guava", "kiwi", "cherry"); //function to add element in array(you can add single element or multiple elements)

print_r($fruits);
echo "<br/>";
echo "<br/>";
echo "<br/>";

//Remove element
array_pop($fruits); //function to remove a single element
print_r($fruits);
echo "<br/>";
echo "<br/>";
echo "<br/>";

array_splice($fruits,-4); //function to remove multiple elements(gives the value how many elements you want to remove)
print_r($fruits);

?>