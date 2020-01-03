

<?php

require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('114785122566-779mnq4mpoi5dsm5a3rr32ro5h46ele0.apps.googleusercontent.com');
$google_client->setClientSecret('5_Evjs4SgaoDEBSMDRSZ7JWT');
$google_client->setRedirectUri('http://localhost/tutorial/php-login-using-google-demo/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');
session_start();

?>


