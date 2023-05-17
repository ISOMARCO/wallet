<?php 

class accountsM extends Model 
{
    public static function addBank($data=[])
    {
        return DB::insert('Banks',[
            'Code' => $data['Code'],
            'Name' => $data['Name'],
            'Picture' => FILES_DIR.'Accounts/'.$data['Picture'],
            'Style' => $data['Style']
        ]);
    }
    public static function getBanks()
    {
        return DB::select('Code','Name','Picture','Style')->where('Active',1)->Banks()->result();
    }
}