<?php 

class settingsM extends Model 
{
    public static function loggedDevices()
    {
        return DB::where('User', Session::Uid())->select('Id', 'Ip_Address', 'User_Agent', 'Location')->Sessions()->result();
    }
    public static function logoutDevice()
    {
        return DB::where('Id', $id)->delete("Sessions");
    }
}