<?php
require_once 'sdk/src/facebook.php';
$facebook = new Facebook(array(
  'appId'  => getenv('FACEBOOK_APP_ID'),
  'secret' => getenv('FACEBOOK_SECRET'),
));

$user = $facebook->getUser();
$friends = null;
if ($user) {
  $friends = $facebook->api('/me');
}
$param = array('scope' => 'user_birthday,email,user_photos,publish_stream');
?>
<a href="<?php echo $facebook->getLoginUrl($param); ?>">login / logout</a>
<pre>
<?php var_dump($friends); ?>
</pre>