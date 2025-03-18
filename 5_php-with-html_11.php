<?php
$h2_color="purple";
echo "<h1 style='color:aqua'> php with html </h1>"; //style tag can be used is php
echo "<h4 style='color:skyblue'> php with html </h4>";

?>

<?php
$city="Uluberia";
$Name="Pritha Maity";
echo "<h1 style='color:#006400'>My name is " .$Name. "</h1>"; // you also can use color code 

?>

<h1 style="color: #191970">
    My name is <?php echo $Name; ?>
</h1>

<h2>
    <h2 style="color: <?php echo $h2_color;?>"> <?php echo "This is h2 tag"; ?> </h2>
    <h2 style="color: <?php echo $h2_color;?>"> I am from <?php echo $city; ?> </h2>
    <h2 style="color: <?php echo $h2_color;?>"> <?php echo $Name ?> </h2>

</h2>