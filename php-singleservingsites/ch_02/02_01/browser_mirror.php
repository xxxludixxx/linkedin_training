<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Browser Mirror</title>
  	<style type="text/css">
    body {
    margin: 0;
    padding: 0;
    background: #DFCC89;
}
    #main-content {
      margin: 30px;
      text-align: center;
      color: #3D2399;
    }
    #main-content h1 {
      font: 40px Arial, Helvetica, sans-serif;
    }
    #main-content p {
      font: 24px "Times New Roman", Times, Georgia, serif;
        text-align: left;
    }
  	</style>
  </head>
  <body>
    <div id="main-content">
        <h1>Browser Mirror</h1>

        <p> Remote IP: <?= $_SERVER['REMOTE_ADDR']; ?></p>
        <p> User Agent: <?= $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p> Referrer: <?= $_SERVER['HTTP_REFERER']; ?></p>
        <p> Request Time Unix: <?= $_SERVER['REQUEST_TIME']; ?></p>
        <p> Request Time Formatted: <?= date('l, j F, Y g:ia', $_SERVER['REQUEST_TIME']); ?></p>
        <p> Request URI: <?= $_SERVER['REQUEST_URI']; ?></p>
        <p> Request Method: <?= $_SERVER['REQUEST_METHOD']; ?></p>
        <p> Query String: <?= $_SERVER['QUERY_STRING']; ?></p>
        <p> HTTP Accept: <?= $_SERVER['HTTP_ACCEPT']; ?></p>
        <p> HTTP Accept Charset: <?= $_SERVER['HTTP_ACCEPT_CHARSET']; ?></p>
        <p> HTTP Accept Encoding: <?= $_SERVER['HTTP_ACCEPT_ENCODING']; ?></p>
        <p> HTTP Accept Language: <?= $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></p>
        <?php
        if ($_SERVER['HTTPS'] != '') :
        ?>
        <p> HTTPS?: <?= $_SERVER['HTTPS']; ?></p>
        <?php endif; ?>
        <p> Remote Port: <?= $_SERVER['REMOTE_PORT']; ?></p>

    </div>
  </body>
</html>
