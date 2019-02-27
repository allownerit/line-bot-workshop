<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'mzE/R/89otKiKDz4iF7lxmxpWZE5lUpI1gXlqocJcSmapxyowgdbuUu/ywcu4aaJMzWCRLUJ/mIjY4jf+eEXKjcZAQVMyJvb96VaMi0Z+K7grojBEa6+009rAmxsXCJmxXeG1c/C6TH9SQcoaHEQMwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
$text2 = '';
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text']."\n".$event['source']['userId']."\n";
			// Get replyToken
			$text2 = $text;
		}
	}
}
require "vendor/autoload.php";
$channelSecret = '03a8707eba1fe6f3cfcefa112c432a95';
$pushID = 'Uf38b64e24c3eab138b8ae9900370d29e';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text2);
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";
