<?php 

class categoryM extends Model 
{
    public static function getAllCategoryByUser($type=NULL)
    {
        $query = DB::select('Uid','Name','Picture')->where('User',Session::Uid());
        if($type != NULL) $query->where('Type',strtoupper($type));
        return $query->where('Active','1')->Category()->result();
    }
    public static function addCategory($data=[],$parentCategory=NULL)
    {
        $uid = uniqid(uniqid().'_');
        $transaction = DB::transStart();
        $transaction->insert('Category',[
            'Uid' => $uid,
            'Name' => $data['Name'],
            'Type' => $data['Type'],
            'Picture' => $data['Picture'],
            'Parent_Category' => $parentCategory,
            'User' => Session::Uid(),
            'Created_Date' => date('Y-m-d H:i:s')
        ]);
        return $transaction->transEnd();

        
    }
}
