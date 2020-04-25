<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '248264700584-l48hg6auvgh7posmlit4lpaqagiagb61.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'HwafYxaTbfHyLisJ3GNtlkXK'; //Google client secret

$redirectURL = 'http://www.mitwapalkhiwala.com/services.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>