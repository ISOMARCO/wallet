<?php 

class systemSettingsM extends Model 
{
    public static function defaultLanguage()
    {
        return DB::where('Active')->select('Default_Language_Code')->System_Settings()->row();
    }
}