<?php
ob_start();
$API_KEY = '5451109807:AAFWDUv_94-HrlRP0nf8RaQjVhtUvbEFg04';
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
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
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
$nammee = $update->callback_query->from->first_name;
$bot_tele1 = file_get_contents('userstart.json');
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$setengss = file_get_contents("setengss.txt");
$setengssj = file_get_contents("setengss.txt");
$hadehday = file_get_contents("hadehday.txt");
$hadehdayj = file_get_contents("hadehday.txt");
$sss = file_get_contents('sss.txt');
$bott = bot('getme',['bot'])->result->username;
$alm = file_get_contents('alm.txt');
$ccoinj = file_get_contents("ccoin.txt");
$ccoin = file_get_contents("ccoin.txt");
$codejj = file_get_contents("codejj.json");
$salesnem = file_get_contents("salesnem.json");
$photo_id = $message->photo[0]->file_id;
$cut = explode("\n",file_get_contents("stats/users.txt"));
$users = count($cut)-0;
$cccoin = $ccoin;
$admin = 5075341418;
$sudo = $admin;
$stinggggj = json_decode(file_get_contents("stinggggj.json"),true);
$stingggg = json_decode(file_get_contents("stingggg.json"),true);
$band = array($stingggg['stingggg']['band']);
$stingggi = json_decode(file_get_contents("stingggi.json"),true);
$admins = array($admin,$stingggi['stingggi']['admins']);
$type = $update->message->chat->type;
$u = json_decode(file_get_contents('member.json'),true);
if(!in_array($chat_id, $u) and $type == "private") {
      $u[] = "$chat_id";
      file_put_contents('member.json',json_encode($u));
  }
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
$from_id = $chat_id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
 $user = $update->callback_query->from->username;
$sales = json_decode(file_get_contents('sales.json'),true);
$id=$update->callback_query->from->id;
} 
function save($array){
    file_put_contents('sales.json', json_encode($array));
}
//---------1----
$sales = json_decode(file_get_contents('sales.json'),true);
$usdyhya = $sales['allllyhya'] / 400;
    if($message->contact and $sales[$chat_id]['c']){
  	$r = str_replace('1','18',$message->contact->phone_number);
$a = explode('1',$r);
if($a[0] == null and $a[1]){
	bot('sendmessage',[
      'chat_id'=>$sales[$chat_id]['baageel'],
      "text"=>"
 تم دخول حساب وهمي  عبر رابطك ؛ لن تربح شيء!
      معلومات عنه :
ايديه  : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦ : [@$user]()
      اسمه  : [$name]()
      ",'parse_mode'=>"MarkDown"]);
	$sales[$chat_id]['baageel'] = null;
	save($sales);
	}
	$r = str_replace('7','78',$message->contact->phone_number);
$a = explode('7',$r);
if($a[0] == null and $a[1]){
	bot('sendmessage',[
      'chat_id'=>$sales[$chat_id]['baageel'],
      "text"=>"
 تم دخول حساب وهمي  عبر رابطك ؛ لن تربح شيء!
      معلومات عنه :
ايديه  : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦ : [@$user]()
      اسمه  : [$name]()
      ",'parse_mode'=>"MarkDown"]);
	$sales[$chat_id]['baageel'] = null;
	save($sales);
	}
	$r = str_replace('44','448',$message->contact->phone_number);
$a = explode('44',$r);
if($a[0] == null and $a[1]){
	bot('sendmessage',[
      'chat_id'=>$sales[$chat_id]['baageel'],
      "text"=>"
 تم دخول حساب وهمي  عبر رابطك ؛ لن تربح شيء!
      معلومات عنه :
ايديه  : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦ : [@$user]()
      اسمه  : [$name]()
      ",'parse_mode'=>"MarkDown"]);
	$sales[$chat_id]['baageel'] = null;
	save($sales);
	}
	$r = str_replace('976','9768',$message->contact->phone_number);
$a = explode('976',$r);
if($a[0] == null and $a[1]){
	bot('sendmessage',[
      'chat_id'=>$sales[$chat_id]['baageel'],
      "text"=>"
 تم دخول حساب وهمي  عبر رابطك ؛ لن تربح شيء!
      معلومات عنه :
ايديه  : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦ : [@$user]()
      اسمه  : [$name]()
      ",'parse_mode'=>"MarkDown"]);
	$sales[$chat_id]['baageel'] = null;
	save($sales);
	}
	$r = str_replace('885','8858',$message->contact->phone_number);
$a = explode('885',$r);
if($a[0] == null and $a[1]){
	bot('sendmessage',[
      'chat_id'=>$sales[$chat_id]['baageel'],
      "text"=>"
 تم دخول حساب وهمي  عبر رابطك ؛ لن تربح شيء!
      معلومات عنه :
ايديه  : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦ : [@$user]()
      اسمه  : [$name]()
      ",'parse_mode'=>"MarkDown"]);
	$sales[$chat_id]['baageel'] = null;
	save($sales);
	}
	$r = str_replace('233','2338',$message->contact->phone_number);
$a = explode('233',$r);
if($a[0] == null and $a[1]){
	bot('sendmessage',[
      'chat_id'=>$sales[$chat_id]['baageel'],
      "text"=>"
 تم دخول حساب وهمي  عبر رابطك ؛ لن تربح شيء!
      معلومات عنه :
ايديه  : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦ : [@$user]()
      اسمه  : [$name]()
      ",'parse_mode'=>"MarkDown"]);
	$sales[$chat_id]['baageel'] = null;
	save($sales);
	}
	$r = str_replace('232','2328',$message->contact->phone_number);
$a = explode('232',$r);
if($a[0] == null and $a[1]){
	bot('sendmessage',[
      'chat_id'=>$sales[$chat_id]['baageel'],
      "text"=>"
 تم دخول حساب وهمي  عبر رابطك ؛ لن تربح شيء!
معلومات عنه :
ايديه  : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦ : [@$user]()
      اسمه  : [$name]()
      ",'parse_mode'=>"MarkDown"]);
	$sales[$chat_id]['baageel'] = null;
	save($sales);
	}
	$r = str_replace('371','3718',$message->contact->phone_number);
$a = explode('371',$r);
if($a[0] == null and $a[1]){
	bot('sendmessage',[
      'chat_id'=>$sales[$chat_id]['baageel'],
      "text"=>"
 تم دخول حساب وهمي  عبر رابطك ؛ لن تربح شيء!
معلومات عنه :
ايديه  : [$from_id](tg://user?id=$from_id)
      معرفه ان وجد ⁦ : [@$user]()
      اسمه  : [$name]()
      ",'parse_mode'=>"MarkDown"]);
	$sales[$chat_id]['baageel'] = null;
	save($sales);
	}
bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
تم التحقق من انك لست روبوت ⁦
    تم حذف الرقم حفاظاً على خصوصيتك ⁦
    ارسل /start
      ",
      'reply_markup'=>json_encode([
'remove_keyboard'=>true
])
]);
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
unset($sales[$chat_id]['c']);
save($sales);
exit;
  }
$getmosh1 = file_get_contents("getmosh1.txt");
$getmoshh1 = explode("\n",$getmosh1);
$getmosh = file_get_contents("getmosh.txt");
$getmoshh = explode("\n",$getmosh);
$channels = file_get_contents("channels.txt");
$channel = file_get_contents("channel.txt");
$setcoin1 = file_get_contents("setcoin1.txt");
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$me = bot('getme',['bot'])->result->username;
$sales = json_decode(file_get_contents('sales.json'),1);
if($id!=$admin and $id!=$admin){
	if($message->chat->type!="private" and $text){
		bot("sendmessage",[
		"chat_id"=>$admin,
		"text"=>"قام هذا الشخص بالدخول عن طريق قروب 
		$id
		@$user"
		]);
		bot("leavechat",[
		"chat_id"=>$chat_id,
		]);
		return false;
	}
}
if(preg_match("/(start-100)/",$text) or preg_match("/(start -100)/",$text) or preg_match("/(start@)/",$text) or preg_match("/(start @)/",$text)){
	bot("sendmessage",[
		"chat_id"=>$admin,
		"text"=>"قام هذا الشخص بالدخول على رابط بطريقة خاطئة 
		$id
		@$user"
		]);
		return false;
}
$twass = file_get_contents("tw.txt");
	
if($data == "utwss"){
if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
	if($twass == "on"){
		$echo = "تم تعطيل الاشعارات ";
		file_put_contents("tw.txt","off");
		}else{
			$echo = "تم تفعيل الاشعارات";
		file_put_contents("tw.txt","on");
			}
$twass = file_get_contents("tw.txt");
$baageel = file_get_contents("baageel.json");
$bot = str_replace(['off','on'],['معطل ','مفعل '],$baageel);
$twasss = str_replace(['off','on'],['معطل ','مفعل '],$twass);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"-  مرحبـٲ عـزيزي الـمـطـور  @$user 
- انت المـطـور الاسـاسـي هـنـا 
- اليـكـ ازرار تحـكـم في الـبوت 
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه  
☆ $echo ☆
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"عمل البوت : $bot",'callback_data'=>"onbott"],["text"=>"اشعارات البوت : $twasss","callback_data"=>"utwss"]],
       [['text'=>"قسم الردود ",'callback_data'=>"rdod"],['text'=>' ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'تعين رسالة ستارت ‍','callback_data'=>"startjj"]],
       [['text'=>' ¦ قسم الحظر ','callback_data'=>"band"],['text'=>' ¦ قسم الادمنيه️','callback_data'=>"addadm"]],
       [['text'=>"قسم الاشتراك الاجباري ",'callback_data'=>"ch"]],
       [['text'=>'قسم الاحصائيات ','callback_data'=>"starts"],['text'=>"قسم الاذاعه ",'callback_data'=>"adaan"]],
       [['text'=>' اعدادات بوت متجر','callback_data'=>"stengbott"]],
       ]
    ])
  ]);
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
}
}
if($text and !in_array($from_id,$ebu) and $twass == "on"){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($text and $message->reply_to_message && $text!="/info" && $text!="/ban" && $text!="/unban" && $text!="/forward" and !$data ){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
if($message and $twass =="off" and $chat_id != $admin ){
bot('deletfile',[
'chat_id'=>$admin,
]);
unlink("tw.txt");
}
$baageel = file_get_contents("baageel.json");
	
if($data == "onbott"){
if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
	if($baageel == "on"){
		$echo = "تم تعطيل البوت ";
		file_put_contents("baageel.json","off");
		}else{
			$echo = "تم تفعيل البوت";
		file_put_contents("baageel.json","on");
			}
$twass = file_get_contents("tw.txt");
$baageel = file_get_contents("baageel.json");
$bot = str_replace(['off','on'],['معطل ','مفعل '],$baageel);
$twasss = str_replace(['off','on'],['معطل ','مفعل '],$twass);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"-  مرحبـٲ عـزيزي الـمـطـور  @$user 
- انت المـطـور الاسـاسـي هـنـا 
- اليـكـ ازرار تحـكـم في الـبوت 
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه  
☆ $echo ☆
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"عمل البوت : $bot",'callback_data'=>"onbott"],["text"=>"اشعارات البوت : $twasss","callback_data"=>"utwss"]],
       [['text'=>"قسم الردود ",'callback_data'=>"rdod"],['text'=>' ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'تعين رسالة ستارت ‍','callback_data'=>"startjj"]],
       [['text'=>' ¦ قسم الحظر ','callback_data'=>"band"],['text'=>' ¦ قسم الادمنيه️','callback_data'=>"addadm"]],
       [['text'=>"قسم الاشتراك الاجباري ",'callback_data'=>"ch"]],
       [['text'=>'قسم الاحصائيات ','callback_data'=>"starts"],['text'=>"قسم الاذاعه ",'callback_data'=>"adaan"]],
       [['text'=>' اعدادات بوت متجر','callback_data'=>"stengbott"]],
      ]
    ])
  ]);
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
}
}
if($message and $baageel =="off"){
if(!in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id != $admin){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"* ¦ مرحبا بك عزيزي 
 ¦ #نعتذر عن التوقف للبوت
 ¦ فقط تحت الصيانة والتحديث
 ¦ سيتم اعادته للخدمة الساعات القادمة*",
 ]);return false;
}
}
$bot_id       = bot('getme',['bot'])->result->id; // ايدي بوتك .
$first_name = $message->from->first_name;
$forward = $update->message->forward_from;
if($data == "adaanj"){
if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
اهلا بك عزيزي في قسم الاذاعه يمكنك تحكم في الاذاعه عبر الازرار
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"اذاعه للكل ",'callback_data'=>"adaanq"]],
[['text'=>' ¦ إرسال رسالة','callback_data'=>"sendmessage"]],
[['text'=>"اذاعه بل توجيه خاص ",'callback_data'=>"adaange"]],
[["text"=>"رجوع ،","callback_data"=>"c"]],
]])
]);   
}
}
if($update->callback_query->data=="adaan"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"
سيتم فتح هاذا القسم قريبا 

", 
'show_alert'=>true
]);
}
if($start == null){
$hello =  "» افضل بوت ماركت 
» يمكنك جمع نقاط عبر رابط الدعوه الخاص بك او شراء نقاط من المطور ";
file_put_contents('start.txt',$hello);
}
if($setengss == null){
file_put_contents("setengss.txt","1");
}
if($setcoin1 == null){
file_put_contents("setcoin1.txt","1");
}
if($hadehday == null){
file_put_contents("hadehday.txt","1");
}
if($ccoin == null){
file_put_contents("ccoin.txt","5");
}
if ($data =="startjj") {
if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
file_put_contents("sting.txt","start1");
bot("EditMessageText",[
"chat_id"=>$chat_id,
'message_id'=>$message_id,
"text"=>"
اهلا عزيزي ارسل الان رسالة ستارت ‍
",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،","callback_data"=>"c"]],
]])
]);
}
}
if($text and $sting =="start1"){
if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
file_put_contents("start.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*¦تم حفط نص الترحيب هو 
/start
{ $text }*
",
'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،","callback_data"=>"c"]],
]])
]);
}
}
//»»»»»»»»»»»»»»»»»»
					if($data == "band"){
					if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
								$band = count($stingggg['stingggg']['band']);
								bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
• مرحبا بك في قسم الحظر

- يمكنك حظر شخص & الغاء حظر شخص 

-معرفة المحظورين 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"المحظورين   «".$band."»",'callback_data'=>"bander"]
],
[
['text'=>"حظر ",'callback_data'=>"bandadd"],['text'=>"إلغاء حظر ",'callback_data'=>"delband"]
],
[
['text'=>"مسح المحضورين ",'callback_data'=>"bandajjdd"]
],
[
['text'=>'رجوع ','callback_data'=>'c']
],
]])
]);
$stingggg['stingggg']['stingggg'] = null;
	$stingggg['stingggg']['id'] = null;
	file_put_contents("stingggg.json",json_encode($stingggg));
								}
							}
								if($data == "bandadd" or $data == "delband"){
								if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
									$a = str_replace(['bandadd','delband'],['لأحظره من البوت ','لأزيله من المحظورين '],$data);
									bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الان ايدي  الشخص $a 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ",'callback_data'=>"band"]
],
]])
]);
$stingggg['stingggg']['stingggg'] = $data;
$stingggg['stingggg']['id'] = $chat_id;
	file_put_contents("stingggg.json",json_encode($stingggg));
									}
								}
										if($stingggg['stingggg']['stingggg'] == "bandadd" or $stingggg['stingggg']['stingggg'] == "delband"){
									if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
						if($text and $stingggg['stingggg']['id'] == $from_id and $message){
							//if($stingggg['stingggg']['stingggg'] == "bandadd" or $stingggg['stingggg']['stingggg'] == "delband"){
							$a = str_replace(['bandadd','delband'],['حظره بنجاح ','إلغاء حظره بنجاح '],$stingggg['stingggg']['stingggg']);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم $a
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع ','callback_data'=>'band']
],
]])
]);
if($stingggg['stingggg']['stingggg'] == "bandadd"){
	$stingggg['stingggg']['band'][] = $text;
	}else{
		foreach($stingggg['stingggg']['band'] as $num => $json){
			if($json == $text){
		unset($stingggg['stingggg']['band'][$num]);
		break;
		}
		}
		}
		$stingggg['stingggg']['stingggg'] = null;
					$stingggg['stingggg']['id'] = null;
	file_put_contents("stingggg.json",json_encode($stingggg));
		}
		}
							}
							
							if($data == "bander"){
							if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
								foreach($stingggg['stingggg']['band'] as $band){
									if($band != null){
									$s .= "`$band` » [للدخول إلى الحساب ](tg://user?id=$band)\n";
									}
}
								bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
إليك قائمة المحظورين 
$s
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع ",'callback_data'=>"band"]
],
]])
]);
								}
							}
