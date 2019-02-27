<?php
$access_token = 'mzE/R/89otKiKDz4iF7lxmxpWZE5lUpI1gXlqocJcSmapxyowgdbuUu/ywcu4aaJMzWCRLUJ/mIjY4jf+eEXKjcZAQVMyJvb96VaMi0Z+K7grojBEa6+009rAmxsXCJmxXeG1c/C6TH9SQcoaHEQMwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
