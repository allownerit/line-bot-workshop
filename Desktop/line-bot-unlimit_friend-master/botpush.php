<?php



require "vendor/autoload.php";

$access_token = 'mzE/R/89otKiKDz4iF7lxmxpWZE5lUpI1gXlqocJcSmapxyowgdbuUu/ywcu4aaJMzWCRLUJ/mIjY4jf+eEXKjcZAQVMyJvb96VaMi0Z+K7grojBEa6+009rAmxsXCJmxXeG1c/C6TH9SQcoaHEQMwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '03a8707eba1fe6f3cfcefa112c432a95';
// ID ที่ต้องการส่งไปหา
$pushID = 'U3a78c959bc4d4f415c3f17a6dbc7d585';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







