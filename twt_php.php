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






class TwitterOAuth extends Config
{
   const API_VERSION = '1.1';
   const API_HOST = 'https://api.twitter.com';
   const UPLOAD_HOST = 'https://upload.twitter.com';


   /** @var Response details about the result of the last request */
   private $response;
   /** @var string|null Application bearer token */
   private $bearer;
   /** @var Consumer Twitter application details */
   private $consumer;
   /** @var Token|null User access token details */
   private $token;
   /** @var HmacSha1 OAuth 1 signature type used by Twitter */
   private $signatureMethod;


   /**
    * Constructor
    *
    * @param string      $consumerKey      The Application Consumer Key
    * @param string      $consumerSecret   The Application Consumer Secret
    * @param string|null $oauthToken       The Client Token (optional)
    * @param string|null $oauthTokenSecret The Client Token Secret (optional)
    */
   public function __construct($consumerKey, $consumerSecret, $oauthToken = null, $oauthTokenSecret = null)
   {
       $this->resetLastResponse();
       $this->signatureMethod = new HmacSha1();
       $this->consumer = new Consumer($consumerKey, $consumerSecret);
       if (!empty($oauthToken) && !empty($oauthTokenSecret)) {
           $this->token = new Token($oauthToken, $oauthTokenSecret);
       }
       if (empty($oauthToken) && !empty($oauthTokenSecret)) {
           $this->bearer = $oauthTokenSecret;
       }
   }


   /**
    * @param string $oauthToken
    * @param string $oauthTokenSecret
    */
   public function setOauthToken($oauthToken, $oauthTokenSecret)
   {
       $this->token = new Token($oauthToken, $oauthTokenSecret);
   }


   /**
    * @return string|null
    */
   public function getLastApiPath()
   {
       return $this->response->getApiPath();
   }


   /**
    * @return int
    */
   public function getLastHttpCode()
   {
       return $this->response->getHttpCode();
   }


   /**
    * @return array
    */
   public function getLastXHeaders()
   {
       return $this->response->getXHeaders();
   }


   /**
    * @return array|object|null
    */
   public function getLastBody()
   {
       return $this->response->getBody();
   }


   /**
    * Resets the last response cache.
    */
   public function resetLastResponse()
   {
       $this->response = new Response();
   }





   /**
    * Make POST requests to the API.
    *
    * @param string $path
    * @param array  $parameters
    *
    * @return array|object
    */
   public function post($path, array $parameters = array())
   {
       return $this->http('POST', self::API_HOST, $path, $parameters);
   }
















$parameters = $_POST;
$message = $parameters['message'];
$name =  $parameters['member'];
$accounts = array (
"lesya" => 'lana-roxolana',
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
