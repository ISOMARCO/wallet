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
        $type = 'MAIN';
        if($parentCategory != NULL) $type = 'SUB';
        $transaction = DB::transStart();
        $transaction->insert('Category',[
            'Uid' => $uid,
            'Name' => $data['Name'],
            'Type' => $type,
            'Entry_Type' => $data['Entry_Type'],
            'Picture' => $data['Picture'],
            'User' => Session::Uid()
        ]);
        if($parentCategory != NULL)
        {
            if($categoryType == 'MAIN')
            {
                $mainCategory = $parentCategory;
            }
            else 
            {
                $mainCategory = DB::query( DB::select('Category_Uid')->where('Child_Uid',$parentCategory)->Sub_Category()->stringQuery() )->value();
            }
            $transaction->insert('Sub_Category',[
                'Uid' => uniqid(uniqid().'_'),
                'Category_Uid' => $mainCategory,
                'Parent_Uid' => $parentCategory,
                'Child_Uid' => $uid,
                'User' => Session::Uid()
            ]);
        }
        return $transaction->transEnd();

        
    }
}
