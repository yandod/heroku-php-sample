<?php
require_once 'sdk/src/facebook.php';
$facebook = new Facebook(array(
  'appId'  => getenv('FACEBOOK_APP_ID'),
  'secret' => getenv('FACEBOOK_SECRET'),
));

$user = $facebook->getUser();
$friends = null;
if ($user) {
  $friends = $facebook->api('/me/friends');
}
?>
<a href="<?php echo $facebook->getLoginUrl(); ?>">login / logout</a>
<pre>
<?php var_dump($friends); ?>
</pre>