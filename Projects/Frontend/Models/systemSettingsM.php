<?php 

class systemSettingsM extends Model 
{
    public static function defaultLanguage()
    {
        return DB::where('Active')->select('Default_Language_Code')->System_Settings()->row();
    }
    public static function makeDefaultLanguageCache()
    {
        $defaultLanguage = self::defaultLanguage()->Default_Language_Code;
        if(empty($defaultLanguage)) $defaultLanguage = 'az';
        return Cache::insert('SystemDefaultLanguage',$defaultLanguage,(60*60*24*365));
    }
}