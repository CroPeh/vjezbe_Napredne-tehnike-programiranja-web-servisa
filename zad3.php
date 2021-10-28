<?php
    $prvi=$_GET["prvi"];
    $drugi=$_GET["drugi"];

    function add($x,$y) {
    $total = $x + $y;
    return "$x + $y = " . $total;
    }
    echo add($prvi,$drugi);
    ?>