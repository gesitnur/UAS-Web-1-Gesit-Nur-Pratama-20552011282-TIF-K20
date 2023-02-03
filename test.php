a<br>
aa <br>
<?php 
$api_url = 'https://63b58ffc58084a7af3989158.mockapi.io/shoes';
$data = file_get_contents($api_url);
$result = json_decode($data);
print_r($result[0]->name);
?>
