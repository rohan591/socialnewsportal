<?php
$val = 'iphone6';
$apiURL = "http://post-cache.tagboard.com/search/".$val;

 $data = array('count'=>50);
  $options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
        'content' => http_build_query($data),
    ),
  );

  $context  = stream_context_create($options);
  // echo '--->'.http_build_query($data);
  $result = file_get_contents($apiURL, false, $context);
  echo $result;
?>