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
    public static function updateDefaultLanguage($lang)
    {
        DB::where('Active', '1')->update("System_Settings",[
            'Default_Language_Code' => $lang
        ]);
        Cache::delete("SystemDefaultLanguage");
        return self::makeDefaultLanguageCache();
    }
}