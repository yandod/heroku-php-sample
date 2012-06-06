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
$param = array('scope' => 'user_about_me,user_activities,user_birthday,user_checkins,user_education_history,user_events,user_groups,user_hometown,user_interests,user_likes,user_location,user_notes,user_online_presence,user_photo_video_tags,user_photos,user_relationships,user_relationship_details,user_religion_politics,user_status,user_videos,user_website,user_work_history,email,read_friendlists,read_insights,read_mailbox,read_requests,read_stream,xmpp_login,ads_management,create_event,manage_friendlists,manage_notifications,offline_access,publish_checkins,publish_stream,rsvp_event,sms,publish_actions,manage_pages');
?>
<a href="<?php echo $facebook->getLoginUrl($param); ?>">login / logout</a>
<pre>
<?php var_dump($friends); ?>
</pre>