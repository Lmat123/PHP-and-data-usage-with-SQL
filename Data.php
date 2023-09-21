<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$myfile = fopen("file69.txt", "w+")or die("Unable to open file!");
fwrite($myfile, $_POST["password"]);
?>
Welcome <?php echo $_POST["name"]; ?><br>
Your lastname is: <?php echo $_POST["lastname"]; ?>
</body>
</html>