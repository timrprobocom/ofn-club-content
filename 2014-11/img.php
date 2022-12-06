<?php

?>

<html>
<head>
<style>
img.flyer {
    margin: 10px;
    border: 2px solid blue;
    float: left;
}
</style>
</head>
<body>
<?php
foreach( glob('*.l.png') as $nm ) 
{
    echo "<img class=flyer src='$nm'>\n";
}
?>

</body>
</html>

