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
    if(Session::Uid())
    {
        if(loginM::makeUserCache())
        {
            return json_decode(Cache::select('userInfo_'.Session::Uid()));
        }
        return (object) ['Uid' => 'error', 'Username' => 'error','Name' => 'error','Surname' => 'error','Lang' => 'error','Role' => 'error'];
    }
}