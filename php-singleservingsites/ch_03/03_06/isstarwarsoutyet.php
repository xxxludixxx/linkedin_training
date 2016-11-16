<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is Star Wars Out Yet?</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: #a2df70;
    }
    #main-content {
      margin: 30px;
      text-align: center;
      color: #0d4c06;
    }
    #main-content h1 {
      font: 40px Arial, Helvetica, sans-serif;
    }
    #main-content p {
      font: 24px "Times New Roman", Times, Georgia, serif;
    }
  	</style>
  </head>
  <body>
    <div id="main-content">
      <h1>Is Star Wars Out Yet?</h1>
        <p>
            <?= rand(0,1000); ?>
        </p>
      <p>
      <?php
          $star_wars_dates = array(
              1 => '1999-05-19',
              2 => '2002-05-16',
              3 => '2005-05-19',
              4 => '1997-05-25',
              5 => '1980-05-21',
              6 => '1983-05-25',
              7 => '2015-12-18',
              8 => '2017-05-26',
              9 => '2019-05-23'
          );


          if(isset($_GET['episode'])) {
            $episode = intval($_GET['episode']);
          } else {
            $episode = 8;
          }
          $release_date_s = $star_wars_dates[$episode];
          $release_date_t = strtotime($release_date_s);
          $release_date_p = strftime("%B %d, %Y", $release_date_t);
          $today = date('');

          if (time() >= $release_date_t) {
              echo "The Star Wars episode {$episode} was released on {$release_date_p}";
          } else {
              echo "The Star Wars episode {$episode} will be released on {$release_date_p}";
          }
      ?>
      </p>
      <form action="" method="get">
        Which Star Wars Episode would you like to check:<br /><br />
        <select name="episode">
          <?php
            for ($i; $i <= 9; $i++) {
              echo "<option value=\"{$i}\">{$i}</option>option>";
            }
          ?>
        </select>
        <input type="submit" value="Submit" />
      </form>

      
    </div>
    
  </body>
</html>
