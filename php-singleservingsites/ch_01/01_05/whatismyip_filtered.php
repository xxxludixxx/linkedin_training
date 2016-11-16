<?php

// returns first forwarded IP match it finds
function forwarded_ip() {
  $server = array(
      'HTTP_X_FORWARDED_FOR' => 'junk,0.0.0.0,123.123.123.123'
  );
  $keys = array(
      'HTTP_X_FORWARDED_FOR',
      'HTTP_X_FORWARDED',
      'HTTP_FORWARDED_FOR',
      'HTTP_FORWARDED',
      'HTTP_CLIENT_IP',
      'HTTP_X_CLUSTER_CLIENT_IP',
  );

  foreach($keys as $key) {
    if(isset($server[$key])) {
      $ip_array = explode(',', $server[$key]);
      foreach($ip_array as $ip) {
        $ip = trim($ip);
        if  (validate_ip($ip)) {
          return $ip;
        }
      }
    }
  }
  return '';
}

function validate_ip($ip) {
  if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) == false) {
    return false;
  } else {
    return true;
  }
}

$remote_ip = $_SERVER['REMOTE_ADDR'];
$forwarded_ip = forwarded_ip();

?>

Remote IP Address: <?php echo $remote_ip; ?><br />
<br />

<?php if($forwarded_ip != '') { ?>
  Forwarded For: <?php echo $forwarded_ip; ?><br />
  <br />
<?php } ?>

<br />