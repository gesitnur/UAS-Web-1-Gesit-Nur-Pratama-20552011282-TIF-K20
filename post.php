<?php
// print_r($_POST['name']);
  $url = 'https://63b58ffc58084a7af3989158.mockapi.io/shoes';
  $data = array('name' => $_POST['name'], 'stock' => $_POST['stock'], 'price' => $_POST['price'], 'amount_sold' => $_POST['amount_sold']);
  
  // use key 'http' even if you send the request to https://...
  $options = array(
      'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($data)
      )
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  if ($result === FALSE) { /* Handle error */ }
  
  header('Location: dashboard.php');
?>