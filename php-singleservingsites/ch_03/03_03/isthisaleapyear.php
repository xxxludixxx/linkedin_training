<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Is This a Leap Year?</title>
    <style type="text/css">
        body {
            margin: 10px 20px;
            padding: 0;
            background: #FFFFFF;
        }
        #main-content {
            padding: 230px 80px;
            text-align: center;
            color: #0d004b;
            background: #62c3df;
        }
        #main-content h1 {
            font: 60px Arial, Helvetica, sans-serif;
        }
        #main-content p {
            font: 30px "Times New Roman", Times, Georgia, serif;
        }
    </style>
</head>
<body>
<div id="main-content">
    <h1>Is This a Leap Year?</h1>

    <p>
        <?php
            function is_leap_year($year) {
                if ($year % 4 > 0) {
                    return false;      //2015
                } elseif ($year % 100 > 0) {
                    return true;       //1984
                } elseif ($year % 400 > 0) {
                    return false;      //2100
                } else {
                    return true;       // 2000
                }
            }

            if (isset($_GET["year"])) {
                $year = intval($_GET["year"]);
                if (is_leap_year($year)) {
                    echo "Yes, year {$year} was a leap year.";
                } else {
                    echo "The year {$year} was not a leap year.";
                }
            } else {
                $year = date("Y");
                if (is_leap_year($year)) {
                    echo "Yes, year {$year} is a leap year. More time to waste!";
                } else {
                    echo "The year {$year} is not a leap year.";
                }
            }
        ?>
    </p>

    <form action="" method="get">
        Enter a year to find out if it is a leap year:<br/>
        <input type="text" name="year" value="<?= $year; ?>" /><br/>
        <input type="submit" value="submit">
    </form>
</div>

</body>
</html>
