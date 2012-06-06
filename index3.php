<?php
require_once 'sdk/src/facebook.php';
$facebook = new Facebook(array(
  'appId'  => getenv('FACEBOOK_APP_ID'),
  'secret' => getenv('FACEBOOK_SECRET'),
));

$user = $facebook->getUser();

if ($user) {
  $user_profile = $facebook->api('/me');
  $url = $facebook->getLogoutUrl();
} else {
  $user_profile = array();
  $url = $facebook->getLoginUrl();
}
?>
<a href="<?php echo $url; ?>">login / logout</a>
<pre>
<?php var_dump($user_profile); ?>
</pre>