<?php
    $colors = array('#09BFFA', '#FF5733', '#33FFFC', '#FF33F9',  '#8C2724', '#BCF039', '#39FF33', '#F9FF33');
    $color_count = count($colors);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Random Colors</title>
        <style type="text/css">
            body {
                margin: 0;
                padding: 0;
                background: #93B5C8;
            }
            .area {
                float: right;
                margin: 1px 2px;
                padding: 0;
                width: 20px;
                height: 20px;
                border: 1px black;
                box-shadow: 1px 1px steelblue;
                text-align: center;
            }
            p {
                font-size: 68px;
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>
        <?php
        $squares = (100 - 23) * 77;
        for($i=0; $i < $squares; $i++) {
            echo "<div class=\"area\" style=\"background: {$colors[rand(0,$color_count-1)]}; color:{$colors[rand(0,$color_count-1)]}\">O</div>";
        }
        ?>
    </body>
</html>