<?php
$buah = "apel";

switch ($buah) {
    case "mangga":
        echo "Ini mangga";
        break;
    case "apel":
        echo "Ini apel";
        // Break disini menghentikan switch
        break;
    case "pisang":
        echo "Ini pisang";
        break;
    default:
        echo "Buah tidak dikenal";
}

echo "<br><br><strong> by:dewi puspita sari";