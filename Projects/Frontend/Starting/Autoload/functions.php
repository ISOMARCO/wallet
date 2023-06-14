<?php 
function Encrypt($string)
{
    $method = "AES-256-CBC";
    $secret_key = hash("sha256","@!password_sifrele@!_");
    $secret_iv = '23-+=*#_';
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    return openssl_encrypt($string,$method,$secret_key,false,$iv);
}

function Decrypt($string)
{
    $method = "AES-256-CBC";
    $secret_key = hash("sha256","@!password_sifrele@!_");
    $secret_iv = '23-+=*#_';
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    return openssl_decrypt($string,$method,$secret_key,false,$iv);
}
function User($request = NULL)
{
    if(Cache::select('userInfo_'.Session::Uid()))
    {
        $data = json_decode(Cache::select('userInfo_'.Session::Uid()));
        if(!is_array($request)) return $data;
        $returnString = NULL;
        foreach($request as $key=>$value)
        {
            $returnString .= $data->$key.$value;
        }
        return $returnString;
    }
    if(loginM::makeUserCache())
    {
        $data = json_decode(Cache::select('userInfo_'.Session::Uid()));
        if(!is_array($request)) return $data;
        $returnString = NULL;
        foreach($request as $key=>$value)
        {
            $returnString .= $data->$key.$value;
        }
        return $returnString;
    }
    $data = (object) loginM::Info(Session::Uid());
    if(empty($data))
    {
        redirect(URL::base('home/exit'));
        return;
    } 
    if(!is_array($request)) return $data;
    $returnString = NULL;
    foreach($request as $key=>$value)
    {
        $returnString .= $data->$key.$value;
    }
    return $returnString;
}

function defaultLanguage()
{
    $cacheDefaultLanguage = Cache::select('SystemDefaultLanguage');
    if($cacheDefaultLanguage)
    {
        return $cacheDefaultLanguage;
    }
    systemSettingsM::makeDefaultLanguageCache();
    $defaultLanguage = Cache::select('SystemDefaultLanguage');
    if(empty($defaultLanguage)) $defaultLanguage = 'az';
    return $defaultLanguage;
}

function getIpAddress() 
{
    $headers = array(
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_X_CLUSTER_CLIENT_IP',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
    );

    foreach ($headers as $header) 
    {
        if (isset($_SERVER[$header]) && !empty($_SERVER[$header])) 
        {
            $ipAddresses = explode(',', $_SERVER[$header]);
            $ipAddress = trim($ipAddresses[0]);
            return $ipAddress;
        }
    }
    return NULL;
}

function detectDevice($userAgent) 
{
    $userAgent = strtolower($userAgent);

    $devices = array(
        'iphone' => 'iPhone',
        'ipad' => 'iPad',
        'android' => 'Android',
        'windows phone' => 'Windows Phone',
        'macintosh' => 'Mac',
        'mac os x' => 'Mac',
        'windows' => 'Windows',
        'linux' => 'Linux'
    );

    foreach ($devices as $keyword => $device) {
        if (strpos($userAgent, $keyword) !== false) {
            return $device;
        }
    }

    return 'Unknown';
}