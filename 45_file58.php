<?php
// print_r($_FILES);
if($_FILES['fileUpload']){
    $path =$_FILES['fileUpload']['name'];
    $upload_path="./Uploads/".$path; // make a folder ex: Uploads and put that folder path 
    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)){
    echo "file uploaded"; // you can see uploaded file in Upload folder
    }
    else{
        die ("failed to upload");
    }
}
else{
        die("no file found");
    }
?>