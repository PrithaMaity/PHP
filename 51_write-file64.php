<?php

if(isset($_POST['filename'])){
    // $fileName="files/dummy.txt"; // create name of the file
    $fileName="files/".$_POST['filename'];
    // $content="this is a dummy file"; // create content of the file
    $content=$_POST['content'];
    $file=fopen($fileName,"w") or die("unable to create file"); //open on server by fopen function
    fwrite($file,$content); //will add content in file
    fclose($file); //close the file
    echo "file created";

}
?>


<form action="" method="post">
    <input type="text" placeholder="enter file name" name="filename" />
    <br />
    <br />
    <textarea name="content" >

    </textarea>
    <br />
    <br />
    <button >Create File</button>
</form>