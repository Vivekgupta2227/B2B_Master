
<?php
  require_once __DIR__ . '/vendor/autoload.php';
  session_start();
  date_default_timezone_set('Asia/kolkata');
  
  $REDIRECT_URI = 'https://localhost/Jetleads_Master/callback.php';
  $KEY_LOCATION = __DIR__ . '/credentials.json';
  $TOKEN_FILE   = "token.json";
  
  $SCOPES = array(
      Google_Service_Gmail::MAIL_GOOGLE_COM,
      'email',
      'profile'
  );
  
  $client = new Google_Client();
  $client->setApplicationName("Jetleads");
  $client->setAuthConfig($KEY_LOCATION);
  
  // Incremental authorization
  $client->setIncludeGrantedScopes(true);
  
  // Allow access to Google API when the user is not present. 
  $client->setAccessType('offline');
  $client->setRedirectUri($REDIRECT_URI);
  $client->setScopes($SCOPES);
  
  if (isset($_GET['code']) && !empty($_GET['code'])) {
      try {
          // Exchange the one-time authorization code for an access token
          $accessToken = $client->fetchAccessTokenWithAuthCode($_GET['code']);
          
          // Save the access token and refresh token in local filesystem
          file_put_contents($TOKEN_FILE, json_encode($accessToken));
          
          $_SESSION['accessToken'] = $accessToken;
          header('Location: ' . filter_var($REDIRECT_URI, FILTER_SANITIZE_URL));
          exit();
      }
      catch (\Google_Service_Exception $e) {
          print_r($e);
      }
  }
  
  if (!isset($_SESSION['accessToken'])) {
      
      $token = @file_get_contents($TOKEN_FILE);
      
      if ($token == null) {
          
          // Generate a URL to request access from Google's OAuth 2.0 server:
          $authUrl = $client->createAuthUrl();
          
          // Redirect the user to Google's OAuth server
          header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
          exit();
          
      } else {
          
          $_SESSION['accessToken'] = json_decode($token, true);
          
      }
  }
  
  $client->setAccessToken($_SESSION['accessToken']);
  
  /* Refresh token when expired */
  if ($client->isAccessTokenExpired()) {
      // the new access token comes with a refresh token as well
      $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
      file_put_contents($TOKEN_FILE, json_encode($client->getAccessToken()));
  }
  if (isset($_REQUEST['error'])) {
        //header('Location: ./index.php?error_code=1');
        echo "error auth";
    }
    else{
        // Redirects to google for User Authentication
        $authUrl = $client->createAuthUrl();
        header("Location: $authUrl"); 
}

 

  ?>
