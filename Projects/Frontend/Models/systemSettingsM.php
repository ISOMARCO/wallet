<?php 

class systemSettingsM extends Model 
{
    public static function defaultLanguage()
    {
        return DB::where('Active','1')->select('Default_Language_Code')->System_Settings()->row()->Default_Language_Code;
    }
    public static function makeDefaultLanguageCache()
    {
        $defaultLanguage = self::defaultLanguage();
        if(empty($defaultLanguage)) $defaultLanguage = 'az';
        return Cache::insert('SystemDefaultLanguage',$defaultLanguage,(60*60*24*365));
    }
}