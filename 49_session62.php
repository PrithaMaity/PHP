<?php
session_start(); // Start the session

// Assign values to session variables correctly
$_SESSION["color"] ="blue";
echo $_SESSION["color"]; // Output session values
echo "<br/><br/>";

$_SESSION["days"] ="sunday";
echo $_SESSION["days"];
echo "<br/><br/>";

// Assign multiple values to a single key using an array
$_SESSION["fruits"] = ["apple", "banana", "orange"];
print_r($_SESSION["fruits"]); //you can not directly echo an array Instead, you need to use print_r(), var_dump(), or loop through the array 
echo "<br/><br/>";

// Loop through the array and print each fruit
foreach ($_SESSION["fruits"] as $fruit) {
    echo $fruit . "<br/>";
}

// Print all session variables
print_r($_SESSION); 

// echo "<br/>Before destroying session:<br/>";
// print_r($_SESSION);

// Uncomment the line below to destroy the session when needed
session_destroy();
setcookie(session_name(), '', time() - 3600, '/'); // Deletes session cookie
$_SESSION = []; // Clears session data immediately
echo "Session destroyed successfully.";

// echo "<br/><br/>After destroying session:<br/>";
// print_r($_SESSION); // Should now be empty


?>