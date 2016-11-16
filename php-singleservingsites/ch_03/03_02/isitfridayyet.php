<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is It Friday Yet?</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: #DFCC89;
    }
    #main-content {
      margin: 230px 80px;
      text-align: center;
      color: #3D2399;
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
      <h1>Is It Friday Yet?</h1>
      
      <p>
        <?php
        $day_index = date("N");
        $friday = 5;

        if($day_index < $friday) {
          $remaining_days = $friday - $day_index;
        } else {
          $remaining_days = $day_index - $friday;
        }

        if ($today == '5') {
          echo "Thank God, it's Friday";
        } else {
          echo "Oh, nooooo... It is not Friday yet!\r\n";
          echo "Still {$remaining_days} days till Friday :C";
        }
        ?>

      </p>
      
    </div>
    <div>
      <h2>date():</h2>
      <?= date("l"); ?><br/>
      <?= date("D"); ?><br/>
      <?= date("N"); ?><br/>

      <h2>getdate():</h2>
      <?= getdate()['weekday']; ?><br/>
      <?= getdate()['wday']; ?><br/>

      <h2>strftime():</h2>
      <?= strftime("%A"); ?><br/>
      <?= strftime("%a"); ?><br/>
      <?= strftime("%u"); ?><br/>
      <?= strftime("%w"); ?><br/>
    </div>
    
  </body>
</html>
