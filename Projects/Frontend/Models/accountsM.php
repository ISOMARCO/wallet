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
    public static function addAccount($data=[])
    {
        $user = Session::Uid();
        if(!empty($data['User'])) $user = $data['User'];
        return DB::insert('Account',[
            'Uid' => uniqid(uniqid().'_'),
            'Name' => $data['Name'],
            'Bank_Code' => $data['Bank_Code'],
            'Type' => strtoupper($data['type']),
            'Credit_Amount' => $data['credit_amount'],
            'User' => $user
        ]);
    }
    public static function getUserAccounts()
    {
        return DB::where('Account.User',Session::Uid())->select('Account.Name','Banks.Picture','Banks.Style')->leftJoin('Banks.Code','Account.Bank_Code')->Account()->result();
    }
}