<?php
include 'Telegram.php';
$bot_token = 'bot-token-from-bot-father';
$telegram = new Telegram($bot_token);
$textunfilter = $telegram->Text();
$text = strtolower($textunfilter); 
$chat_id = $telegram->ChatID();
$user_id = $telegram->UserID();
$user_nameunfilter = $telegram->Username();
$user_name = strtolower($user_nameunfilter); 
$first_name = $telegram->FirstName();
$data = $telegram->getData();
$callback_query = $telegram->Callback_Query();
$reply_to_message_id = $telegram->MessageID();
$message_id = $telegram->ReplyToMessageID();
$message_from_group = $telegram->messageFromGroup();
$searchtext = mb_substr($text, 0, 1);

if ($text == '/start' && $message_from_group == false) {
    $content = ['chat_id' => $chat_id, 'reply_to_message_id' => $reply_to_message_id, 'text' => 
    "Hello! 
I'm the Non-Commands Deletion Bot.
Click /help to know how to use me."];
    $telegram->sendMessage($content);
}
else if ($text == '/help' && $message_from_group == false) {
    $content = ['chat_id' => $chat_id, 'reply_to_message_id' => $reply_to_message_id, 'parse_mode' => 'Markdown', 'text' => 
    "Add to a group and make admin. Will delete all items sent by anyone except commands starting with /"];
    $telegram->sendMessage($content);
}
else if ($message_from_group == false) {
    $content = ['chat_id' => $chat_id, 'message_id' => $reply_to_message_id];
    $telegram->deleteMessage($content);
}

if ($user_id == '513611281' || $user_id == '650936828' || $searchtext == '/') {
        $matching = 'false'; 
        }
else {
        $matching = 'true'; 
        }

if ($matching == 'true') {      
    $content = ['chat_id' => $chat_id, 'message_id' => $reply_to_message_id];
    $telegram->deleteMessage($content);
    }
