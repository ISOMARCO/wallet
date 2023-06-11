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
        $old = self::defaultLanguage();
        $transaction = DB::transStart();
        return $old;
        $transaction->where('Active', '1')->update("System_Settings", [
            'Default_Language_Code' => $lang
        ]);
        $transaction->where('Code', $old)->update('Languages', [
            'Is_Default' => '0'
        ]);
        $transaction->where('Code', $lang)->update('Languages', [
            'Is_Default' => '1'
        ]);
        Cache::delete("SystemDefaultLanguage");
        self::makeDefaultLanguageCache();
        $transaction->transEnd();
    }
}