$cut = explode("\n",file_get_contents("stats/users.txt"));
$ff = str_replace("ارسال للكل ","",$text);
if($text == "ارسال للكل $ff" and $from_id == $admin){
$ff = str_replace("ارسال للكل ","",$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" تم ارسال $ff نقطة إلى جميع المستخدمين ",
]);
for ($i=0; $i < count($cut); $i++) { 
bot('sendMessage',[
'chat_id'=>$cut[$i],
'text'=>" تم ارسال اليك $ff نقاط بواسطة المطور ",
]);
$sales[$cut[$i]]['collect'] += $ff;
save($sales);
}
}
$cut = explode("\n",file_get_contents("stats/users.txt"));
$pp = str_replace("خصم للكل ","",$text);
if($text == "خصم للكل $pp" and $from_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🪄 تم خصم $pp نقطة من جميع المستخدمين",
]);
for ($i=0; $i < count($cut); $i++) { 
bot('sendMessage',[
'chat_id'=>$cut[$i],
'text'=>" تم خصم $pp من نقاطك بواسطة المطور ",
]);
$sales[$cut[$i]]['collect'] -= $pp;
save($sales);
}
}
//»»»»»»»»»»»»»»»»»» 
$bot = file_get_contents("com.txt");
if($data == 'c'){
if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
$twass = file_get_contents("tw.txt");
$baageel = file_get_contents("baageel.json");
$bot = str_replace(['off','on'],['معطل ','مفعل '],$baageel);
$twasss = str_replace(['off','on'],['معطل ','مفعل '],$twass);
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"-  مرحبـٲ عـزيزي الـمـطـور  @$user 
- انت المـطـور الاسـاسـي هـنـا 
- اليـكـ ازرار تحـكـم في الـبوت 
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه  
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"عمل البوت : $bot",'callback_data'=>"onbott"],["text"=>"اشعارات البوت : $twasss","callback_data"=>"utwss"]],
       [['text'=>"قسم الردود ",'callback_data'=>"rdod"],['text'=>' ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'تعين رسالة ستارت ‍','callback_data'=>"startjj"]],
       [['text'=>' ¦ قسم الحظر ','callback_data'=>"band"],['text'=>' ¦ قسم الادمنيه️','callback_data'=>"addadm"]],
       [['text'=>"قسم الاشتراك الاجباري ",'callback_data'=>"ch"]],
       [['text'=>'قسم الاحصائيات ','callback_data'=>"starts"],['text'=>"قسم الاذاعه ",'callback_data'=>"adaan"]],
       [['text'=>' اعدادات بوت متجر','callback_data'=>"stengbott"]],
      ]
    ])
  ]);
  unlink('alshbrok');
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}
if($text== '/start'){
if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
 $twass = file_get_contents("tw.txt");
$baageel = file_get_contents("baageel.json");
$bot = str_replace(['off','on'],['معطل ','مفعل '],$baageel);
$twasss = str_replace(['off','on'],['معطل ','مفعل '],$twass);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"-  مرحبـٲ عـزيزي الـمـطـور  @$user 
- انت المـطـور الاسـاسـي هـنـا 
- اليـكـ ازرار تحـكـم في الـبوت 
- تستطيـع التحكم بكل الاوامر فقط اضغط علئ الامر الذي تريد تنفيذه 
-",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>"عمل البوت : $bot",'callback_data'=>"onbott"],["text"=>"اشعارات البوت : $twasss","callback_data"=>"utwss"]],
       [['text'=>"قسم الردود ",'callback_data'=>"rdod"],['text'=>' ¦ إرسال تحذير','callback_data'=>"sendwarning"]],
       [['text'=>'تعين رسالة ستارت ‍','callback_data'=>"startjj"]],
       [['text'=>' ¦ قسم الحظر ','callback_data'=>"band"],['text'=>' ¦ قسم الادمنيه️','callback_data'=>"addadm"]],
       [['text'=>"قسم الاشتراك الاجباري ",'callback_data'=>"ch"]],
       [['text'=>'قسم الاحصائيات ','callback_data'=>"starts"],['text'=>"قسم الاذاعه ",'callback_data'=>"adaan"]],
       [['text'=>' اعدادات بوت متجر','callback_data'=>"stengbott"]],
      ]
    ])
  ]);
