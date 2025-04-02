<?php
// $fruit="apple";
setcookie("fruit","apple",time()+(86400)); //set cookies and time for
setcookie("color","teal",time()+(86400));


if(isset($_COOKIE['fruit'])){ // for check the cookie is set or not
    echo "current cookie is ". $_COOKIE['fruit'];
}else{
    echo "no cookie(fruit) set";
}

echo "<br/>";
echo "<br/>";

if(isset($_COOKIE['color'])){
    echo "current cookie is ". $_COOKIE['color'];
}else{
    echo "no cookie(color) set";
}

echo "<br/>";
echo "<br/>";
print_r($_COOKIE); // to print all cookies
// you can see all cookies in any file by print_r
?>