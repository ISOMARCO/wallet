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