$stingggi['stingggi']['stingggi'] = null;
$stingggi['stingggi']['id'] = null;
 file_put_contents("stingggi.json",json_encode($stingggi));
$sales['mode'] = null;
  save($sales);
 }
}
if($data == "sendcoin"){
if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد إرسال النقاط له ",
]);
  $sales['mode'] = 'chat';
  save($sales);
  exit;
  }
 }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat'){
   if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل عدد النقاط تريد إرسالها ",
 ]);
   $sales['mode'] = 'poi';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi'){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إضافة $text نقطة إلى حساب ".$sales['idd']." بنجاح ",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"Nkatn"]],
]])
]);   
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>" ¦ لقد ربحت « $text » نقطة 
 ¦ من الإدارة ",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] += $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}
if($data == "takecoin"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد خصم النقاط منه",
]);
  $sales['mode'] = 'chat1';
  save($sales);
  exit;
  }
 }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat1'){
    if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد خصمها",
 ]);
   $sales['mode'] = 'poi1';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi1'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم خصم $text نقطة من حساب ".$sales['idd']." بنجاح ",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"Nkatn"]],
]])
]);   
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>" ¦ تم خصم « $text » نقطة 
 ¦ من الإدارة ",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] -= $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}
if($data == "setcoin1" ){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"▪ ارسل عدد النقاط التي تريد ان يكسبها العضو عند الاشتراك في قناة التمويل
(ارقام فقط) $type",
]);
$sales['mode'] = 'coc1';
save($sales);
exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'coc1'){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ . ',
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"stengbott"]],
]])
]);
file_put_contents("setcoin1.txt","$text");
$sales['mode'] = null;
save($sales);
exit;
}
}
if($data == "delchannel"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" تم حذف قناة التمويل بنجاح",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"stengbott"]],
]])
]);
unlink("channels.txt");
unlink("getmosh.txt");
$sales['mode'] = null;
save($sales);
exit;
 }
 }
#حذف قناة 2
 if($data == "delchannel2"){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" تم حذف قناة التمويل بنجاح",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"stengbott"]],
]])
]);
unlink("channel.txt");
unlink("getmosh1.txt");
$sales['mode'] = null;
save($sales);
exit;
 }
}
 #تمويل قناة 1
if($data == "addchannel" and $channels == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"▪ ارسل معرف القناة لتمويلها 
▪ تأكد من البوت مشرفا فيها  لكي يتم التحقق من اشتراك العضو فيها ",
]);
$sales['mode'] = 'chs';
save($sales);
exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'chs'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ . ',
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"stengbott"]],
]])
]);
file_put_contents("channels.txt",$text);
$sales['mode'] = null;
  save($sales);
  exit;
 }
}
 #تمويل قناة 2
if($data == "addchannel2" and $channel == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"▪ ارسل معرف القناة لتمويلها 
▪ تأكد من البوت مشرفا فيها  لكي يتم التحقق من اشتراك العضو فيها ",
]);
$sales['mode'] = 'ccchs';
save($sales);
exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'ccchs'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ . 
',
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"stengbott"]],
]])
]);
file_put_contents("channel.txt",$text);
$sales['mode'] = null;
  save($sales);
  exit;
 }
 }
 #لا يصير تمويل
if($data == "addchannel" and $channels != null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"لقد تم وضع قناة من قبل وهيه  $channels 
الرجاء الحذف اولا ثم وضع قناه جديده",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"حذف القناه",'callback_data'=>"delchannel"]],
[["text"=>"رجوع ،.","callback_data"=>"stengbott"]],
]])
]);   
}
if($data == "addchannel2" and $channel != null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"لقد تم وضع قناة من قبل وهيه  $channel 
الرجاء الحذف اولا ثم وضع قناه جديده",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"حذف القناه",'callback_data'=>"delchannel"]],
[["text"=>"رجوع ،.","callback_data"=>"stengbott"]],
]])
]);   
}
if($data == "sendmessage"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد إرسال الرسالة له",
]);
  $sales['mode'] = 'chat3';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat3'){
    if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل رسالتك",
 ]);
   $sales['mode'] = 'poi3';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi3'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال الرسالة إلى ".$sales['idd']." بنجاح ",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"Nkatn"]],
]])
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"رسالة من الإدارة:
$text",
  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}
if($data == "sendwarning"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
   'text'=>"أرسل أيدي الشخص الذي تريد إرسال التحذير له",
]);
  $sales['mode'] = 'chat4';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat4'){
    if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "إضغط /Confirm لتأكيد إرسال التحذير",
 ]);
   $sales['mode'] = 'poi4';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi4'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال التحذير إلى ".$sales['idd']." بنجاح ",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"Nkatn"]],
]])
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تحذير من الإدارة!
إستعمال حسابات وهمية الدخول لرابطك بها يؤدي إلى حظر حسابك 
في حال إستعمال الوهمي سينحظر حسابك... إنتبه... شكرا على تفهمك للموضوع",
  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit;
}
}
if($data == 'shh'){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل معرف قناة إثباتات  ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ','callback_data'=>'c']]
      ]
    ])
  ]);
file_put_contents("sss.txt","ok");
 }
}
if($text and $sss == "ok"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين القناة إثباتات بنجاح  تأكد ان البوت ادمن في القناة لكي لا يحدث مشاكل",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع ','callback_data'=>'c']]
      ]
    ])
  ]);
file_put_contents("sss.txt","$text");
 }
}
 if($data == 'alm'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل معرف المطور  من دون @ ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ','callback_data'=>'c']]
      ]
    ])
  ]);
file_put_contents("alm.txt","ok");
 }
}
if($text and $alm == "ok"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين معرف المطور بنجاح ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع ','callback_data'=>'c']]
      ]
    ])
  ]);
file_put_contents("alm.txt","$text");
 }
}
  if($data == 'setengss'){
   if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ارسل الان عدد نقاط الدخول (ارقام فقط)",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ','callback_data'=>'c']]
      ]
    ])
  ]);
file_put_contents("setengss.txt","ok");
 }
}
if($text and $setengss == "ok"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين عدد نقاط الدخول ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع ','callback_data'=>'c']]
      ]
    ])
  ]);
unlink('setengss.txt');
file_put_contents("setengss.txt","$text");
 }
}
  if($data == 'hadehday'){
   if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ارسل الان عدد نقاط الهديه اليوميه (ارقام فقط)",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ','callback_data'=>'c']]
      ]
    ])
  ]);
file_put_contents("hadehday.txt","ok");
  }
 }
if($text and $hadehday == "ok"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين عدد نقاط الهديه اليوميه  ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع ','callback_data'=>'c']]
      ]
    ])
  ]);
unlink('hadehday.txt');
file_put_contents("hadehday.txt","$text");
 }
}
 if($data == "Nkatn"){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" اهلا عزيزي في قسم ارسال نقاط وا خصم نقاط وا انشاء هدايا وا تمويل قنواة 
 ¦ لـ خصم نقاط للكل - خصم للكل + عدد
 ¦ لـ ارسال نقاط للكل - ارسال للكل + عدد
عدد نقاط الدخول عبر رابط الدعوه  : $setengssj 
عدد نقاط تحويل النقاط  : $ccoinj 
عدد نقاط الهديه اليوميه  : $hadehdayj 
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' ¦ إنشاء هدية','callback_data'=>"offerfree"]],
[['text'=>' ¦ تعيين عدد نقاط تحويل','callback_data'=>"ccoin"]],
[['text'=>' ¦ إرسال نقاط','callback_data'=>"sendcoin"],['text'=>' ¦ خصم نقاط','callback_data'=>"takecoin"]],
[['text'=>" ¦ تصفير نقاط الكل",'callback_data'=>"dalesal"]],
[['text'=>' ¦ إرسال نقاط للكل','callback_data'=>"sendbrokall"],['text'=>' ¦ خصم نقاط من الكل','callback_data'=>"takebrokall"]],
[['text'=>'تعيين عدد نقاط الدخول ','callback_data'=>"setengss"]],
[['text'=>'تعيين عدد نقاط الهديه اليوميه ','callback_data'=>"hadehday"]],
[["text"=>"رجوع ،","callback_data"=>"c"]],
]])
]);   
}
}
if($data == 'dalesal'){
	bot('EditMessageText',[
	'chat_id'=>$chat_id2, 
	'message_id'=>$message_id2, 
	'text'=>'تم حذف نقاط الكل بنجاح', 
	"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رجوع",'callback_data'=>"c"]],
]])
]);
$cut = explode("\n",file_get_contents("stats/users.txt"));
for ($i=0; $i < count($cut); $i++) { 
$sales[$cut[$i]]['collect'] = 0;
save($sales);
}
} 
if($data == 'sendbrokall' or $data == 'takebrokall'){
	bot('EditMessageText',[
	'chat_id'=>$chat_id2,
	'message_id'=>$message_id2,
	'text'=>'حسنا عزيزي ارسل عدد النقاط الآن',
	"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رجوع",'callback_data'=>"c"]],
]])
]);
file_put_contents('alshbrok',$data);
}
if($text and $text > 0 and $from_id == $admin and file_get_contents('alshbrok') == 'sendbrokall'){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم اضافة $text نقطة لجميع المشتركين",
	]);
	for ($i=0; $i < count($cut); $i++) { 
$sales[$cut[$i]]['collect'] += $text;
save($sales);
}}
if($text and $text > 0 and $from_id == $admin and file_get_contents('alshbrok') == 'takebrokall'){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم خصم $text نقطة من نقاط جميع المشتركين",
	]);
	for ($i=0; $i < count($cut); $i++) { 
$sales[$cut[$i]]['collect'] -= $text;
save($sales);
}}
if($data == "rdod"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
• مرحبا بك في قسم الردود

- يمكنك اضافه ردود وحذفها 

- اضغط على نص الزر لعرض محتواه .
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"الردود ",'callback_data'=>"radd"]],
[["text"=>"اضف رد","callback_data"=>"addrd"],["text"=>"مسح رد ","callback_data"=>"deletrd"]],
[["text"=>"رجوع ،.","callback_data"=>"c"]],
]])
]);   
}
}
if($data == "addadm" and $chat_id == $admin){
$adminss = count($stingggi['stingggi']['admins']);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
• مرحبا بك في الادمنيه
- يمكنك رفع ادمن وتنزيل ادمن 

- يمكن للادمنيه تحكم في لوحه البوت مثلك
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"  الأدمنة  «".$adminss."»",'callback_data'=>"admins"]],
[['text'=>"رفع مشرف ⁦⁩",'callback_data'=>"addadmin"],['text'=>"تنزيل مشرف ⁦",'callback_data'=>"deladmin"]],
[["text"=>"مسح الادمنيه ","callback_data"=>"dalalladmin"]],
[["text"=>"رجوع ،.","callback_data"=>"c"]],
]])
]);   
}
if($data == "stengbott"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
- مرحباً عزيزي المطور $nammee . 

- حساب المطور : @$alm

عدد نقاط الاشتراك في قناة التمويل  : $setcoin1 
*
`- يمكن للعضو ارسال /id لارسال الايدي الخاص به`
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' ¦ حذف جميع السلع','callback_data'=>'brokdelall']],
[['text'=>' ¦ جميع السلع','callback_data'=>'del']],
[['text'=>' ¦ إضافة سلعة','callback_data'=>'add'],['text'=>' ¦ حذف سلعة','callback_data'=>'deljj']],
[['text'=>" ¦ تعيين معرف المطور",'callback_data'=>"alm"]],
[['text'=>' ¦ تعيين قناة إثباتات','callback_data'=>'shh']],       
[['text'=>" ¦ تمويل قناة ¹",'callback_data'=>"addchannel"],['text'=>" ¦ حذف تمويل قناة ¹",'callback_data'=>"delchannel"]],
[['text'=>" ¦ تحديد نقآط الاشتراك في قناة تمويل",'callback_data'=>"setcoin1"]],   
[['text'=>" ¦ تمويل قناة ²",'callback_data'=>"addchannel2"],['text'=>" ¦ حذف تمويل قناة ²",'callback_data'=>"delchannel2"]],
[['text'=>' ¦ قسم النقاط','callback_data'=>"Nkatn"]],
[["text"=>"رجوع ،.","callback_data"=>"c"]],
]])
]);   
}
}
if($data == 'brokdelall'){
	bot('EditMessageText',[
	'chat_id'=>$chat_id2,
	'message_id'=>$message_id2,
	'text'=>'تم حذف جميع السلع',
	'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع','callback_data'=>'c']]
      ]
    ])
  ]);
  unset($sales['sales']);
  save($sales);
} 
if($data == 'ccoin'){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا عزيزي الان ارسل عدد نقاط تحويل ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'إلغاء الأمر ','callback_data'=>'c']]
      ]
    ])
  ]);
