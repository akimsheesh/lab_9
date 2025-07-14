<?php declare(strict_types=1); // Enable strict types

function sum(int $x, int $y): int {
    return $x + $y;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>
