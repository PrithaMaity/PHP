<?php

// uncomment the code to read a file without html
/*
$file="files/data.txt"; //define the path of the file to be read
$myFile= fopen($file,"r") or die("unable to read file!"); 
//opent file in "read" mode ("r")
// if the file can not be opened, display an error message and stop execution
echo fread($myFile, filesize($file)); 
// Read the entire content of the file using fread()
// filesize($file) gets the total size of the file in bytes, ensuring the whole file is read
fclose($myFile);
// close the file after reading to free system resources
*/

if(isset($_FILES['file'])){
    $file=$_FILES['file']['tmp_name'];   
    $myFile= fopen($file,"r") or die("unable to read file!"); 
    echo fread($myFile, filesize($file)); 
    fclose($myFile);

}
?>


<form action="" method="post" enctype="multipart/form-data" >
    <input type="file" name="file" />
    <br/>
    <br/>
    <button>Read File</button>
</form>