file_put_contents("ccoin.txt","ok");
 }
}
if($text and $ccoin == "ok"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تعين عدد نقاط تحويل ",
      'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع ','callback_data'=>'c']]
      ]
    ])
  ]);
file_put_contents("ccoin.txt","$text");
 }
}
				if($data == "ch" or $data == "ch1del" or $data == "ch2del"){
					if($data == "ch1del"){
					 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 1 من الإشتراك الإجباري 
", 
            'show_alert'=>true 
            ]); 
            unset($stinggggj['stinggggj']['ch1']);
						}
						}
						if($data == "ch2del"){
						 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
						bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            تم حذف قناة 2 من الإشتراك الإجباري 
", 
            'show_alert'=>true 
            ]); 
            unset($stinggggj['stinggggj']['ch2']);
						}
						}
					if($stinggggj['stinggggj']['ch1'] == null){
						$ch1 = "قناة 1  لا يوجد ";
						}else{
							$ch3 = bot('getchat',['chat_id'=>$stinggggj['stinggggj']['ch1']]);
							if($ch3->ok == true){
								$ch1 = $ch3->result->title;
								}else{
									$ch1 = "قناة 1  لا يوجد ";
									}
							}
							if($stinggggj['stinggggj']['ch2'] == null){
						$ch2 = "قناة 2  لا يوجد ";
						}else{
							$ch = bot('getchat',['chat_id'=>$stinggggj['stinggggj']['ch2']]);
							if($ch->ok == true){
								$ch2 = $ch->result->title;
								}else{
									$ch2 = "قناة 2  لا يوجد ";
									}
							}
					bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
اهلا عزيزي ‍ اليك قسم الاشتراك الاجباري
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$ch1",'callback_data'=>"ch"]],
[['text'=>"وضع قناة ",'callback_data'=>"ch1add"],['text'=>"حذف قناة ",'callback_data'=>"ch1del"]],
[['text'=>"$ch2",'callback_data'=>"ch"]],
[['text'=>"وضع قناة ",'callback_data'=>"ch2add"],['text'=>"حذف قناة ",'callback_data'=>"ch2del"]],
[['text'=>'رجوع ','callback_data'=>'c']],
]])
]);
$stinggggj['stinggggj']['stinggggj'] = null;
	$stinggggj['stinggggj']['id'] = null;
	file_put_contents("stinggggj.json",json_encode($stinggggj));
					}
					if($data == "ch1add" or $data == "ch2add"){
					 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
						bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الأن معرف القناة  او وجه أي رسالة من القناة 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ",'callback_data'=>"ch"]
]
]])
]);
if($data == "ch1add"){
$stinggggj['stinggggj']['stinggggj'] = "ch1";
}else{
	$stinggggj['stinggggj']['stinggggj'] = "ch2";
	}
	$stinggggj['stinggggj']['id'] = $from_id;
	file_put_contents("stinggggj.json",json_encode($stinggggj));
						}
						}
						 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
						if(!$data and $stinggggj['stinggggj']['stinggggj'] == 'ch1' or $stinggggj['stinggggj']['stinggggj'] == 'ch2' and $stinggggj['stinggggj']['id'] == $from_id and $update->message->forward_from_chat or preg_match("/(@)(.)/", $text)){
							if($stinggggj['stinggggj']['stinggggj'] == 'ch1' or $stinggggj['stinggggj']['stinggggj'] == 'ch2'){
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم حفظ القناة بنجاح 
	تأكد أن البوت مشرف في القناة ⁦⁩
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع ','callback_data'=>'ch']
],
]])
]);
if($update->message->forward_from_chat){
	$stinggggj['stinggggj'][$stinggggj['stinggggj']['stinggggj']] = $update->message->forward_from_chat->id;
	}else{
		$stinggggj['stinggggj'][$stinggggj['stinggggj']['stinggggj']] = $text;
		}
					$stinggggj['stinggggj']['stinggggj'] = null;
					$stinggggj['stinggggj']['id'] = null;
	file_put_contents("stinggggj.json",json_encode($stinggggj));
							}
							}
							}
if($text == "/id"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
هاذا هو ايديك عزيزي 
`$chat_id`
",
 'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
}

mkdir("data");
mkdir("data/addrd");

$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);

if($data == "addrd"){
	
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
 "text"=>"¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"rdod"]],
    ] 
   ])
 ]);
 exit;
}
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
 	file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$text);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
 "text"=>"
¦ جيد , يمكنك الان ارسال جواب الرد 
¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] 
- 
",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
 "text"=>"* تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"rdod"]],
    ] 
   ])
 ]);
}
}

 if($data == "deletrd"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
 "text"=>"*¦ حسننا عزيزي  
¦ الان ارسل الرد لمسحها *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"rdod"]],
    ] 
   ])
 ]);
}
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
 	$str = str_replace("- $text","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
 	unlink("data/addrd/$chat_id/$text.txt");
     unlink("data/addrd/$chat_id/media/$text.txt");
     unlink("data/addrd/$chat_id/media/sticker/$text.txt");
     unlink("data/addrd/$chat_id/media/video/$text.txt");
     unlink("data/addrd/$chat_id/media/videonote/$text.txt");
     unlink("data/addrd/$chat_id/media/document/$text.txt");
     unlink("data/addrd/$chat_id/media/photo/$text.txt");
     unlink("data/addrd/$chat_id/media/audio/$text.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
 "text"=>"*($text)
   تم مسح الرد * ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"rdod"]],
    ] 
   ])
 ]);
}
}
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
	file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
 "text"=>"*¦ هذا الرد ليس مضاف في قائمه الردود *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"rdod"]],
    ] 
   ])
 ]);
}
}

if($data == "radd"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id2,
'text'=>"*¦ ردود البوت  :

$get_rd
*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"rdod"]],
    ] 
   ])
 ]);
}
if($message->text and file_exists("data/addrd/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$chat_id/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
	if($data == "admins"){
		foreach($stingggi['stingggi']['admins'] as $admins){
		$names = bot("getchat",["chat_id"=>$admins])->result->first_name;
		if($names != null){
		$addmins .= "[$names](tg://user?id=$admins)\n";
		}
		}
		bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
	تفضل عزيزي الأدمن ⁦⁩ قائمة الأدمنة 
	$addmins
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع ','callback_data'=>'addadm']
],
]])
]);
		}
								if($data == "addadmin" or $data == "deladmin"){
									$a = str_replace(['addadmin','deladmin'],['لأرفعه أدمن ⁦','لأزيله من قائمة الأدمنة '],$data);
									bot('EditMessageText',[
	'chat_id'=>$chat_id, 
	'message_id'=>$message_id,
	'text'=>"
أرسل الان ايدي  الشخص $a 
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"إلغاء ",'callback_data'=>"addadm"]
],
]])
]);
$stingggi['stingggi']['stingggi'] = $data;
$stingggi['stingggi']['id'] = $from_id;
	file_put_contents("stingggi.json",json_encode($stingggi));
									}
										if($stingggi['stingggi']['stingggi'] == "addadmin" or $stingggi['stingggi']['stingggi'] == "deladmin"){
						if($text and $message and $stingggi['stingggi']['id'] == $from_id){
							$a = str_replace(['addadmin','deladmin'],['تم رفعه بنجاح ','تم تنزيله بنجاح '],$stingggi['stingggi']['stingggi']);
							bot('sendmessage',[
	'chat_id'=>$chat_id, 
	'text'=>"
	تم $a
	",
	'reply_to_meesage_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع ','callback_data'=>'addadm']
],
]])
]);
if($stingggi['stingggi']['stingggi'] == "addadmin"){
	$stingggi['stingggi']['admins'][] = $text;
	bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"
	مبارك تم رفعك كمشرف في البوت 
	",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية ','callback_data'=>'c']
],
]])
]);
	}else{
		foreach($stingggi['stingggi']['admins'] as $num => $json){
			if($json == $text){
		unset($stingggi['stingggi']['admins'][$num]);
		bot('sendmessage',[
	'chat_id'=>$text, 
	'text'=>"
	تم تنزيلك من الإشراف 
	",
]);
		break;
		}
		}
		}
					$stingggi['stingggi']['stingggi'] = null;
					$stingggi['stingggi']['id'] = null;
	file_put_contents("stingggi.json",json_encode($stingggi));
							}
							}
							
  if($data == 'dalalladmin'){
  $adminss = count($stingggi['stingggi']['admins']);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
    هل انت متأكد حذف جميع الادمنيه 
عدد الادمنيه  «".$adminss."»
    ",
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'نعم!','callback_data'=>'cd2']],
      [['text'=>'رجوع ','callback_data'=>'c']]
      ]
    ])
  ]);
  exit;
 }

 if($data == 'cd2'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم حذف جميع الادمنيه✔',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'العودة','callback_data'=>'c']]
      ]
    ])
  ]);
  unlink('stingggi.json');
  exit;
 }
 if($data == 'bandajjdd'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم حذف جميع المحظورين  ',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'العودة','callback_data'=>'c']]
      ]
    ])
  ]);
  unlink('stingggg.json');
  exit;
 }
 if($data == 'add'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'أرسل إسم السلعة؟!',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['mode'] = 'add';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'add'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'- تم حفظ إسم السلعة 
أرسل الآن سعرها'
  ]);
  $sales['n'] = $text;
  $sales['mode'] = 'addm';
  save($sales);
  exit;
 }
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'addm'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"تم حفظ الإسم والسعر...
 ¦ إسم السلعة: $sales[n]
 ¦ السعر: $text
 ¦ ارسل صورة السلعة مع الوصف
