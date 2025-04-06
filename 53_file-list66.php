<?php
$path="files"; //name of the folder
$items=scandir($path); //to scan directory

// Remove the special directory entries "." (current directory) and ".." (parent directory) 
$items=array_diff($items,array(".","..")); 
// print_r($items); //display the file names



// Loop through each item in the $items array
// Generate an HTML anchor (<a>) tag for each item
// The link will point to the file inside the "files" directory
// Clicking on the link will open/download the corresponding file
foreach($items as $item){
    echo "<a href=./files/$item>$item</a>";
    echo "<br/>";
}
?>