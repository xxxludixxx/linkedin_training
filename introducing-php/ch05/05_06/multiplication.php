<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Multiplication Table</h1>
    <table>
        <?php
        // Create first row of table headers
        echo "<tr>";
        echo "<th>&nbsp;</th>";
        for ($col = 1; $col <= 12; $col++) :
            echo "<th>$col</th>";
        endfor;
        echo "</tr>";
        // Create remaining code
        for ($row = 1, $col= 1; $row <= 12; $row++) :
            echo "<tr>";
            // Check if cell is a header
            if ($col == 1) :
                echo "<th>$row</th>";
            endif;
            while ($col <= 12) :
                echo "<td>" . $row * $col++ . "</td>";
            endwhile;
            echo "</tr>";
            // Reset %col
            $col = 1;
        endfor;
        ?>
    </table>
</body>
</html>