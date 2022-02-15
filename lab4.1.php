<?php

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "($i,$j)\t";
    }
    echo "\n";
}

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if ($i === 0) {
            echo " $j\t";
        } else {
            echo "$i$j\t";
        }
    }
    echo "\n";
}

