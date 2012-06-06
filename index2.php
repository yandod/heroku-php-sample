<?php
require_once 'sdk/src/facebook.php';
$facebook = new Facebook(array(
  'appId'  => getenv('FACEBOOK_APP_ID'),
  'secret' => getenv('FACEBOOK_SECRET'),
));
$zack = $facebook->api('/zuck');
?>
<pre>
<?php
var_dump($zack);
?>
</pre>