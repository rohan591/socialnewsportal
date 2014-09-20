<?php

$term = $_REQUEST['term'];
$apiURL = "http://post-cache.tagboard.com/search/".$term;

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

  header('Content-Type: application/json');
  echo json_encode($result);
?>