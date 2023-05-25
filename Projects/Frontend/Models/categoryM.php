<?php 

class categoryM extends Model 
{
    public static function getAllCategoryByUser($type=NULL)
    {
        $query = DB::select('Uid','Name')->where('User',Session::Uid());
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
            'User' => Session::Uid()
        ]);
        if($parentCategory != NULL)
        {
            #$categoryType = DB::query( DB::select('Type')->where('Uid',$parentCategory)->Category()->stringQuery() )->row()->Type;
            #if($categoryType == 'MAIN')
            #{
                $mainCategory = $parentCategory;
            #}
           # else 
            #{
                $mainCategory = DB::select('Category_Uid')->where('Parent_Uid',$parentCategory)->Sub_Category()->stringQuery();
                return $mainCategory;
            #}
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
