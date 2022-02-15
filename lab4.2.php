<?php

$son = intval(fgets(STDIN));

for ($i = 0; $i < $son; $i++) {
    for ($j = 0; $j < $son; $j++) {
        echo "$i$j\t";
    }
    echo "\n";
}

?>

<form action="welcome_get.php" method="post">
    <input type="text" name="_method" value="PUT">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

