<?php 

class settingsM extends Model 
{
    public static function loggedDevices()
    {
        return DB::where('User', Session::Uid())->select('Ip_Address', 'User_Agent')->Sessions()->result();
    }
}