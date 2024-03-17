<?php

$uri = $_SERVER['REQUEST_URI'];
$segments = explode('/', trim($uri, '/'));

if (1 <= count($segments)) {
  if ("hello" === $segments[0]) {
    $response = [
      'status' => http_response_code(),
      'body' => 'Just hello from the backend!'
    ];

    if(2 === count($segments) && "world" === $segments[1]) {
      $response['body'] = 'Hello World from the backend!';
    }

    echo json_encode($response);
    return;
  }
}

?>


<h1 class="center">
  Hello from the backend!
</h1>


<?php
phpinfo()
?>