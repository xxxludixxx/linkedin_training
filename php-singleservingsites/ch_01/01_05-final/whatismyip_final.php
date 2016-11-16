<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>What is my IP?</title>
    <style type="text/css">
      body {
        margin: 0;
        padding: 0;
        background: #e5ff7c;
      }

      #main-content {
        margin: 140px 40px 40px 40px;
        text-align: center;
        color: #0c6b1c;
        text-shadow: 1px 1px #d4ffb3;
        border-bottom: 1px;
        border-color: #0c6b1c;
      }

      h1 {
        font: 40px Arial, Helvetica, sans-serif;
      }

      p {
        font: 30px "Times New Roman", Times, serif;
      }

      p strong {
        font-size: 90px;
        color: #3D2399;
        text-shadow: 1px 1px #fff;
      }
    </style>
  </head>
  <body>
    <?php

    // returns first forwarded IP match it finds
    function forwarded_ip() {
      $keys = array(
          'HTTP_X_FORWARDED_FOR',
          'HTTP_X_FORWARDED',
          'HTTP_FORWARDED_FOR',
          'HTTP_FORWARDED',
          'HTTP_CLIENT_IP',
          'HTTP_X_CLUSTER_CLIENT_IP',
      );

      foreach($keys as $key) {
        if(isset($_SERVER[$key])) {
          $ip_array = explode(',', $_SERVER[$key]);
          foreach($ip_array as $ip) {
            $ip = trim($ip);
            if(validate_ip($ip)) {
              return $ip;
            }
          }
        }
      }
      return '';
    }

    function validate_ip($ip) {
      if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        return false;
      } else {
        return true;
      }
    }

    $remote_ip = $_SERVER['REMOTE_ADDR'];
    $forwarded_ip = '123.123.123.123';

    ?>

    <div id="main-content">
      <h1>What is my IP?</h1>
      <p>The request came from:<br />
        <strong><?= $remote_ip; ?></strong>
      </p>

      <?php if ($forwarded_ip != '') : ?>
      <p>The request was forwarded from:<br />
        <strong><?= $forwarded_ip; ?></strong>
      </p>
      <?php endif ?>
    </div>
  </body>
</html>