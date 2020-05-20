<?php
include 'Telegram.php';
$bot_token = 'Bot Token Here';
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
$searchtext = explode(' ',trim($text))[0];
$searchletter = mb_substr($text, 0, 1);

if ($text == '/start' || $text == '/help' && $message_from_group == false) {
    $content = ['chat_id' => $chat_id, 'reply_to_message_id' => $reply_to_message_id, 'text' => 
    "Hello! 
I'm the Bhadoo Jarvis Bot.
You cannot use me outside @BhadooCloud"];
    $telegram->sendMessage($content);
}

else if ($user_id == '513611281' || $user_id == '650936828' || $user_id == '874702607' || $user_id == '736079831' || $user_id == '264883123') {
    console.log("Success");
        }

else if ($message_from_group == false) {
    $content = ['chat_id' => $chat_id, 'message_id' => $reply_to_message_id];
    $telegram->deleteMessage($content);
}

else if ($searchtext == '/mirror' || $searchtext == '/tarmirror' || $searchtext == '/watch' || $searchtext == '/cancel' || $searchtext == '/list' || $searchtext == '/status' && $message_from_group == true) {
    console.log("Success");
        }

else if ($text == null){
    console.log("Success");
        }

else if (!preg_match('/[^A-Za-z0-9]/', $searchletter)) {
    $content = ['chat_id' => $chat_id, 'message_id' => $reply_to_message_id];
    $telegram->deleteMessage($content);
        }

else {
    $content = ['chat_id' => $chat_id, 'message_id' => $reply_to_message_id];
    $telegram->deleteMessage($content);
        }
