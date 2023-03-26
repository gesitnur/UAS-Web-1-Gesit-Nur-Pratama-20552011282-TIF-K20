<?php
// print_r($_POST['id']);
  $url = "https://63b58ffc58084a7af3989158.mockapi.io/shoes/{$_POST['id']}";
  // $data = array('name' => $_POST['name'], 'stock' => $_POST['stock'], 'price' => $_POST['price'], 'amount_sold' => $_POST['amount_sold']);
  
  $options = array(
      'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'DELETE',
      )
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  // var_dump($url);
  if ($result === FALSE) { /* Handle error */ }
  
  header('Location: index.php');
?>