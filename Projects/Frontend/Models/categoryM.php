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
            #$categoryType = DB::select()->where('Uid',$parentCategory)->Category()->row();
            $categoryType = DB::query("SELECT  Type  FROM Category  WHERE Uid =  '646e5abe3d0c3_646e5abe3d0c4'")->row();
            return $categoryType->Type;
            if($categoryType->Type == 'MAIN')
            {
                $mainCategory = $parentCategory;
            }
            else 
            {
                $mainCategory = DB::select('Category_Uid')->where('Parent_Uid',$parentCategory)->Sub_Category()->row()->Category_Uid;
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