",
         "parse_mode"=>"markdown"
  ]);
  $sales['p'] = $text;
  $sales['mode'] = "photo";
  save($sales);
  exit;
 }
 }if($text != '/start' and $message->photo != null and $sales['mode'] == 'photo'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,7);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"تم حفظ الصورة
 ¦ الكود: (`$code` )
 ¦ ارسل السلعة اللذي تريد تسليمه  تلقائياً
ارسل ( ملف او نص او صوره او فيديو )
",
         "parse_mode"=>"markdown"
  ]);
  $dayy_s = array("Sat","Sun","Mon","Tue","Wed","Thu","Fri");
 $dayy_s1 = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة");
$dayy_s2 = date('D');
$dayy = str_replace($dayy_s, $dayy_s1, $dayy_s2);
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
  bot('sendMessage',[
   'chat_id'=>$sss,
   'text'=>"
- تم اضافة سلعة جديدة 
- من ماركت : [@$bott] 

 ¦ السلعة :- *$sales[n]* 
 ¦ السعر :- *$sales[p]*
 ¦ التاريخ :- *$dayy - $year/$month/$day*
",
'parse_mode'=>"MarkDown",
	'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>"بوت الماركت ",'url'=>"https://t.me/$bott?start"] ] ] ])
  ]);
  file_put_contents('codejj.json', "\n" . $code ."\n",FILE_APPEND);    
  file_put_contents('salesnem.json', "\n" . $sales[n] . "\n",FILE_APPEND);    
  $sales['sales'][$code]['name'] = $sales['n'];
  $sales['sales'][$code]['price'] = $sales['p'];
  $sales['sales'][$code]['photo'] = $message->photo[0]->file_id;
  $sales['sales'][$code]['caption'] = $message->caption;
  $sales['p'] = null;
  $sales['n'] = null;
  $sales['mode'] = "file";
  $sales["baageel"]=$code;
  save($sales);
  exit;
 }
 }
 
 if($text != '/start'  and $sales['mode'] == 'file'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
 if($message->document){
  $file_id=$message->document->file_id;
 $ty="document";
}elseif($message->video){
 $file_id=$message->video->file_id;
 $ty="video";
 }elseif($message->text){
 $file_id=$text;
 $ty="text";
}elseif($message->photo){
 $file_id=$message->photo[0]->file_id;
 $ty="photo";
 }
 $sales['sales'][$sales["baageel"]]['file']=$file_id;
 $sales['sales'][$sales["baageel"]]['file2']=$ty;
 $sales['sales'][$sales["baageel"]]['numbers']='end';
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'- تم حفظ التسليم التلقائي

ارسل عدد مرات بيع السلعة

اذا تريد بيع السلعه للجميع اضغط على غير محدود ',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- غير محدود ','callback_data'=>'stengbotttt']]
      ]
    ])
  ]);
  $sales['mode'] = "Numbers";
  save($sales);
  exit;
 }
}
if(is_numeric($text) and $sales['mode'] == 'Numbers'){
	if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
		 $sales['sales'][$sales["baageel"]]['numbers']= $text;
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'
- تم حفظ عدد مرات بيع السلعة
وتم اضافة السلعه بنجاح 
',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- رجوع ','callback_data'=>'stengbott']]
      ]
    ])
  ]);
  $sales['mode'] = "type";
  save($sales);
  exit;
	}
	}
if($data == "stengbotttt"){
 if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
- تم حفظ السلعه
عدد التسليم => غير محدود 
*
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،.","callback_data"=>"stengbott"]],
]])
]);   
}
}
 if($data == 'del'){
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة ','callback_data'=>'s'],['text'=>'حذف ','callback_data'=>'s'],['text'=>'تعديل ','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'حذف','callback_data'=>'del×'.$code],['text'=>'تعديل','callback_data'=>'edit×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'اختر ما تشاء الان',
    'reply_markup'=>$json
  ]);
  exit;
 }
 $ex = explode('×',$data);
 if($ex[0] == "del"){
 	if($sales['sales'][$ex[1]] != null){
 	unset($sales['sales'][$ex[1]]);
  $sales['mode'] = null;
  save($sales);
$sales = json_decode(file_get_contents('sales.json'),true);
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة ','callback_data'=>'s'],['text'=>'حذف ','callback_data'=>'s'],['text'=>'تعديل ','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'حذف','callback_data'=>'del×'.$code],['text'=>'تعديل','callback_data'=>'edit×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم الحذف السلعه بنجاح...
اختر ما تريد مجددا ',
    'reply_markup'=>$json
  ]);
 }else{
 	 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة ','callback_data'=>'s'],['text'=>'حذف ','callback_data'=>'s'],['text'=>'تعديل ','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'حذف','callback_data'=>'del×'.$code],['text'=>'تعديل','callback_data'=>'edit×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'السلعة غير موجودة يمكنك المحاولة مجددا',
    'reply_markup'=>$json
  ]);
 }
 }
 if($ex[0] == "edit"){
 	if($sales['sales'][$ex[1]] != null){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'اختر ماذا تريد ان تقوم بتعديله',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>"الاسم ",'callback_data'=>'Names×'.$ex[1]]],
   [['text'=>"السعر ",'callback_data'=>'coin×'.$ex[1]]],
   [['text'=>"الصورة و الوصف ",'callback_data'=>'photo×'.$ex[1]]],
   [['text'=>"تسليم السلعة ",'callback_data'=>'sales×'.$ex[1]]],
   [['text'=>"الكمية ",'callback_data'=>'km×'.$ex[1]]],
   [["text"=>"رجوع ،.","callback_data"=>"stengbott"]],
    ]])
  ]);
 	}else{
 	 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة ','callback_data'=>'s'],['text'=>'حذف ','callback_data'=>'s'],['text'=>'تعديل ','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'حذف','callback_data'=>'del×'.$code],['text'=>'تعديل','callback_data'=>'edit×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'السلعة غير موجودة يمكنك المحاولة مجددا',
    'reply_markup'=>$json
  ]);
 }
 }
  if($ex[0] == "Names"){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال الاسم الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']]
    ]])
  ]);
$sales['mode'] = "name×".$ex[1];
save($sales);
 	}
  if($ex[0] == "coin"){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال السعر الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']]
    ]])
  ]);
$sales['mode'] = "price×".$ex[1];
save($sales);
}
  if($ex[0] == "photo"){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال الصورة والوصف الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']]
    ]])
  ]);
$sales['mode'] = "photo×".$ex[1];
save($sales);
}
  if($ex[0] == "sales"){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال السلعة الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']]
    ]])
  ]);
$sales['mode'] = "sales×".$ex[1];
save($sales);
}
  if($ex[0] == "km"){
 	bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'قم بإرسال عدد مرات بيع السلعة الجديد',
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>'لا نهائي ','callback_data'=>'stengbotttt']]
    ]])
  ]);
  $sales['sales'][$ex[1]]['numbers'] = 'end';
$sales['mode'] = "km×".$ex[1];
save($sales);
}
 $ex = explode('×',$sales['mode']);
 if($sales['sales'][$ex[1]]['name'] and $message and !$data){
 	if($ex[0] == "name"){
 	$sales['sales'][$ex[1]]['name'] = $text;
 $tttype = 'الاسم';
 }elseif($ex[0] == "price"){
 	$sales['sales'][$ex[1]]['price'] = $text;
 $tttype = 'السعر';
 }elseif($ex[0] == "photo"){
 	$sales['sales'][$ex[1]]['photo'] = $photo_id;
	 $sales['sales'][$ex[1]]['caption'] = $caption;
	$tttype = 'الصورة';
 }elseif($ex[0] == "sales"){
 	 if($message->document){
  $file_id=$message->document->file_id;
 $ty="document";
}elseif($message->video){
 $file_id=$message->video->file_id;
 $ty="video";
 }elseif($message->text){
 $file_id=$text;
 $ty="text";
}elseif($message->photo){
 $file_id=$message->photo[0]->file_id;
 $ty="photo";
 }
  $sales['sales'][$ex[1]]['file']=$file_id;
 $sales['sales'][$ex[1]]['file2']=$ty;
 $tttype = 'السلعة';
 }elseif($ex[0] == "km"){
 	$sales['sales'][$ex[1]]['numbers'] = $text;
 $tttype = 'كمية السلع';
 }
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    تم تحديث $tttype بنجاح .
    ",    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- رجوع ','callback_data'=>'stengbott']]
      ]
    ])
   ]);
   $sales['mode'] = null;
   save($sales);
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"",
   ]);
  unlink('codejj.json',$text);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'خطأ - الكود غير صحيح '
   ]);
  }
