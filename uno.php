<?php
if (isset($_POST['user'])){
$user = $_POST['user'];
$password = $_POST['password'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://auth.mattel163.com/account_v2/public/api/v1/account/login/mail',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('user_name' => $user,'password' => $password,'app_id' => '1','sign' => 'hash_id','language' => 'en'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
