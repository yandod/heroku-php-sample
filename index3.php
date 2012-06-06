<?php
require_once 'sdk/src/facebook.php';
$facebook = new Facebook(array(
  'appId'  => getenv('FACEBOOK_APP_ID'),
  'secret' => getenv('FACEBOOK_SECRET'),
));

$user = $facebook->getUser();

$user_profile = array();
if ($user) {
  $user_profile = $facebook->api('/me');
  $url = $facebook->getLogoutUrl();
} else {
  $url = $facebook->getLoginUrl();
}

echo $url;
?>
<pre>
<?php var_dump($user_profile); ?>
</pre>