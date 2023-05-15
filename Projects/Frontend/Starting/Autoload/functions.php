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
function User()
{
    if(!Cache::select('userInfo_'.Session::Uid()))
    {
        return json_decode(Cache::select('userInfo_'.Session::Uid()));
    }
    return [];
}