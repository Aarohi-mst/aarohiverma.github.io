<!DOCTYPE html> 
<html>
  <head>
    <title>Main Page</title>
  </head>
  <body>
    <h1>Welcome to the Main Page</h1>

    <a href="./PrivacyPolicy/index.html">Privacy Policy</a> |
    <a href="./TermsOfService/index.html">Terms of Service</a>

    <br><br>

    <?php
    require_once 'TikTok/Authentication/Authentication.php';

    use TikTok\Authentication\Authentication;

    $authentication = new Authentication( array(
        'client_key' => 'aw0c3fhti11nykb0',
        'client_secret' => 'SZ5P4Pr0aZUkWXLBTnPBykk6x2q20n0E'
    ) );

    $redirectUri = 'https://aarohisolutions.netlify.app/auth/callback';

    $scopes = array(
        'user.info.basic',
        'user.info.profile',
        'user.info.stats',
        'video.publish',
        'video.upload',
        'video.list'
    );

    $authenticationUrl = $authentication->getAuthenticationUrl( $redirectUri, $scopes );

    echo '<a href="' . $authenticationUrl . '">' .
        '<img src="image (1).jpg" alt="TikTok logo" /> Continue With TikTok' .
        '</a>';
    ?>
  </body>
</html>



















<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Main Page</title>
  </head>
  <body>
    <h1>Welcome to the Main Page</h1>
    <a href="./PrivacyPolicy/index.html">Privacy Policy</a> |
    <a href="./TermsOfService/index.html">Terms of Service</a>
  </body>
</html> -->
