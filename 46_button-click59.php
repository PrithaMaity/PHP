
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Call php function</title>
</head>
<body>
    <form action="" method="get"> <!-- you can set here post method also -->
        <button name="button" value="button1">call function</button> <!-- when click on button it will be called the function from php code-->
    </form>
</body>
</html>

<?php
if(isset($_GET['button'])){ // if you set here $REQUEST variable then it will work for both $GET and $POST
    btn_click(); //call the function
}

function btn_click(){
    echo "function called on button click";
}
?>
