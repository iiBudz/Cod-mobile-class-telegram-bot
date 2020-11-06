	<?php

#------Please-Dont-Play-With--Engine--|||-----DEV BY BUDZ -----------#
#    ______             _               _     	  ____   _   _       #
#   |  ____|           (_)             (_)       / __ \|| \ | |      #
#   | |__   _ __   __ _ _ _ __   ___    _  ___  | |  | ||  \| |      #
#   |  __| | '_ \ / _` | | '_ \ / _ \  | |/ __| | |  | || . ` |      #
#   | |____| | | | (_| | | | | |  __/  | |\__ \ | |__| || |\  |      #
#   |______|_| |_|\__, |_|_| |_|\___|  |_||___/  \____/ |_| \_|      #
#                  __/ |                             			     #
#                 |___/              	 			                 #
#--------------------------------------------------------------------#

ob_start();
$MROAN = "1330207485:AAFSK37WVZt5YtvLaSwZxCM2gEXgyDi6Qvo"; #put your token between the ""
define('API_KEY',$MROAN);
echo file_get_contents("https://api.telegram.org/bot$MROAN/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$php88 = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$php88";
$php88 = file_get_contents($url);
return json_decode($php88);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$useree = $update->callback_query->message->chat->id;
$username = $message->from->username;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$admin = 923068440; #here remove the ID and put yours, If you dont know your id go to @MyIdBbot or Https://t.me/MyIdbbot
$from_id = $message->from->id;
$user_id = $message->from->id;
mkdir("mroan941");
mkdir("zkref");
$useree = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$MROAN = file_get_contents("MROAN.txt");
$MROAN0 = file_get_contents("MROAN0.txt");
$MROAN1= file_get_contents("MROAN1.txt");
$MROAN5 = file_get_contents("MROAN2.txt");
$MROAN6 = file_get_contents("MROAN3.txt");
$MROAN20 = json_decode(file_get_contents('php://input'));
$MROAN18 = $update->message;
$MROAN13 = $MROAN18->chat->id;
$MROAN17 = $MROAN18->text;
$MROAN19 = $MROAN20->callback_query->data;
$MROAN12 = $MROAN20->callback_query->message->chat->id;
$MROAN14 =  $MROAN20->callback_query->message->message_id;
$MROAN15 = $MROAN18->from->first_name;
$MROAN16 = $MROAN18->from->username;
$MROAN11 = $MROAN18->from->id;
$MROAN2 = explode("\n",file_get_contents("MROAN4.txt"));
$MROAN3 = count($MROAN2)-1;
if ($MROAN18 && !in_array($MROAN11, $MROAN2)) {
    file_put_contents("MROAN4.txt", $MROAN11."\n",FILE_APPEND);
  }
$MROAN9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN0&user_id=".$MROAN11);
$MROAN10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN1&user_id=".$MROAN11);
if($MROAN18 && (strpos($MROAN9,'"status":"left"') or strpos($MROAN9,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN9,'"status":"kicked"') or strpos($MROAN10,'"status":"left"') or strpos($MROAN10,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$MROAN13,
'text'=>'- ▫️ Sorry Sir  ، 🔰
▪️ You need to join this channel

- Join and send { /start }📛!

'.$MROAN0.'
'.$MROAN1,
]);return false;}
if($MROAN17 == "/admin" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>"Welcome ،  [$fn](tg://user?id=$chat_id)
- This is your dashboard ، 🔰
- You can control all the commands of the bot ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- 1st Must join channel ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• Add channel ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• Delete Channel ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- 2nd Must join channel ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• Add channel ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• Delete Channel، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- Show must join channel ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- Broadcast ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• Forward  ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• Message ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- Bot users ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- Notfiy me when some one join ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• Enable ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• Disable ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- Enable forward ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• Enable ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• Disable ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
}
if($MROAN19 == "MROAN" ){
bot('EditMessageText',[
'chat_id'=>$MROAN12,
'message_id'=>$MROAN14,
"text"=>"  • Welcome ، [$Name](tg://user?id=$chat_id2)
- This your dashboard ، 🔰
- You can control all the commands of the bot ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- 1st Must join channel ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• Add channel ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• Delete Channel ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- 2nd Must join channel ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• Add channel ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• Delete Channel، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- Show must join channel ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- Broadcast ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• Forward  ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• Message ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- Bot users ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- Notfiy me when some one join ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• Enable ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• Disable ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- Enable forward from users ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• Enable ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• Disable ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
}

unlink("MROAN.txt");

if($MROAN19 == "MROAN0"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- Ok, now send your 1st must join channel username  ، 📢
#Example :
▪️@b_budz',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN0");
}
if($MROAN17 and $MROAN == "MROAN0" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- Channel has been added successfully ، 📣
- Now make the bot an Admin in side the CHANNEL ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN0.txt","$MROAN17");
unlink("MROAN.txt");
}
if($MROAN19 == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- Ok, are you sure about that? ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• No ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• Yes ، ✅','callback_data'=>'MROAN1'],
]    
]])
]);    
}
if($MROAN19 == "MROAN1"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- 1st Must join channel has been deleted successfully ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN0.txt");
}
if($MROAN19 == "MROAN2"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- Ok, now send your 2st must join channel username ، 📢
#مثال :
▪️@B_edit',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN1");
}
if($MROAN17 and $MROAN == "MROAN1" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- Channel has been added successfully ، 📣
- Now make the bot an Admin in side the CHANNEL ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN1.txt","$MROAN17");
unlink("MROAN.txt");
}
if($MROAN19 == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- Ok, are you sure about that ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• No ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• Yes ، ✅','callback_data'=>'MROAN3'],
]    
]])
]);    
}
if($MROAN19 == "MROAN3"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- Must join channel has been deleted successfully ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN1.txt");
}
if($MROAN19 == "MROAN4"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- These are the must join channels ، 🔰
- 1st ،  $MROAN0 📢 
- 2nd ،  $MROAN1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($MROAN19 == "MROAN5"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ Ok send your message and will be forwarded to [ $MROAN3 ] users ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN2");
}
if($MROAN18 and $MROAN == "MROAN2" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- Forwarded successfully 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('forwardMessage', [
'chat_id'=>$MROAN2[$i],
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
unlink("MROAN.txt");
}
}
if($MROAN19 == "MROAN6"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ Write your message down and it will  be sended to [ $MROAN3 ] users ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN3");
}
if($MROAN17 and $MROAN == "MROAN3" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- Message has been sended successfully 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('sendMessage', [
'chat_id'=>$MROAN2[$i],
'text'=>$MROAN17
]);
unlink("MROAN.txt");
}
}
if($MROAN19 == "MROAN7"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- Bot followers [ $MROAN3 ] ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($MROAN19 == "MROAN9"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- You will be notified when someone joins the bot ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN2.txt","MROAN");
}
if($MROAN17 == "/start" and $MROAN5 == "MROAN" and $MROAN11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- New member has joined the bot ، 🛡
- Name ، [$MROAN15](tg://user?id=$chat_id) ، 🦕
- User ، [@$MROAN16](tg://user?id=$chat_id) ، 🐢
- ID ، [$MROAN11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  Bot used by  ، { $MROAN3 } person ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($MROAN19 == "MROAN10"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"
- Ok, you won't be notified when some joins the bot ، 🦍 
",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN2.txt");
}

if($MROAN19 == "MROAN11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- Forward has been enabled successfully ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN3.txt","MROAN");
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 == $admin){
bot('sendMessage',[
'chat_id'=>$MROAN18->reply_to_message->forward_from->id,
    'text'=>$MROAN17,
    ]);
}
if($MROAN19 == "MROAN12"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- Forward disabled successfully ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN3.txt");
}

#------------------------ Start ----Dev Budz------------------------#
#    ad88888ba                                     					#
#   d8"     "8b ,d                            ,d   					#
#   Y8,         88                            88   					#
#   `Y8aaaaa, MM88MMM ,adPPYYba, 8b,dPPYba, MM88MMM					#
#     `"""""8b, 88    ""     `Y8 88P'   "Y8   88   					#
#           `8b 88    ,adPPPPP88 88           88   					#
#   Y8a     a8P 88,   88,    ,88 88           88,  					#	
#    "Y88888P"  "Y888 `"8bbdP"Y8 88           "Y888					#
#-------------------------------------------------------------------#

$ver = "Alpha-0.1";

if($text ==  '/start'){
mkdir("zkref/$user_id");
mkdir("mroan941/$user_id");
$photo = "https://www.instagram.com/p/CG16DAVh0Am/";
bot('SendVideo',[
'chat_id'=>$chat_id,
'video'=>$photo,
'caption'=>  "
•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•

- | Hello and welcome to my bot

•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" Dev. ", 'url'=>'t.me/iiBudz']],
]
])]);
}

#here you can choose what you brefer ,,

if($text ==  '/start'){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•

- | Here you can write what ever you want

•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•-•
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" Dev. ", 'url'=>'t.me/iiBudz']],
]
])]);
}

#------------------------------------General--------------------------------------#
#                                                                         		  #
#   ,ad8888ba,                                                          88		  #
#  d8"'    `"8b                                                         88		  #
# d8'                                                                   88        #
# 88             ,adPPYba, 8b,dPPYba,   ,adPPYba, 8b,dPPYba, ,adPPYYba, 88        #
# 88      88888 a8P_____88 88P'   `"8a a8P_____88 88P'   "Y8 ""     `Y8 88        #
# Y8,        88 8PP""""""" 88       88 8PP""""""" 88         ,adPPPPP88 88        #
#  Y8a.    .a88 "8b,   ,aa 88       88 "8b,   ,aa 88         88,    ,88 88        #
#  `"Y88888P"   `"Ybbd8"' 88       88  `"Ybbd8"' 88         `"8bbdP"Y8 88 88 88   #
#---------------------------------------------------------------------------------#


