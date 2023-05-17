<?php 

class accountsM extends Model 
{
    public static function getBanks()
    {
        return DB::select('Code','Name','Picture','Style')->where('Active',1)->Banks()->result();
    }
}