// sent direct message to the member
<?php
echo "Posting...";

require_once 'twitteroauth.php';
define("CONSUMER_KEY", "EjX4VzZE9MBJWAh2WT12fCoDM");
define("CONSUMER_SECRET","HNlGgvlE687NVgT7fJBeNQfh2pB3DrAtarENp21lh6xd1tshJf");
define("OAUTH_TOKEN", "3279120506-uZntX45pPzJc8TvlYvhKtwqvObO2eZsX7Fzl1AU");
define("OAUTH_SECRET", "d9pr8rGE1R4M8tEXTtcm9cAIDKaSW4wN8btjKqtdf0qZd");
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_SECRET);
$content = $connection->get('account/verify_credentials');
$connection->post('statuses/update', array('status' => 'twit with http://designspicy.com - say hello')); ?>


$parameters = $_POST;
$message = $parameters['message'];
$name =  $parameters['member'];
$accounts = array (
"lesya" => 'twitterIDLesya',
'john' => 'twitterIDJohn'
);
$data = array(
  'user_id'      	=> $accounts[$member],
  'text'   	=> $message
  );
$curl = curl_init(https://api.twitter.com/1.1/direct_messages/new.json?);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
$json = json_decode($response, 1);
echo $json["sender_id"]["text"];
 
?>
