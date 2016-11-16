<?php
function copyrights($foundation) {
    $today = date('Y');
    if ($foundation < $today) {
        $today = date('y');
        return "&copy; $foundation&ndash;$today";
    } else {
        return "&copy; $foundation";
    }
}

echo copyrights(1953);