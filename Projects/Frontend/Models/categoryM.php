<?php 

class categoryM extends Model 
{
    public static function getCategory($type=NULL)
    {
        $query = DB::where('User',Session::Uid());
        if($type != NULL) $query->where('Type',strtoupper($type));
        return $query->Category()->stringQuery();
    }
}