exit;
}
}
 if($data == 'deljj'){
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة ','callback_data'=>'s'],['text'=>'حذف ','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'حذف','callback_data'=>'del×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'اختر السلعة المراد حذفها',
    'reply_markup'=>$json
  ]);
  exit;
 }
 $ex = explode('×',$data);
 if($ex[0] == "deljj"){
 	if($sales['sales'][$ex[1]] != null){
 	unset($sales['sales'][$ex[1]]);
  $sales['mode'] = null;
  save($sales);
$sales = json_decode(file_get_contents('sales.json'),true);
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة ','callback_data'=>'s'],['text'=>'حذف ','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'حذف','callback_data'=>'del×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']];
$jsonn = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'تم الحذف السلعه بنجاح...

اختر السلعة المراد حذفها الذي تريد حذفها 

اذا لا تريد حذف السلعه اضغط على الغاء الامر ',
    'reply_markup'=>$jsonn
  ]);
 }else{
 	$reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'اسم السلعة ','callback_data'=>'s'],['text'=>'حذف ','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['name'],'callback_data'=>"s"],['text'=>'حذف','callback_data'=>'del×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'- إلغاء الأمر ','callback_data'=>'stengbott']];
$jsonn = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'السلعة غير موجودة يمكنك المحاولة مجددا',
    'reply_markup'=>$jsonn
  ]);
 }
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if(in_array($chat_id,$stingggi['stingggi']['admins']) or $chat_id == $admin){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"",
   ]);
  unlink('codejj.json',$text);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'خطأ - الكود غير صحيح '
   ]);
  }
exit;
}
}
 #---------------
		if(in_array($chat_id,$stingggg['stingggg']['band'])){
	if($message){
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
عذرا أنت محظور من البوت 
      ",'reply_to_message_id'=>$message_id,
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
عذرا أنت محظور من البوت 
        ",
]);
		}
		return false;
}
#──────────────
 if(preg_match('/\/(start)(.*)/', $text)){
 $ex = explode(' ', $text);
if($chat_id == $ex[1]){
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"",]);
     exit;}}
 if(preg_match('/\/(start)(.*)/', $text )){
  $ex = explode(' ', $text);
$okl = bot('getchat',['chat_id'=>$ex[1]])->result->type;
  if(isset($ex[1])){
   if(!in_array($chat_id, $sales[$chat_id]['id'])){
   	if($okl == "private"){
    $sales[$chat_id]['baageel']=$ex[1];
    $sales[$chat_id]['c'] = 'Ok';
    }
    $sales[$chat_id]['id'][] = $chat_id;
    save($sales);
   }
 }
	$ch = $stinggggj['stinggggj']['ch1'];
$bot_id = bot('getme',['bot'])->result->id;
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$bot_id])->ok;
if($ch != null and $ok == "true"){
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
 يجب عليك الإشتراك في قناة البوت أولاً ؛
 $link
 إشترك في القناة ثم أرسل /start ، 
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك  ",'url'=>$link2]],
]])
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
 يجب عليك الإشتراك في قناة البوت أولاً ؛
 $link
 إشترك في القناة ثم أرسل /start ، 
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك  ",'url'=>$link2]],
]])
]);
		}
		return false;
}
}
$ch = $stinggggj['stinggggj']['ch2'];
$bot_id = bot('getme',['bot'])->result->id;
$ok = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$bot_id])->ok;
if($ch != null and $ok == "true"){
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
 يجب عليك الإشتراك في قناة البوت أولاً ؛
 $link
 إشترك في القناة ثم أرسل /start ، 
      ",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك  ",'url'=>$link2]],
]])
]);
	}
	if($data){
		bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
 يجب عليك الإشتراك في قناة البوت أولاً ؛
 $link
 إشترك في القناة ثم أرسل /start ، 
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"• اشتراك  ",'url'=>$link2]],
]])
]);
		}
		return false;
}
}
  if($sales[$chat_id]['c']){
 if(!$message->contact){
 	bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
*• يجب ان نتحقق من انك لست روبوت *

- اضغط على الزر ادناه لكي اتحقق ذلك ...
      ",'reply_to_message_id'=>$message_id,
      'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"التحقق من الحساب ⁦⁩",'request_contact'=>true,]],
],'resize_keyboard'=>true])
]);
exit();
 }
  }
 if(preg_match("/\/(start)/",$text )){
 	if($sales[$chat_id]['baageel']){
    $sales[$sales[$chat_id]['baageel']]['collect'] += $setengssj;
    $sales['allllyhya'] += 1;
    save($sales);
    bot('sendmessage',[
    'chat_id'=>$sales[$chat_id]['baageel'],
    'text'=>"- لقد دخل شخص  لرابط الدعوة الخاص بك  ولقد ربحت $setengssj نقطه
معلومات عنه :
      ايديه  : [$from_id]
      معرفه ان وجد ⁦ : [@$user]
      اسمه  : [$name]
  ¦ عدد نقاطك الان : ".$sales[$sales[$chat_id]['baageel']]['collect'],
    ]);
        $sales[$chat_id]['baageel']=0;
    save($sales);
    }
   if($text == '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" » أهلا بك يا عزيزي $name 
$start
 »  عدد نقاطك الآن ".$sales[$chat_id]['collect']." نقطة 
 ¦ قناة إثبات شراء في البوت : $sss",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>" ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
     [['text'=>' ¦ شراء سلعة','callback_data'=>'salessyhya'],['text'=>' ¦ جمع النقاط','callback_data'=>'col']],
     [['text'=>' ¦ شرح البوت','callback_data'=>'about'],['text'=>' ¦ شراء النقاط','callback_data'=>'buy']],
     [['text'=>'' ,'callback_data'=>"sup"]],[['text'=>" ¦ تواصل مع الادمن",'url'=>"http://t.me/$alm"]],
   ] 
   ])
  ]);
 }
}}
  if($data == 'back'){
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
   }
  $start = str_replace('الاسم',$name,$start);
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" » أهلا بك يا عزيزي $nammee 
$start
 »  عدد نقاطك الآن ".$sales[$chat_id]['collect']." نقطة 
?? ¦ قناة إثبات شراء في البوت : $sss",
    'parse_mode'=>"MarkDown",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>" ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']], 
     [['text'=>' ¦ شراء سلعة','callback_data'=>'salessyhya'],['text'=>' ¦ جمع النقاط','callback_data'=>'col']],
     [['text'=>' ¦ شرح البوت','callback_data'=>'about'],['text'=>' ¦ شراء النقاط','callback_data'=>'buy']],
     [['text'=>'' ,'callback_data'=>"sup"]],[['text'=>" ¦ تواصل مع الادمن",'url'=>"http://t.me/$alm"]],
   ] 
   ])
  ]);
 }
 if(bot('getMyCommands')->result[0] == null){
$Commands[] = ['command'=>"start",'description'=>"Start The Bot"];
$Commands[] = ['command'=>"id",'description'=>"Id "];
bot('setMyCommands',[
'commands'=>json_encode($Commands)
]);
}
$me = bot('getme',['bot'])->result->username;
$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$fakyou = file_get_contents("fakyou.txt");
$dayurl = explode("\n",file_get_contents($d."url.txt"));
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wed.txt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($text == '/free'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>" s 
",
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'انشاء هدية','callback_data'=>"offerfree"]],
     ]])
     ]);
     }
if($data == "offerfree"){
           bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
    'text'=>"
ارسل عدد النقاط لأصنع رابط هدية صالح لشخص واحد 
      ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'إلغاء ','callback_data'=>"c"]],
    ]])
     ]);
   file_put_contents("fakyou.txt","offerfree");
           }
           if(is_numeric($text) and $fakyou == "offerfree"){
            $cod = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,10);
            bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
تم صنع رابط هدية  بقيمة $text 
الرابط : 
https://t.me/$me?start=gift=$cod
      ",
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'رجوع ','callback_data'=>"c"]],
     ]])
     ]);
     file_put_contents($cod.".txt",$cod."\n".$text);
     file_put_contents($d.'.txt',$cod."\n",FILE_APPEND);
     unlink("fakyou.txt");
            }
            if(preg_match("/^\/(start)(.*)/s",$text)){

$ex1 = explode(' ',$text);
 $ex = explode('=',$ex1[1]);
if($ex[0] == "gift"){
$cood = explode("\n",file_get_contents($ex[1].".txt"));
$coin = $cood[1];
 if(in_array($ex[1],$day)){
 if(is_file($ex[1].'.txt')){
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"
لقد دخل شخص لرابط الهدية 
معلوماته 
      ايديه : [$from_id](tg://user?id=$chat_id)
      معرفه ان وجد : [@$user](tg://user?id=$chat_id)
      اسمه : [$name](tg://user?id=$chat_id)
   ",'parse_mode'=>"MarkDown"]);
    bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   لقد ربحت $coin نقطة 
   ",'reply_to_message_id'=>$message_id
]);
unlink($ex[1].'.txt');
$sales[$from_id]['collect'] += $coin;
save($sales);
sleep(1);
  }else{
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
عذرا  تم أخذ الهدية من شخص قبلك 
   ",'reply_to_message_id'=>$message_id,]);
   }
  }else{
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
عذرا الرابط خاطء 
   ",'reply_to_message_id'=>$message_id,]);
   }
 }
}
     if($data == "chs"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ اشترك في القنوات التالة واحصل على $setcoin1 نقطة ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>" ¦ القناة الاولى 1",'callback_data'=>"ch1"],['text'=>" ¦ القناة الثانية 2",'callback_data'=>"ch2"]],
