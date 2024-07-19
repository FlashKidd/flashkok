<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

system("clear");
echo "\033[1;34m-------[AIRTIME SCRIPT]-------
\033[0;31mDEVELOPER     :  theflashxD
PURPOSE       :  AIRTIME
TELEGRAM      :  @Monkey_dxD
\033[1;34m---------[ENJOY]----------\n";

echo ">. Press Enter To Continue\n";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);

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






function generateRandomUsername($length = 14) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomUsername = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charactersLength - 1);
        $randomUsername .= $characters[$randomIndex];
    }

    return $randomUsername;
}









##############################
echo "Enter your number without 0 : ";
$handle = fopen("php://stdin", "r");
$phone_nr = fgets($handle);
$phone_nr = trim($phone_nr);

echo "How many times do you want this to run? : ";
$handle = fopen("php://stdin", "r");
$numbt = fgets($handle);
$numbt = trim($numbt);
$numbt++;

$scriptPath = '/data/data/com.termux/files/home/get_otp_124457.sh'; // Adjust this path as necessary
$g = 1;
$counter = 1;
while($g  < $numbt){
echo "\033[0;31mRound: $g of $numbt\n";
	$xcg = @unlink('cookie.txt');
	
	$username =  generateRandomUsername();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://games.play.mtn.co.za/login');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);

$tk  = "";
$tk = trim(strip_tags(getStr($curl,'name="_token" value="','"')));

//echo "<br>Token $tk";
echo "\033[1;32mToken: $tk\n";
#####################################################
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://games.play.mtn.co.za/login');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_token='.$tk.'&email=0'.$phone_nr.'');
$curl = curl_exec($ch);
curl_close($ch);

if ($counter % 2 == 0) {
        $counter++; 
        continue;
    }


    $counter++;
echo "Fetching otp: \n";


$otp = "";

sleep(10);

    for ($i = 0; $i<2;$i++){
    $output = shell_exec('bash ' . escapeshellarg($scriptPath) . ' 2>&1');

    
    preg_match('/Your OTP for Lucky Mzansi FreePlay is (\d+)/', $output, $matches);
        echo htmlspecialchars($matches[1]); 
        $otp = htmlspecialchars($matches[1]);

           

        system("clear");
    }



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://games.play.mtn.co.za/submitotp');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_token='.$tk.'&email=27'.$phone_nr.'&password='.$otp.'');
$curl = curl_exec($ch);

curl_close($ch);
if (!strpos($curl, "CREATE A USERNAME")) {
    echo "\nSome error, Occured...\n";	
}	
#############
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://games.play.mtn.co.za/player-details');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Content-Type: multipart/form-data; boundary=----WebKitFormBoundaryz3aMqtA7nWhItvfx';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryz3aMqtA7nWhItvfx
Content-Disposition: form-data; name="_token"

'.$tk.'
------WebKitFormBoundaryz3aMqtA7nWhItvfx
Content-Disposition: form-data; name="result"


------WebKitFormBoundaryz3aMqtA7nWhItvfx
Content-Disposition: form-data; name="msisdn"

27'.$phone_nr.'
------WebKitFormBoundaryz3aMqtA7nWhItvfx
Content-Disposition: form-data; name="subscription_id"


------WebKitFormBoundaryz3aMqtA7nWhItvfx
Content-Disposition: form-data; name="ext_ref"


------WebKitFormBoundaryz3aMqtA7nWhItvfx
Content-Disposition: form-data; name="mobile_number"

27'.$phone_nr.'
------WebKitFormBoundaryz3aMqtA7nWhItvfx
Content-Disposition: form-data; name="player_name"

'.$username.'
------WebKitFormBoundaryz3aMqtA7nWhItvfx--
');
$curl = curl_exec($ch);
curl_close($ch);
##################################################################                                  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://games.play.mtn.co.za/spin-now');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
$redirectedUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
echo "\nLink: $redirectedUrl\n";
curl_close($ch);


if ($redirectedUrl) {
    // Extract unique_id and game_id from URL
    $query_str = parse_url($redirectedUrl, PHP_URL_QUERY);
    parse_str($query_str, $query_params);
    $unique_id = isset($query_params['unique_id']) ? $query_params['unique_id'] : '';
    $game_id = isset($query_params['game_id']) ? $query_params['game_id'] : '';
    //echo "ID; $unique_id $game_id ";return;

for ($i=0;$i<3;$i++){


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://games.play.mtn.co.za/spin-and-win-store-score');
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_POST, 1);
        $headers = array(
            'Accept: */*',
            'Connection: keep-alive',
            'Host: games.play.mtn.co.za',
            'Content-Type: application/x-www-form-urlencoded',
            'Origin: https://games.play.mtn.co.za',
            'Referer: ' . $redirectedUrl,
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36'
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
            'unique_id' => $unique_id,
            'result' => 'Success',
            'game_id' => $game_id
        )));
        $curl = curl_exec($ch);
        //echo "$curl\n";
        curl_close($ch);
        if (strpos($curl, "Score info is stored successfully")) {
            echo "\033[1;32mHeist executed!\n";
        }else{
            echo "\033[0;31mL, maybe next time?\n";
        }
}
}
//return;
#############


$startTime = time(); 

while (time() - $startTime < 60) { 
    echo (time() - $startTime + 1) . " of 60.\n"; 
    sleep(1); 
	system("clear");
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://games.play.mtn.co.za/profile/edit');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);
####################
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://games.play.mtn.co.za/profile/'.$unique_id.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Content-Type: multipart/form-data; boundary=----WebKitFormBoundary8iVJ5rFZ9hx7v3Qs';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundary8iVJ5rFZ9hx7v3Qs
Content-Disposition: form-data; name="_method"

PUT
------WebKitFormBoundary8iVJ5rFZ9hx7v3Qs
Content-Disposition: form-data; name="_token"

'.$tk.'
------WebKitFormBoundary8iVJ5rFZ9hx7v3Qs
Content-Disposition: form-data; name="profile_picture"


------WebKitFormBoundary8iVJ5rFZ9hx7v3Qs
Content-Disposition: form-data; name="user_id"

'.$unique_id.'
------WebKitFormBoundary8iVJ5rFZ9hx7v3Qs
Content-Disposition: form-data; name="player_name"

'.$username.'
------WebKitFormBoundary8iVJ5rFZ9hx7v3Qs
Content-Disposition: form-data; name="mobile_number"

27788'.rand(100000, 999999).'
------WebKitFormBoundary8iVJ5rFZ9hx7v3Qs
Content-Disposition: form-data; name="is_new_game_notification_on"

1
------WebKitFormBoundary8iVJ5rFZ9hx7v3Qs--');
$curl = curl_exec($ch);
curl_close($ch);
##############
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://games.play.mtn.co.za/logout');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_token='.$tk.'');
$curl = curl_exec($ch);
##########################
$g++;
system("clear");

}
