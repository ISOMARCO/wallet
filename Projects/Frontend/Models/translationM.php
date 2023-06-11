<?php 

class translationM extends Model 
{
    public static function languages()
    {
        return DB::where('Active', '1')->select('Name', 'Code')->Languages();
    }
    public static function getAllLanguages()
    {
        return DB::where('Active', '1')->select('Name', 'Code', 'Is_Default')->Languages()->result();
    }
}