[['text'=>"رجوع ",'callback_data'=>"col"]],
]
])
]);
}
if($data == "ch2"){
if($chat_id == in_array($chat_id,$getmoshh1) or $channel == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ لايوجد قناة تمت اضافتها هنا 
 ¦ يرجى المحاولة مره اخرى لاحقا ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"col"]],
]
])
]);
}
else
{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ اشترك في قناة التالية : $channels
 ¦ واحصل على $setcoin1 نقطه",
[['text'=>" ¦ اشتراك في القناة",'url'=>"t.me/$channel"]], 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>" ¦ تحقق من الإشتراك",'callback_data'=>"yesss"]],
]
])
]);
}
}
if($data == "ch1"){
if($chat_id == in_array($chat_id,$getmoshh) or $channels == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ لايوجد قناة تمت اضافتها هنا 
 ¦ يرجى المحاولة مره اخرى لاحقا ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"col"]],
]
])
]);
}
else
{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ اشترك في قناة التالية : $channels
 ¦ واحصل على $setcoin1 نقطه",
[['text'=>" ¦ اشتراك في القناة",'url'=>"t.me/$channels"]], 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>" ¦ تحقق من الإشتراك",'callback_data'=>"yess"]],
]
])
]);
}
}
if($data == "yess"){
$chuser = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$channels&user_id=".$chat_id);
if((strpos($chuser,'"status":"left"') or strpos($chuser,'"Bad Request: USER_ID_INVALID"') or strpos($chuser,'"status":"kicked"')) !== false){
	 bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>' ¦ اشترك بقناة أولاً',
      'show_alert'=>true,
 ]);
}else{
file_put_contents("getmosh.txt","$chat_id\n",FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ تم تحقيق من انضمامك بالقناة 
   ¦ حصلت على  $setcoin1  نقطة ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"col"]],
]
])
]);
$sales[$chat_id]['collect'] += $setcoin1;
file_put_contents("sales.json",json_encode($sales));
save($sales);
}
}
if($data == "yesss"){
$chuser = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$channel&user_id=".$chat_id);
if((strpos($chuser,'"status":"left"') or strpos($chuser,'"Bad Request: USER_ID_INVALID"') or strpos($chuser,'"status":"kicked"')) !== false){
	 bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>' ¦ اشترك بقناة أولاً',
      'show_alert'=>true,
 ]);
}else{
file_put_contents("getmosh1.txt","$chat_id\n",FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ تم تحقيق من انضمامك بالقناة 
   ¦ حصلت على  $setcoin1  نقطة ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"col"]],
]
])
]);
$sales[$chat_id]['collect'] += $setcoin1;
file_put_contents("sales.json",json_encode($sales));
save($sales);
}
} 
 if($data == "refccoin"){
  bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>" ¦ أرسل الان ايدي الشخص الذي تريد ارسال نقاط له وعدد النقاط بسطر ثاني \nگ مثل 
928337883\n50
 ¦ عمولة التحويل هي $ccoin نقطة 
        " ,      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع ","callback_data"=>"col"]],
    [['text'=>" ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']],
    ]])
    ]);
  }
 $addcoin = explode("\n",$text);
  $getchat = bot('getchat',['chat_id'=>$addcoin[0]])->ok;
  if($addcoin[0] and $addcoin[1]){
   $b = str_replace('-','',$addcoin[1]);
if(!preg_match("/(-)/", $addcoin[1]) and is_numeric($addcoin[1])){
   if($getchat == "true"){
    $ccoin = $addcoin[1] + $cccoin;
    if($sales[$chat_id]['collect'] >= $ccoin){
     $sales[$chat_id]['collect'] -= $ccoin;
     $sales[$addcoin[0]]['collect'] += $addcoin[1];
     save($sales);
     bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>" ¦ تم تحويل ".$addcoin[1]." نقطة ل ".$addcoin[0]." 
 ¦ نقاطك الان ".$sales[$chat_id]['collect']." نقطة 
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع ","callback_data"=>"col"]],
    ]]),'reply_to_message_id'=>$message_id,
]);
 bot('sendmessage',[
 'chat_id'=>$addcoin[0], 
 'text' =>" ¦ تم تحويل لك ".$addcoin[1]." نقطة 
 ¦ من الايدي $from_id 
 ¦ نقاطك الان ".$sales[$addcoin[0]]['collect']." نقطة 
 "]);
     }else{
      bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>" ¦ نقاطك غير كافية للتحويل 
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع ","callback_data"=>"col"]],
    [['text'=>" ¦ نقاطك «".$sales[$chat_id]['collect']."»",'callback_data'=>'nis']],
    ]]),'reply_to_message_id'=>$message_id,
]);
      }
    }else{
     bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>" ¦ هذا الشخص قد قام بحظر البوت او انه ليس مشترك في البوت ونحن لا نستطيع ارسال له النقاط 
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع ","callback_data"=>"col"]],
    ]]),'reply_to_message_id'=>$message_id,
]);
     }
   }else{
    bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text' =>" ¦ عذرا هذه طريقة غير مشروعة لاخذ نقاط 
 ¦ تم خصم منك 5 نقطة لفعلك هذا 
 ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"رجوع ","callback_data"=>"col"]],
    ]]),'reply_to_message_id'=>$message_id,
]);
bot('sendmessage',[
 'chat_id'=>$admin, 
 'text' =>" مرحبا مطوري 
 هناك شخص يستعمل طريقة غير مشروعة لربح النقاط 
 اسمه $name
 ايديه $from_id
تم خصم منه 5 نقطة 
 ",'parse_mode'=>"MarkDown",
]);
$sales[$chat_id]['collect'] -= 5;
save($sales);

    }
   }
 if($data == 'buy'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'للشراء إضغط على زر شراء النقاط 
وسيحولك إلى المطور البوت قم برسلته فقط لشراء... ',
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>" ¦ شراء النقاط",'url'=>"t.me/$alm"],['text'=>"القائمة الرئيسية ",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "about"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ البوت بسيط ولا يحتاج لشرح أصلاً...

ولكن على كل حال هذا شرح سريع ",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"1 ¦ الخطوة الأولى",'callback_data'=>"k1"],['text'=>" القائمة الرئيسية ",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "k1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"بعد الدخول للبوت إضغط على زر تجميع النقاط وبعدها سيرسل البوت لك رابط خاص بك فقط قم بنشره وأي شخص يدخل على الرابط تحصل على 1 نقطة ",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"2 ¦ الخطوة الثانية",'callback_data'=>"k2"],['text'=>" القائمة الرئيسية ",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "k2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ بعد جمع عدد جيد من النقاط 
 ¦ إضغط على زر  شراء سلعة وبعدها
¦ اختر السلعة (يجب أن يتوافق 
        سعر السلعة مع نقاطك) 
 ¦ في حال واجهتك مشكلة في جمع النقاط تواصل مع المطور ليقوم باعطائك نقاط بسعر رمزي",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"3 ¦ الخطوة الثالثة",'callback_data'=>"k3"],['text'=>" ¦ المطور",'url'=>"http://t.me/$alm"]],
[['text'=>" القائمة الرئيسية ",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "k3"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ البوت يقوم بتسليم السلعة تلقائيا\n\n♾ ¦ لا تحتاج الإنتظار حتى يتم تسليم سلعتك\n\n ¦ بمجرد الضغط على شراء السلعة يتم ارسالها\n\n ¦ في حال واجهتك مشكلة تواصل مع المطور",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>" ¦ لا أستطيع جمع النقاط",'callback_data'=>"k4"],['text'=>" القائمة الرئيسية ",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "k4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" ¦ إذا لا تستطيع جمع النقاط يمكنك شراؤها...",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>" ¦ شراء نقاط",'callback_data'=>"buy"],['text'=>" القائمة الرئيسية ",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "col"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🔬 ¦ أختار أحد من خيارات التالية
عدد نقاط الدخول عبر رابط الدعوه  : $setengssj 
عدد نقاط الاشتراك في قناة التمويل  : $setcoin1 
عدد نقاط تحويل النقاط  : $ccoinj 
عدد نقاط الهديه اليوميه  : $hadehdayj 
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   [['text'=>" ¦ رابط الدعوة",'callback_data'=>"ra1"],['text'=>" ¦ هدية يومية",'callback_data'=>"kk"]],
   [['text'=>" ¦ تحويل نقاط",'callback_data'=>"refccoin"],['text'=>" ¦ اشتراك في القنوات",'callback_data'=>"chs"]],
   [['text'=>" ¦ شراء نقاط ",'url'=>"http://t.me/$alm"]],
   [['text'=>"رجوع ",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
 if($data == 'ra1'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"\n ¦ هلا بك عزيزي $nammee مجدداً\n ¦ إليك الرابط الخاص بك
https://t.me/$me?start=$chat_id
ستربح نقطة عندما يدخل احد لرابط إحالتك \n ¦ ملاحظة : اذا لم يشترك صديقك بقناة البوت لن تربح \nإذا كان الأمر صعب  \n\nيمكنك شراء نقاط من مطوري $  \n\n ¦ للتواصل
« @$alm »",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"انشاء إعلان ",'callback_data'=>"SK"]],
[['text'=>"رجوع ",'callback_data'=>"col"]],
    ] 
   ])
  ]);
 }
 if($data == "SK"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
» افضل بوت ماركت 
» يمكنك جمع نقاط عبر رابط الدعوه الخاص بك او شراء نقاط من المطور 
 ¦ الآن إجمع النقاط و إستبدالها بالعروض 

 ¦ اضغط هنا  : https://t.me/$me?start=$chat_id",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"back"]],
]
])
]);
} 
 elseif($data == 'salessyhya'){
 bot('deleteMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
]);
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الكمية ','callback_data'=>'s'],['text'=>'السعر ','callback_data'=>'s'],['text'=>'إسم السلعة ️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  if($ex[1]==$sales["sales"][$code]["type"])	{
    $ap=$sales["sales"][$code]["apps"];
 $a= $sales["sales"][$code]["numbers"];
  if($a == 'end'){
  $a="";
  }
   $reply_markup['inline_keyboard'][] = [['text'=>"$a",'callback_data'=>$code],['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code]];
  }}
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'بحث عن سلعه ','callback_data'=>'search']];
$reply_markup['inline_keyboard'][] = [['text'=>'العودة إلى قائمة الخدمات ','callback_data'=>'back']];
  $reply_markup = json_encode($reply_markup);
  bot('sendMessage',[	

   'chat_id'=>$chat_id,
   'text'=>'- العروض التي يقدمها البوت ، 
~ عدد نقاطك الآن: '.$sales[$chat_id]['collect'],
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]['mode'] = null;
   save($sales);
   exit;
 } elseif($data == 'yes'){
  $price = $sales['sales'][$sales[$chat_id]['mode']]['price'];
$name = $sales['sales'][$sales[$chat_id]['mode']]['name'];
$file=$sales['sales'][$sales[$chat_id]['mode']]['file'];
$file2=$sales['sales'][$sales[$chat_id]['mode']]['file2'];
$mah = $sales[$chat_id]['numbercount'];
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
  bot('sendmessage',[
  "chat_id"=>$chat_id,
    "text"=>"تم قبول طلبك 
\nجاري تجهيز سلعة الإرسال \nإنتضر ثـ¹ـانـيـة حتى تستلم طلبك ",
  ]);
  if($file2=="text"){
  	bot("sendmessage",[
  "chat_id"=>$chat_id,
  "$file2"=>$file
  ]);
    bot('sendmessage',[
  "chat_id"=>$chat_id,
    "text"=>" « إيـصـآل طـلـب » 
شـكـراً لـإ سـتـخـدامـك الـبــوت الـخـاص بـنـا 
بحال واجهتك مشاكل في استلام سلعه قم بمراسلة الادمن  : @$alm ",
  "message_id"=>$message_id
  ]);
  }else{	
bot("send$file2",[
  "chat_id"=>$chat_id,
  "$file2"=>$file
  ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" « إيـصـآل طـلـب » 
شـكـراً لـإ سـتـخـدامـك الـبــوت الـخـاص بـنـا 
بحال واجهتك مشاكل في استلام سلعه قم بمراسلة الادمن  : @$alm ",
  	]);
 } 
$dayy_s = array("Sat","Sun","Mon","Tue","Wed","Thu","Fri");
 $dayy_s1 = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة");
$dayy_s2 = date('D');
$dayy = str_replace($dayy_s, $dayy_s1, $dayy_s2);
date_default_timezone_set('Asia/Jordan');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
    $userbot = "{$getMe->username}";
    $userb = strtoupper($userbot);
    	bot('sendmessage',[
	'chat_id'=>$sss,
	'text'=>"
- تم تسليم طلب جديد
- من ماركت : [@$bott] 

 ¦ السلعة :- *$name* 
 ¦ السعر :- *$price*
 ¦ التاريخ :- *$dayy - $year/$month/$day*

- معلومات المُشتري  :-
 ¦ الاسم :- [$nammee](tg://user?id=$chat_id)
 ¦ الأيدي :- $chat_id", 
'parse_mode'=>"MarkDown",
	'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				[
['text'=>"بوت الماركت ",'url'=>"https://t.me/$bott?start"]
   ],
   
                     ]
               ])
  	]);
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>" ¦ مرحبا مطوري 
 ¦ قم بشراء $name بسعر $price
