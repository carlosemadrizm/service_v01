<?php

require_once 'vendor/autoload.php';

use Google\Client;

define('GOOGLE_CLIENT_ID', '432882886420-uvdm69kl8nb2b19b2es2o7a3ttct5on4.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '0KSoCti3JgsmtmNq6VbSyr5g');
define('GOOGLE_REDIRECT_URL', 'http://localhost/google_login');

if(!session_id())
{
 session_start();
}

$client = new Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URL);
$client->addScope("email");
$client->addScope("profile"); 