• ┉ • ┉ •
 ¦ الأيدي: $chat_id
• ┉ • ┉ •
لدخول على صفحته اضغط على الرابط ⛓
 tg://openmessage?user_id=$chat_id
• ┉ • ┉ •
 ¦ المعرف إن وجد: @$user
• ┉ • ┉ •
 ¦ $time
-"
  ]);
  
  $sales[$chat_id]['collect'] -= $price;
  if($sales['sales'][$sales[$chat_id]['mode']]['numbers'] != 'end'){
  if($sales['sales'][$sales[$chat_id]['mode']]['numbers'] == 0 or $sales['sales'][$sales[$chat_id]['mode']]['numbers'] == 1){
  	unset($sales['sales'][$sales[$chat_id]['mode']]);
  }else{
  	$sales['sales'][$sales[$chat_id]['mode']]['numbers'] -=1;
  }
  }$sales[$chat_id]['mode'] = null;
  save($sales);
  exit;
 } else {
   if($data == 's') { exit; }
   $price = $sales['sales'][$data]['price'];
   $name = $sales['sales'][$data]['name'];
   $caption = $sales['sales'][$data]['caption'];
   if($price != null){
    if($price <= $sales[$chat_id]['collect']){
     bot('sendphoto',[
      'chat_id'=>$chat_id,
      'photo'=>$sales['sales'][$data]['photo'],
      'caption'=>"
اسم العرض  :  $name
وصف العرض  : $caption
سعر العرض :  $price
طريقة التسليم : تلقائي 
¦ هل أنت متأكد أنك تريد شراء",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
        [['text'=>'- تاكيد الشراء، ','callback_data'=>"yes"]],
        [['text'=>'- لا اريد الشراء ','callback_data'=>"salessyhya"]],
       ] 
      ])
     ]);
     $sales[$chat_id]['mode'] = $data;
     save($sales);
     exit;
    } else {
     bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
'text'=>"نقاطك غير كافية لشراء هذا السلعة 
الإسم السلعة :$name 
سعر السلعة :$price نقطة  
وصف العرض  : $caption
طريقة التسليم : تلقائي 
عدد نقاطك : ".$sales[$chat_id]['collect']." نقطة ",
      'show_alert'=>true
     ]);
    }
   }
 }
if($data=="search"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• اكتب اسم السعة المراد البحث عنها  
",
'parse_mode' => "MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>" رجوع  ",'callback_data'=>"sales"]],
    ] 
   ])
  ]);
  $sales[$chat_id]["mode"]="search";
  save($sales);
  exit;
}
if($sales[$chat_id]["mode"]=="search"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
جاري البحث...
",
  ]);
  
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'الكمية ','callback_data'=>'s'],['text'=>'السعر ','callback_data'=>'s'],['text'=>'إسم السلعة ️','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
  if(preg_match("/$text/",$sale["name"])||preg_match("/$text/",$name)){
  $co=$sales["sales"][$code]["country"];
  $ap=$sales["sales"][$code]["apps"];
  $a= $sales["sales"][$code]["numbers"];
  if($a == 'end'){
  $a="";
  }
   $reply_markup['inline_keyboard'][] = [['text'=>"$a",'callback_data'=>$code],['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code]];
  }}
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'بحث عن سلعه ','callback_data'=>'search']];
$reply_markup['inline_keyboard'][] = [['text'=>'العودة إلى قائمة الخدمات ','callback_data'=>'back']];
  $reply_markup = json_encode($reply_markup);
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'
 -: اهلا عزيزي
 :- اليك السلع التي تبحث عنها
',
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]["mode"]="";
  save($sales);
  exit;
}
$ary = array($admin);
$id = $message->chat->id;
$admins = in_array($id,$ary);
$data = $update->callback_query->data;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$mode = file_get_contents("stats/bc.txt");

if ($update && !in_array($id, $cut)) {
    mkdir('stats');
    file_put_contents("stats/users.txt", $id."\n",FILE_APPEND);
  }

    date_default_timezone_set("Asia/amaan");
    $getMe = bot('getMe')->result;
    $date = $message->date;
    $gettime = time();
    $sppedtime = $gettime - $date;
    $time = date('h:i');
    $date = date('y/m/d');
    $userbot = "{$getMe->username}";
    $userb = strtoupper($userbot);
    $bot = file_get_contents("com.txt");
    if($data == "starts"){ 
	 	$bot = str_replace(['off','on'],['معطل ','مفعل '],$baageel);
 	$twasss = str_replace(['off','on'],['معطل ','مفعل '],$twass);
 	foreach($stinggg['stinggg']['admins'] as $admins){
		$names = bot("getchat",["chat_id"=>$admins])->result->first_name;
		if($names != null){
		$addmins .= "[$names](tg://user?id=$admins)\n";
		}
		}
			foreach($stingggg['stingggg']['band'] as $band){
									if($band != null){
									$s .= "`$band` » [للدخول إلى الحساب ](tg://user?id=$band)\n";
									}
}
								$band = count($stingggg['stingggg']['band']);
						  $adminss = count($stingggi['stingggi']['admins']);
    if ($sppedtime == 3  or $sppedtime < 3) {
    $f = "ممتازة ";
    }
    if ($sppedtime == 9 or $sppedtime > 9 ) {
    $f = "لا بأس ";
    }
    if ($sppedtime == 10 or $sppedtime > 10) {
    $f = " سيئة جدا ";
    }
     bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$update->callback_query->message->message_id,
        'text' =>"
احصائيات البوت:
¦ عدد المشتركين في البوت : $users
☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆
المحظورين   «".$band."»
$s
♧♧♧♧♧♧♧♧♧♧♧♧♧♧♧♧♧
  الأدمنة  «".$adminss."»
$addmins
♡♡♡♡♡♡♡♡♡♡♡♡♡♡♡♡♡
عدد نقاط الدخول عبر رابط الدعوه  : $setengssj 
عدد نقاط الاشتراك في قناة التمويل  : $setcoin1 
عدد نقاط تحويل النقاط  : $ccoinj 
عدد نقاط الهديه اليوميه  : $hadehdayj 
◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇◇
اشعارات البوت  : $twasss
عمل البوت  : $bot
معرف البوت [@$userb] 
حالة البوت $f
الوقت الآن: 20$date | $time 
♤♤♤♤♤♤♤♤♤♤♤♤♤♤♤♤♤
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'رجوع ','callback_data'=>'c']],
            ]
        ])
       ]);
    }
if($message->reply_to_message and $message->chat->id== $admin and $text=="رفع"){
$a= $message->reply_to_message->document->file_id;
$get=bot("getfile",[
"file_id"=>$a
])->result->file_path; 
$v="ja.txt";
$file=file_put_contents($v, file_get_contents("https://api.telegram.org/file/bot".API_KEY."/".$get));
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم الرفع"
]);
}
$modir = $admin; 
$homse = explode("\n", $bot_tele1);
$name = $update->message->from->first_name;
$id = $message->from->id;
if($text == '/start' and !in_array($chat_id,$homse) ){
file_put_contents('userstart.json', "\n" . $chat_id . "\n",FILE_APPEND);    
bot('sendMessage',[
'chat_id'=>$modir,
'text'=>"٭ تم دخول شخص جديد الى البوت الخاص بك 
                 • ┉ • ┉ • ┉ • ┉ • ┉ •
• معلومات العضو الجديد .

• الاسم :  [$name](tg://user?id=$chat_id) 
• المعرف : [@$user] 
• الايدي :  $id
                 • ┉ • ┉ • ┉ • ┉ • ┉ •
• عدد الاعضاء الكلي : $users
",'disable_web_page_preview'=>true,
'parse_mode'=>"MarkDown",
]); 
}
$d = date('D');
$day = explode("\n",file_get_contents($d.'.txt'));
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
$fromid = $update->callback_query->from->id;
  if($data == "kk"){ 
  if(!in_array($fromid,$day)){
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"لقد ربحت $hadehdayj 
 يمكنك الربح مجدد بعد منتصف الليل ", 
 'show_alert'=>true,
]); 
$sales[$fromid]['collect'] += $hadehdayj;
save($sales);
file_put_contents($d.'.txt',$fromid."\n",FILE_APPEND);

}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
 'text' =>" حاول مجدداً بعد منتصف الليل  ",
        'show_alert'=>true,
]);
}
}

?>